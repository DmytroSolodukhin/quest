<?php

namespace CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: Quest.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="time")
 */
class Time
{
    use ITDTrait;

    /**
     * @Assert\Type("\DateTime")
     * @JMS\Expose
     * @JMS\SerializedName("open")
     * @JMS\Type("string")
     *
     * @ORM\Column(type="datetime")
     */
    protected $open;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("quest")
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumn(name="quest", referencedColumnName="id", nullable=true)
     */
    protected $quest;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     *
     *
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("visit")
     *
     * @ORM\ManyToOne(targetEntity="Visit")
     * @ORM\JoinColumn(name="visit", referencedColumnName="id", nullable=true)
     */
    protected $visit;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("inprogress")
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $inprogress;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("price")
     *
     * @ORM\Column(type="integer")
     */
    protected $price;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("count")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="integer")
     */
    protected $count;

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInprogress()
    {
        return $this->inprogress;
    }

    /**
     * @param $inprogress
     * @return $this
     */
    public function setInprogress($inprogress)
    {
        $this->inprogress = $inprogress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param $open
     * @return $this
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuest()
    {
        return $this->quest;
    }

    /**
     * @param $quest
     * @return $this
     */
    public function setQuest($quest)
    {
        $this->quest = $quest;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVisit()
    {
        return $this->visit;
    }

    /**
     * @param $visit
     * @return $this
     */
    public function setVisit($visit)
    {
        $this->visit = $visit;

        return $this;
    }

}