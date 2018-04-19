<?php

/**
 * @author:     dss <dss@nxc.no>
 *
 * @copyright   Copyright (C) 2015 Norse Digital.
 * @date: 13 05 2015
 */
namespace CoreBundle\DataFixtures\ORM;

use CoreBundle\Entity\City;

/**
 * Class CityFixtures.
 */
class CityFixtures extends AbstractForumFixture
{
    /**
     * @return int
     */
    public function getOrder()
    {
        return 0;
    }

    /**
     * @param array $data
     * @return City
     */
    protected function createEntity($data)
    {
        /** @var City $city */
        $city = $this->container->get('city.handler')->createEntity();

        $city->setTitle($data['title']);

        return $city;
    }
}
