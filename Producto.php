<?php
// src/Producto.php
namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "productos")]
class Producto {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: "string")]
    private $nombre;

    /** * s mapea la variable $precio a la columna real 'costo_venta' de la BD
     */
    #[ORM\Column(type: "decimal", precision: 10, scale: 2, name: "costo_venta")]
    private $precio;

    // Getters y setters (se mantienen igual para no romper tu index.php)
    public function getId() { 
        return $this->id; 
    }

    public function getNombre() { 
        return $this->nombre; 
    }

    public function setNombre($nombre) { 
        $this->nombre = $nombre; 
    }

    public function getPrecio() { 
        return $this->precio; 
    }

    public function setPrecio($precio) { 
        $this->precio = $precio; 
    }
}