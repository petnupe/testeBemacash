<?php

namespace Bemacash\Entity;

/**
 * @Entity
 */

class Historico
{

	/**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
	private $id;

	/**
     * @ManyToOne(targetEntity="pedido")
     */
	private $pedido;

	/**
     * @ManyToOne(targetEntity="status")
     */
	private $status;

	/** @Column(type="date") */
	private $data;

	public function getId() : int
	{
		return $this->id;
	}

	public function getPedido() : Pedido
	{
		return $this->pedido;
	}

	public function setPedido($pedido) : self
	{
		$this->pedido = $pedido;
		return $this;
	}

	public function getStatus(): Status
	{
		return $this->status;
	}

	public function setStatus($status) : self
	{
		$this->status = $status;
		return $this;
	}

	public function getData()
	{
		return $this->data->format('d/m/Y');
	}

	public function setData($data) : self
	{
		$this->data = $data;
		return $this;
	}
}