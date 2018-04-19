<?php

namespace CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: City.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="gallerey")
 */
class Gallerey
{
    use ITDTrait, ImageTrait, GallereyTrait;

}