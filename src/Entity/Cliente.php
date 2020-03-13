<?php

namespace Bemacash\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 */

class Cliente
{
	/**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
	private $id;

	/** @Column(type="string") */
	private $nome;

	/** @Column(type="string", unique=true);  */
	private $email;

	/** @Column(type="string"); */
	private $password;

	/** @OneToMany(targetEntity="pedido", mappedBy="cliente", cascade={"remove", "persist"})*/
	private  $pedidos;

	/**
     * @Column(type="string", nullable=true)
     */
	private $cnpj;

	/**
     * @Column(type="string", nullable=true)
     */
	private $uf;

	/**
     * @Column(type="string", nullable=true)
     */
	private $endereco;
	/**
     * @Column(type="string", nullable=true)
     */
	private $pais;

	/**
     * @Column(type="string", nullable=true)
     */
	private $cep;

	/**
     * @Column(type="string", nullable=true)
     */
	private $telefone;

	public function __construct()
	{
		$this->pedidos = new ArrayCollection();
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function getNome () : string
	{
		return $this->nome;
	}

	public function setNome($nome) : self
	{
		$this->nome = $nome;
		return $this;
	}

	public function getEmail () : string
	{
		return $this->email;
	}

	public function setEmail($email) : self
	{
		$this->email = $email;
		return $this;
	}

	public function getPassword () : string
	{
		return $this->password;
	}

	public function setPassword(string $password) : self
	{
		$this->password = $password;
		return $this;
	}

	public function verificaSenha(string $senhaPura)
	{
		return password_verify($senhaPura, $this->password);
	}

	public function addPedido(Pedido $pedido) : self
	{
		$this->pedidos->add($pedido);
		$pedido->setCliente($this);
		return $this;
	}

	public function getPedidos() : Collection
	{
		return $this->pedidos;
	}

	public function getCnpj() : string
	{
		return $this->cnpj;
	}

	public function setCnpj(string $cnpj) : self
	{
		$this->cnpj = $cnpj;
		return $this;
	}

	public function getUf() : string
	{
		return $this->uf;
	}

	public function setUf(string $uf) : self
	{
		$this->uf = $uf;
		return $this;
	}

	public function getEndereco() : string
	{
		return $this->endereco;
	}

	public function setEndereco(string $endereco) : self
	{
		$this->endereco = $endereco;
		return $this;
	}

	public function getPais() : string
	{
		return $this->pais;
	}

	public function setPais(string $pais) : self
	{
		$this->pais = $pais;
		return $this;
	}

	public function getCep() : string
	{
		return $this->cep;
	}

	public function setCep(string $cep) : self
	{
		$this->cep = $cep;
		return $this;
	}

	public function getTelefone(): string
	{
		return $this->telefone;
	}

	public function setTelefone($telefone) : self
	{
		$this->telefone = $telefone;
		return $this;
	}
}