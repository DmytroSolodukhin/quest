<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use CoreBundle\Entity\Quest;
use Doctrine\Common\Collections\ArrayCollection;
use Sonata\UserBundle\Entity\BaseUser;

/**
 * Class User
 * @package Application\Sonata\UserBundle\Entity
 */
class User extends BaseUser
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $quest;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->quest = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ArrayCollection
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
     * @param $quest
     * @return $this
     */
    public function addQuest($quest)
    {
        $this->quest[] = $quest;

        return $this;
    }

    /**
     * @param Quest $quest
     * @return $this
     */
    public function removeQuest(Quest $quest)
    {
        $this->quest->removeElement($quest);

        return $this;
    }
}
