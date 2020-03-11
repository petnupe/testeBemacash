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

    public function setEmail($email) : self {
        $this->email = $email;
        return $this;
    }

    public function getPassword () : string 
    {
        return $this->password;
    }

    public function setPassword($password) : self 
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
}