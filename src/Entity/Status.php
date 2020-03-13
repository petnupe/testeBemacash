<?php

namespace Bemacash\Entity;

/**
 * @Entity 
 * */

class Status
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
}