<?php

namespace Betacie\Bundle\MangoPayBundle\Model;

use Betacie\Bundle\MangoPayBundle\ResponseBag;
use Betacie\Bundle\MangoPayBundle\Entity\PaymentCard;
use Betacie\MangoPay\Message\PaymentCardRequest;
use Doctrine\ORM\EntityManager;
use Guzzle\Http\Message\Response;

class PaymentCardManager {

    /**
     * @var PaymentCardRequest
     */
    protected $paymentCardRequest;

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(PaymentCardRequest $paymentCardRequest, EntityManager $em) {
        $this->paymentCardRequest = $paymentCardRequest;
        $this->em = $em;
    }

    public function create($parameters) {
        $response = $this->paymentCardRequest->create($parameters);
        $bag = new ResponseBag($response->json());
        return $bag->get('RedirectURL');
    }

    public function createEntity($paymentCardID) {
        $response = $this->paymentCardRequest->fetch($paymentCardID);
        $paymentCard = $this->denormalize($response);
        /* Card setted */
      
        if ($paymentCard->getCardNumber()) {
            $user = $this->getUserRepository()->findOneByMangoPayId($paymentCard->getOwnerId());
            $paymentCard->setUser($user);
            $this->em->persist($paymentCard);
            $this->em->flush();
        }


        return $paymentCard;
    }

    public function denormalize(Response $response) {
        $bag = new ResponseBag($response->json());

        $paymentCard = new PaymentCard();

        $paymentCard
                ->setCardNumber($bag->get('CardNumber'))
                ->setMangoPayId($bag->get('ID'))
                ->setOwnerId($bag->get('OwnerID'))
                ->setRedirectURL($bag->get('RedirectURL'))
                ->setReturnURL($bag->get('ReturnURL'))
                ->setTemplateURL($bag->get('TemplateURL'))
                ->setTag($bag->get('Tag'))
        ;

        return $paymentCard;
    }

    public function find($paymentCardId) {
        return $this->getRepository()->find($paymentCardId);
    }

    public function delete(PaymentCard $paymentCard) {
        $this->paymentCardRequest->delete($paymentCard->getMangoPayId());

        $this->em->remove($paymentCard);
        $this->em->flush();
    }

    private function getRepository() {
        return $this->em->getRepository('Betacie\\Bundle\\MangoPayBundle\\Entity\\PaymentCard');
    }

    private function getUserRepository() {
        return $this->em->getRepository('Betacie\\Bundle\\MangoPayBundle\\Entity\\User');
    }

}
