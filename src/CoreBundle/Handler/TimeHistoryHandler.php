<?php

namespace CoreBundle\Handler;

use CoreBundle\Entity\Time;
use CoreBundle\Entity\TimeHistory;
use CoreBundle\Model\Handler\EntityHandler;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class: TimeHistoryHandler.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2017, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class TimeHistoryHandler extends EntityHandler
{

    /**
     * rewrite Entities
     */
    public function run()
    {
        $tims = $this->container->get('time.handler')->getEntitiesToDate();

        /** @var Time $time */
        foreach($tims as $time){
            /** @var TimeHistory $time_history */
            $time_history = $this->createEntity()
                ->setCount($time->getCount())
                ->setOpen($time->getOpen())
                ->setPrice($time->getPrice())
                ->setQuest($time->getQuest())
                ->setVisit($time->getVisit())
                ->setPhone($time->getPhone())
                ->setTitle($time->getTitle());

            $this->getObjectManager()->persist($time_history);
            $this->getObjectManager()->remove($time);
        }

        $this->getObjectManager()->flush();
    }

}