<?php

namespace Bemacash\Entity;

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

    public function getId() : int
    {
      return $this->id;
    }

    public function getDescricao() : string
    {
		  return $this->descricao;
	  } 

    public function setDescricao($descricao) : self
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
      $this->valor = $valor;
      return $this;
    }
}