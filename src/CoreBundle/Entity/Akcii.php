<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: Akcii.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="akcii")
 */
class Akcii
{
    use ITDTrait, ImageTrait;
}