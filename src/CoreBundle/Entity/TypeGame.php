<?php

namespace CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Oh\GoogleMapFormTypeBundle\Validator\Constraints as OhAssert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: TypeGame.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="type")
 */
class TypeGame
{
    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     *
     * @Assert\Regex(
     *     pattern="/\D/",
     *     match=false,
     *     message="ID should be a number"
     * )
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * */
    private $id;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     *
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("quests")
     *
     * @ORM\ManyToMany(targetEntity="Quest", inversedBy="types")
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

    public function __toString()
    {
        return $this->name;
    }
}