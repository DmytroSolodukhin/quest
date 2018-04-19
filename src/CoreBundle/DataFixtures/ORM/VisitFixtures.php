<?php

namespace CoreBundle\DataFixtures\ORM;

use CoreBundle\Entity\Visit;

/**
 * Class: VisitFixtures.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class VisitFixtures extends AbstractForumFixture
{
    /**
     * @return int
     */
    public function getOrder()
    {
        return 6;
    }

    /**
     * @param array $data
     * @return Visit
     */
    protected function createEntity($data)
    {
        /** @var Visit $visit */
        $visit = $this->container->get('visit.handler')->createEntity();

        $visit->setTitle($data['title'])
            ->setPrice($data['price'])
            ->setId($data['id']);

        return $visit;
    }
}