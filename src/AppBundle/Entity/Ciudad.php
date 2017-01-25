<?php
// src/AppBundle/Entity/Ciudad.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ProyectoCupon_Ciudad")
 */
class Ciudad {
	/**
	 * @ORM\Id 
	 * @ORM\Column(type="integer") 
	 * @ORM\GeneratedValue() 
	 * 
	 */
	protected $id;
	/** @ORM\Column(type="string", length=100) */
	protected $nombre;
	/** @ORM\Column(type="string", length=100) */
	protected $slug;
	
	public function getId()
	{
		return $this->id;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}
	public function getSlug()
	{
		return $this->slug;
	}
	public function __toString()
	{
		return $this->getNombre();
	}
}