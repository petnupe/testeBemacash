<?php

namespace Bemacash\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity 
 */

class Pedido {

	/**
 * @Id
 * @GeneratedValue
 * @Column(type="integer")
 */
	private $id;

	/** @ManyToOne(targetEntity="cliente") */
	private $cliente;

	/** @Column(type="date") */
	private $data;

	/**
     * @ManyToOne(targetEntity="contrato")
     */
	private $contrato;

	/** @OneToMany(targetEntity="historico", mappedBy="pedido", cascade={"remove", "persist"})*/
	private $historicos;

	/** @OneToMany(targetEntity="item", mappedBy="pedido", cascade={"remove", "persist"})*/
	private $itens;

	public function __construct()
	{
		$this->historicos = new ArrayCollection();
		$this->itens      = new ArrayCollection();
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id) : self
	{
		$this->id = $id;
		return $this->id;
	}

	public function getCliente() : Cliente
	{
		return $this->cliente;
	}

	public function setCliente(Cliente $cliente)
	{
		$this->cliente = $cliente;
		return $this;
	}

	public function getContrato() : Contrato
	{
		return $this->contrato;
	}

	public function setContrato(Contrato $contrato) : self
	{
		$this->contrato = $contrato;
		return $this;
	}

	public function getData()
	{
		return $this->data->format('d/m/Y');
	}

	public function setData($data) : self
	{
		$hoje = new DateTime(date('d-m-Y'));
		if($data > $hoje) {
			return false;
		}
		
		$this->data = $data;
		return $this;
	}

	public function addHistorico(Historico $historico) : self
	{
		$this->historicos->add($historico);
		return $this;
	}

	public function getHistoricos() : Collection
	{
		return $this->historicos;
	}

	public function getUltimoHistorico() : Historico
	{
		foreach ($this->historicos as $historico);
		return $historico;
	}

	public function addItem(Item $item) : self
	{
		$this->itens->add($item);
		return $this;
	}

	public function getItens() : Collection
	{
		return $this->itens;
	}

	public function valorTotalPedido() : float
	{
		$total = 0.00;
		foreach ($this->getItens() as $item) {
			$total += $item->getProduto()->getValor() * $item->getQuantidade();
		}
		return $total;
	}
}