<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use TJM\Bundle\BaseBundle\Entity\Entity as BaseEntity;

/**
AppBundle\Entity\Entity
to be used to grab pieces for actual entities, should have examples of most types of attributes and their getters/setters
@ORM\Table(name="entities")
@ORM\Entity(repositoryClass="TJM\Bundle\BaseBundle\Repository\Repository")
*/
class SampleEntity extends BaseEntity{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var integer $id
	@ORM\Column(name="unid", type="integer", nullable=false, columnDefinition="integer unsigned")
	@ORM\Id
	@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	@var AppBundle\Entity\SampleEntity
	@ORM\ManyToMany(targetEntity="AppBundle\Entity\SampleEntity", mappedBy="fooManyToManyOwningSide")
	*/
	protected $fooManyToManyInverseSide;

	/**
	@var AppBundle\Entity\SampleEntity
	@ORM\ManyToMany(targetEntity="AppBundle\Entity\SampleEntity", inversedBy="fooManyToManyInverseSide")
	@ORM\JoinTable(
		name="entities_entities",
		joinColumns={
			@ORM\JoinColumn(name="foo_many_to_many_owning_id", referencedColumnName="id")
		},
		inverseJoinColumns={
			@ORM\JoinColumn(name="foo_many_to_many_inverse_id", referencedColumnName="id")
		}
	)
	*/
	protected $fooManyToManyOwningSide;

	/**
	@var AppBundle\Entity\SampleEntity
	@ORM\ManyToOne(targetEntity="AppBundle\Entity\SampleEntity")
	@ORM\JoinColumns({
		@ORM\JoinColumn(name="foo_many_to_one_id", referencedColumnName="id")
	})
	*/
	protected $fooManyToOne;

	/**
	@var AppBundle\Entity\SampleEntity
	@ORM\OneToMany(targetEntity="AppBundle\Entity\SampleEntity", mappedBy="fooManyToOne")
	*/
	protected $fooOneToMany;

	/**
	@var string $fooString
	@ORM\Column(name="fooString", type="string")
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
	get id attribute
	@return integer $unid
	*/
	public function getId(){
		return $this->id;
	}

	/**
	get fooString attribute
	@return string $fooString
	*/
	public function getFooString(){
		return $this->fooString;
	}
	/**
	set fooString attribute
	@param string $value
	@return string $fooString
	*/
	public function setFooString($value){
		$this->fooString = $value;
		return $this;
	}

	/**
	Add fooManyToManyInverseSide
	@param AppBundle\Entity\SampleEntity $value
	*/
	public function addSampleEntity(\AppBundle\Entity\SampleEntity $value){
		$this->fooManyToManyInverseSide[] = $value;
		return $this;
	}

	/**
	Get fooManyToManyInverseSide
	@return Doctrine\Common\Collections\Collection
	*/
	public function getFooManyToManyInverseSide(){
		return $this->fooManyToManyInverseSide;
	}

	/**
	Get fooManyToManyOwningSide
	@return Doctrine\Common\Collections\Collection
	*/
	public function getFooManyToManyOwningSide(){
		return $this->fooManyToManyOwningSide;
	}

	/**
	Get fooManyToOne
	@return AppBundle\Entity\SampleEntity
	*/
	public function getFooManyToOne(){
		return $this->fooManyToOne;
	}
	/**
	Set fooManyToOne
	@param AppBundle\Entity\SampleEntity $fooManyToOne
	*/
	public function setFooManyToOne(\AppBundle\Entity\SampleEntity $fooManyToOne){
		$this->fooManyToOne = $fooManyToOne;
		return $this;
	}

	/**
	Get fooOneToMany
	@return Doctrine\Common\Collections\Collection
	*/
	public function getFooOneToMany(){
		return $this->fooOneToMany;
	}
}
