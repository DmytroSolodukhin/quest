<?php

namespace CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Oh\GoogleMapFormTypeBundle\Validator\Constraints as OhAssert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: Type.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="type")
 */
class Type
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var array
     */
    protected $quests = [];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param $quests
     * @return $this
     */
    public function setQuests($quests)
    {
        $this->quests = $quests;

        return $this;
    }

    /**
     * @param Quest $quest
     * @return $this
     */
    public function addQuest(Quest $quest)
    {
        $this->quests[] = $quest;

        return $this;
    }

    /**
     * @return Quest[]
     */
    public function getQuests()
    {
        return $this->quests;
    }
}