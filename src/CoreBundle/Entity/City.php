<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: City.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="city")
 */
class City
{

    use ITDTrait;

    /**
     * @JMS\Expose
     * @JMS\SerializedName("quest")
     * @JMS\Type("CoreBundle\Entity\Quest")
     *
     * @ORM\OneToMany(targetEntity="Quest", mappedBy="city", cascade={"all"}, orphanRemoval=true)
     */
    protected $quest;

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
     * City constructor.
     */
    public function __construct()
    {
        $this->quest = new ArrayCollection();
    }
}