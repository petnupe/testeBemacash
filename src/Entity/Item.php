<?php

namespace Bemacash\Entity;

/**
 * @Entity
 */

class Item
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
     * @ManyToOne(targetEntity="Produto")
     */
	private $produto;

	/**
     * @Column(type="integer")
     */
	private $quantidade;

	public function getId() : int
	{
		return $this->id;
	}

	public function getPedido() : Pedido
	{
		return $this->pedido;
	}

	public function setPedido(Pedido $pedido) : self
	{
		$this->pedido = $pedido;
		return $this;
	}

	public function getProduto(): Produto
	{
		return $this->produto;
	}

	public function setProduto(Produto $produto) : self
	{
		$this->produto = $produto;
		return $this;
	}

	public function getQuantidade() : int
	{
		return $this->quantidade;
	}

	public function setQuantidade  (int $quantidade) : self
	{
		$this->quantidade = $quantidade;
		return $this;
	}
}