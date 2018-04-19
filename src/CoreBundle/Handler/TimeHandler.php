<?php

namespace CoreBundle\Handler;

use Application\Sonata\UserBundle\Entity\User;
use CoreBundle\Entity\Quest;
use CoreBundle\Entity\Time;
use CoreBundle\Entity\Visit;
use CoreBundle\Model\Handler\EntityHandler;
use Doctrine\DBAL\Query\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class: TimeHandler.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class TimeHandler extends EntityHandler
{


    /**
     * @param $id
     * @return mixed
     */
    public function QGgetTime($id)
    {
        $date = new \DateTime();
        $ds = $date->format('Y-m-d');
        $date->modify('+14 days');
        $de = $date->format('Y-m-d');

        $query = $this->repository->createQueryBuilder('p')
            ->where('p.quest = '.$id)
            ->andWhere('p.open > \''.$ds.'\'')
            ->andWhere('p.open < \''.$de.'\'');

        return $query->getQuery()->getResult();
    }


    /**
     * @param $data
     * @return int
     */
    public function searchToTry($data)
    {

        $date_start = new \DateTime($data['date']);
        $date_end = new \DateTime($data['date']);
        $date_start->modify('-1 second');
        $date_end->modify('+1 day');

        /** @var QueryBuilder $query */
        $query = $this->repository->createQueryBuilder('p')
            ->where('p.quest = '.$data['quest'])
            ->andWhere('p.visit = '.$data['visit'])
            ->andWhere('p.open > \''.$date_start->format('Y-m-d').'\'')
            ->andWhere('p.open < \''.$date_end->format('Y-m-d').'\'');

        return $query->getQuery()->getResult();
    }

    /**
     * @return mixed
     */
    public function getEntitiesToDate()
    {
        $date  = new \DateTime();
        $query = $this->repository->createQueryBuilder('p')
            ->where('p.open < \''.$date->format('Y-m-d').'\'');

        return $query->getQuery()->getResult();
    }

    /**
     * @param Request $data
     * @param $date
     */
    public function createTime($data, $date, $progress = 0)
    {
        /** @var Quest $quest */
        $quest = $this->container->get('quest.handler')->getEntity($data->get('quest'));
        /** @var Visit $visit */
        $visit = $this->container->get('visit.handler')->getEntity($data->get('visit'));
        $date  = new \DateTime($date);

        /** @var Time $newTime */
        $newTime = $this->createEntity();
        $newTime->setQuest($quest)
            ->setPhone(preg_replace('/\-\s/', '',$data->get('phone')))
            ->setOpen($date)
            ->setVisit($visit)
            ->setTitle($data->get('name'))
            ->setInprogress($progress)
            ->setCount($data->get('count'))
            ->setPrice($data->get('price'));

        $this->objectManager->persist($newTime);
        $this->objectManager->flush();

        $message = "<h1>Заказ с occulto-quest.com</h1>".
            "<p>Квест: " .             $quest->getTitle() .     "</p>".
            "<p>Дата: " .              $date->format('d.m.Y') . "</p>".
            "<p>Время: " .             $visit->getTitle() .     "</p>".
            "<p>Имя: " .               $data->get('name') .     "</p>".
            "<p>Телефон: " .           $data->get('phone') .    "</p>".
            "<p>Количество человек: " .$data->get('count') .    "</p>".
            "<p>Цена: " .              $data->get('price') .    "</p>";

        $send = \Swift_Message::newInstance()
            ->setSubject('Occulto')
            ->setFrom('webmaster@occulto-quest.com')
            ->setTo($quest->getUser()->getEmail())
            ->setBody(
                $message,
                'text/html'
            );

        $this->container->get('mailer')->send($send);

        $send2 = \Swift_Message::newInstance()
            ->setSubject('Occulto ' . $quest->getTitle())
            ->setFrom('webmaster@occulto-quest.com')
            ->setTo('dmitreysergeevich86@gmail.com')
            ->setBody(
                $message,
                'text/html'
            );

        $this->container->get('mailer')->send($send2);

        if ($quest->getSms()) {
            $this->sendSMS($quest->getUser()->getPhone(),
                $quest->getTitle() . ' ' .
                $date->format('d.m.Y') . ' ' .
                $visit->getTitle() . ' ' .
                $data->get('phone')
            );

            if ($quest->getId() == 1) {
                $this->sendSMS('0634878234',
                $quest->getTitle() . ' ' .
                $date->format('d.m.Y') . ' ' .
                $visit->getTitle() . ' ' .
                $data->get('phone')
            );
            }
        }

    }

    /**
     *
     */
    public function sendSMS($phone, $text)
    {
        $url        = 'https://gate.smsclub.mobi/token/?';
        $username   = '380631392958';    // string User ID (phone number)
        $token      = 'Hmd3ZyPrQsuUThO'; // string Password
        $from       = 'gsm1';         // string, sender id (alpha-name) (as long as your alpha-name is not spelled out, it is necessary to use it)
        $to         = $phone;
        $text       = urlencode(iconv("UTF-8", "Windows-1251", $text));
        $url_result = $url.'username='.$username.'&token='.$token.'&from='.urlencode($from).'&to='.$to.'&text='.$text;
        if($curl = curl_init())
        {
            curl_setopt($curl, CURLOPT_URL, $url_result);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_exec($curl);
            curl_close($curl);
        }
    }

    /**
     * @param $data
     * @param $date
     * @param int $progress
     */
    public function createTimeAdmin($data, $date, $progress = 0, $text_where = "occulto-quest.com")
    {
        /** @var Quest $quest */
        $quest = $this->container->get('quest.handler')->getEntity($data->get('quest'));
        /** @var Visit $visit */
        $visit = $this->container->get('visit.handler')->getEntity($data->get('visit'));
        $date  = new \DateTime($date);

        /** @var Time $newTime */
        $newTime = $this->createEntity();
        $newTime->setQuest($quest)
            ->setPhone(preg_replace('/\-\s/', '',$data->get('phone')))
            ->setOpen($date)
            ->setVisit($visit)
            ->setTitle($data->get('name'))
            ->setInprogress($progress)
            ->setCount($data->get('count'))
            ->setPrice($data->get('price'));

        $this->objectManager->persist($newTime);
        $this->objectManager->flush();

        $message = "<h1>Заказ с $text_where</h1>".
            "<h1>Из $text_where</h1>".
            "<p>Квест: " .             $quest->getTitle() .     "</p>".
            "<p>Дата: " .              $date->format('d.m.Y') . "</p>".
            "<p>Время: " .             $visit->getTitle() .     "</p>".
            "<p>Имя: " .               $data->get('name') .     "</p>".
            "<p>Телефон: " .           $data->get('phone') .    "</p>".
            "<p>Количество человек: " .$data->get('count') .    "</p>".
            "<p>Цена: " .              $data->get('price') .    "</p>";

        $send = \Swift_Message::newInstance()
            ->setSubject('Occulto Admin')
            ->setFrom('webmaster@occulto-quest.com')
            ->setTo('dmitreysergeevich86@gmail.com')
            ->setBody(
                $message,
                'text/html'
            );

        $this->container->get('mailer')->send($send);
    }

    /**
     * @param User $user
     * @param $id
     * @return bool
     */
    public function changeProgress(User $user, $id)
    {
        /** @var Time $time */
        $time = $this->getEntity($id);
        if($time->getQuest()->getUser()->getId() == $user->getId() || $user->getId() == 4){
            $time->setInprogress(true);
            $this->objectManager->persist($time);
            $this->objectManager->flush();

            return true;
        }else{
            return false;
        }
    }

    /**
     * @param User $user
     * @param $id
     * @return bool
     */
    public function removeTime(User $user, $id)
    {
        /** @var Time $time */
        $time = $this->getEntity($id);
        if($time->getQuest()->getUser() == $user || $user->getId() == 4){
            $this->objectManager->remove($time);
            $this->objectManager->flush();
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function findSelfTime(User $user)
    {
        $quests = $this->container->get('quest.handler')->getEntities(['user' => $user]);

        $manager = $this->container->get('doctrine')->getManager();

        $query = "SELECT count(*) AS count FROM time WHERE inprogress = 0 ";

        /** @var Quest $quest */
        foreach($quests as $quest){
            $query .= " AND quest = ".$quest->getId();
        }

        $connection = $manager->getConnection();
        $statement = $connection->prepare($query);
        $statement->execute();

        return $statement->fetch();

    }
}