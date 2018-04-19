<?php

namespace CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: Rule.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="rule")
 */
class Rule
{
    use ITDTrait;
}