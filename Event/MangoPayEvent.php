<?php

namespace Betacie\Bundle\MangoPayBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class MangoPayEvent extends Event
{

    protected $subject;

    function __construct($subject)
    {
        $this->subject = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }

}