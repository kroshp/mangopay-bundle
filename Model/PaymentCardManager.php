<?php

namespace Betacie\Bundle\MangoPayBundle\Model;

use Betacie\MangoPay\Message\PaymentCardRequest;
use Doctrine\ORM\EntityManager;

class PaymentCardManager
{

    /**
     * @var PaymentCardRequest
     */
    protected $paymentCardRequest;

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(PaymentCardRequest $paymentCardRequest, EntityManager $em)
    {
        $this->paymentCardRequest = $paymentCardRequest;
        $this->em = $em;
    }

    public function find($paymentCardId)
    {
        return $this->getRepository()->find($paymentCardId);
    }

    private function getRepository()
    {
        return $this->em->getRepository('Betacie\\Bundle\\MangoPayBundle\\Entity\\PaymentCard');
    }

}
