<?php

namespace Bemacash\Entity;

/**
 * @Entity 
 */

class Pedido 
{

 /**
 * @Id
 * @GeneratedValue
 * @Column(type="integer")
 */
    private $id;

    /** @ManyToOne(targetEntity="cliente") */
    private $cliente;

    /** @Column(type="date") */
    private $data_pedido;
    
    /** @Column(type="date") */
    private $data_status;
        
    /** @Column(type="string") */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id) : self
    {
        $this->id = $id;
        return $this->id;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

    public function getData_pedido()
    {
        return $this->data_pedido;
    }

    public function setData_pedido($data_pedido){
        $this->data_pedido = $data_pedido;
    }

    public function getData_status(){
        return $this->data_status;
    }

    public function setData_status($data_status)
    {
        $this->data_status = $data_status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}