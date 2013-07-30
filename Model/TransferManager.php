<?php

namespace Betacie\Bundle\MangoPayBundle\Model;

use Betacie\Bundle\MangoPayBundle\Entity\Transfer;
use Betacie\Bundle\MangoPayBundle\ResponseBag;
use Betacie\MangoPay\Message\TransferRequest;
use Doctrine\ORM\EntityManager;
use Guzzle\Http\Message\Response;

class TransferManager
{

    /**
     * @var TransferRequest
     */
    protected $transferRequest;

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(TransferRequest $transferRequest, EntityManager $em)
    {
        $this->transferRequest = $transferRequest;
        $this->em = $em;
    }

    public function create(array $parameters)
    {
        $response = $this->transferRequest->create($parameters);
        $transfer = $this->denormalize($response);

        $this->em->persist($transfer);
        $this->em->flush();

        return $transfer;
    }

    public function denormalize(Response $response)
    {
        $bag = new ResponseBag($response->json());

        $transfer = new Transfer();
        $transfer
            ->setAmount($bag->get('Amount'))
            ->setBeneficiaryId($bag->get('BeneficiaryID'))
            ->setBeneficiaryWalletId($bag->get('BeneficiaryWalletID'))
            ->setClientFeeAmount($bag->get('ClientFeeAmount'))
            ->setCreationDate($bag->get('CreationDate'))
            ->setMangoPayId($bag->get('ID'))
            ->setPayerId($bag->get('PayerID'))
            ->setPayerWalletId($bag->get('PayerWalletID'))
            ->setTag($bag->get('Tag'))
            ->setUpdateDate($bag->get('UpdateDate'))
        ;

        return $transfer;
    }

}
