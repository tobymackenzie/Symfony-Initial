<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use TJM\Bundle\BaseBundle\Entity\Entity as BaseEntity;

/* *
*To be used to grab pieces for actual entities, should have examples of most types of attributes and their getters/setters
*
*@ORM\Entity(repositoryClass="TJM\Bundle\BaseBundle\Repository\Repository")
*@ORM\Table()
*/
class SampleEntity extends BaseEntity{
	/*==========
	==attributes/fields
	==========*/
	/**
	*@ORM\Column(type="integer", nullable=false, columnDefinition="integer unsigned")
	*@ORM\GeneratedValue()
	*@ORM\Id
	*/
	protected $id;

	/**
	*@ORM\ManyToMany(targetEntity="AppBundle\Entity\SampleEntity", mappedBy="fooManyToManyOwningSide")
	*/
	protected $fooManyToManyInverseSide;

	/**
	*@ORM\JoinTable(
		*joinColumns={
			*@ORM\JoinColumn(referencedColumnName="id")
		*},
		*inverseJoinColumns={
			*@ORM\JoinColumn(referencedColumnName="id")
		*}
	*)
	*@ORM\ManyToMany(targetEntity="AppBundle\Entity\SampleEntity", inversedBy="fooManyToManyInverseSide")
	*/
	protected $fooManyToManyOwningSide;

	/**
	*@ORM\JoinColumns({
		*@ORM\JoinColumn(referencedColumnName="id")
	*})
	*@ORM\ManyToOne(targetEntity="AppBundle\Entity\SampleEntity")
	*/
	protected $fooManyToOne;

	/**
	*@ORM\OneToMany(targetEntity="AppBundle\Entity\SampleEntity", mappedBy="fooManyToOne")
	*/
	protected $fooOneToMany;

	/**
	*@ORM\Column(type="string")
	*/
	protected $fooString;

	/*==========
	==basic
	==========*/
	public function __construct(){
		//--init many to many arrays
		$this->fooManyToManyInverseSide = new ArrayCollection();
		$this->fooManyToManyOwningSide = new ArrayCollection();

		//--set defaults
	}

	/*==========
	==getters and setters
	==========*/
	/**
	*get id attribute
	*@return integer $unid
	*/
	public function getId(){
		return $this->id;
	}

	/**
	*get fooString attribute
	*@return string $fooString
	*/
	public function getFooString(){
		return $this->fooString;
	}
	/**
	*set fooString attribute
	*@param string $value
	*@return string $fooString
	*/
	public function setFooString($value){
		$this->fooString = $value;
		return $this;
	}

	/**
	*Add fooManyToManyInverseSide
	*@param AppBundle\Entity\SampleEntity $value
	*/
	public function addSampleEntity(\AppBundle\Entity\SampleEntity $value){
		$this->fooManyToManyInverseSide[] = $value;
		return $this;
	}

	/**
	*Get fooManyToManyInverseSide
	*@return Doctrine\Common\Collections\Collection
	*/
	public function getFooManyToManyInverseSide(){
		return $this->fooManyToManyInverseSide;
	}

	/**
	*Get fooManyToManyOwningSide
	*@return Doctrine\Common\Collections\Collection
	*/
	public function getFooManyToManyOwningSide(){
		return $this->fooManyToManyOwningSide;
	}

	/**
	*Get fooManyToOne
	*@return AppBundle\Entity\SampleEntity
	*/
	public function getFooManyToOne(){
		return $this->fooManyToOne;
	}
	/**
	*Set fooManyToOne
	*@param AppBundle\Entity\SampleEntity $fooManyToOne
	*/
	public function setFooManyToOne(\AppBundle\Entity\SampleEntity $fooManyToOne){
		$this->fooManyToOne = $fooManyToOne;
		return $this;
	}

	/**
	*Get fooOneToMany
	*@return Doctrine\Common\Collections\Collection
	*/
	public function getFooOneToMany(){
		return $this->fooOneToMany;
	}
}
