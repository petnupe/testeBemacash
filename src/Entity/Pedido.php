<?php

namespace Bemacash\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * @Entity
 */
class Pedido 
{
     /**
      * @Id
      * @Column(type="integer")
      * @GeneratedValue(strategy="AUTO")
      */
     private $id;

     /**
      * @ManyToOne(targetEntity="Cliente", cascade={"persist"})
      * @JoinColumn(name="cliente_id", referencedColumnName="id")
      */
     private $cliente;

     /**
      * @ManyToOne(targetEntity="Contrato", cascade={"persist"})
      * @JoinColumn(name="contrato_id", referencedColumnName="id")
      */
      private $contrato;

     /** 
      * @Column(type="date") 
      */
     private $data;

     /**
      * @OneToMany(targetEntity="Historico", mappedBy="pedido")
     */
    private $historicos;

     /** @OneToMany(targetEntity="Item", mappedBy="pedido")*/
	private $itens;

     public function __construct() 
     {
          $this->historicos = new ArrayCollection();
          $this->itens      = new ArrayCollection();
     }

	public function getId(){
		return $this->id;
	}

	public function getCliente(){
		return $this->cliente;
	}

	public function setContrato($contrato) {
		$this->contrato = $contrato;
     }
     
     public function getContrato(){
		return $this->contrato;
	}

	public function setCliente($cliente) {
		$this->cliente = $cliente;
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
          $historico->setPedido($this);
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