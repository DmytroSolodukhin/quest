<?php

/**
 * @author:     dss <dss@nxc.no>
 *
 * @copyright   Copyright (C) 2015 Norse Digital.
 * @date: 13 05 2015
 */
namespace CoreBundle\DataFixtures\ORM;

use CoreBundle\Entity\Quest;

/**
 * Class QuestFixtures.
 */
class QuestFixtures extends AbstractForumFixture
{
    /**
     * @return int
     */
    public function getOrder()
    {
        return 4;
    }

    /**
     * @param array $data
     * @return Quest
     */
    protected function createEntity($data)
    {
        /** @var Quest $quest */
        $quest = $this->container->get('quest.handler')->createEntity();

        $quest->setTitle($data['title'])
        ->setCity($this->getReference('Odessa'))
        ->setDescription('super')
        ->setInprogress(true)
        ->setUser($this->getReference('user'));

        return $quest;
    }
}
