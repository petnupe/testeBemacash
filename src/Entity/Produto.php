<?php

namespace Bemacash\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity 
 * */

class Produto
{
	/**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
	private $id;

	/**
     * @Column(type="string");
     */
	private $descricao;

	/**
     * @Column(type="decimal", precision=2, scale=1)
     */
	private $valor;

	/**
     * @Column(type="string")
     */
	private $icone;

	public function getId() : int
	{
		return $this->id;
	}

	public function getDescricao() : string
	{
		return $this->descricao;
	}

	public function setDescricao(string $descricao) : self
	{
		$this->descricao = $descricao;
		return $this;
	}

	public function getValor() : float
	{
		return $this->valor;
	}

	public function setValor(float $valor) : self
	{
		if($valor <= 0.00) {
			return false;
		}		

		$this->valor = $valor;
		return $this;
	}

	public function setIcone(string $icone) : self
	{
		$this->icone = $icone;
		return $this;
	}

	public function getIcone() : string
	{
		return $this->icone;
	}
}