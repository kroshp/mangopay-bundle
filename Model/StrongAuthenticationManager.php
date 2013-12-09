<?php

namespace Betacie\Bundle\MangoPayBundle\Model;

use Betacie\Bundle\MangoPayBundle\Entity\StrongAuthentication;
use Betacie\Bundle\MangoPayBundle\ResponseBag;
use Betacie\MangoPay\Message\StrongAuthenticationRequest;
use Doctrine\ORM\EntityManager;
use Guzzle\Http\Message\Response;

class StrongAuthenticationManager
{

    /**
     * @var StrongAuthenticationRequest
     */
    protected $strongAuthenticationRequest;

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(StrongAuthenticationRequest $strongAuthenticationRequest, EntityManager $em)
    {
        $this->strongAuthenticationRequest = $strongAuthenticationRequest;
        $this->em                          = $em;
    }

    /**
     * Create a StrongAuthentication
     *
     * @param  array  $parameters
     * @return StrongAuthentication
     */
    public function create($userId, array $parameters = array())
    {
        $response = $this->strongAuthenticationRequest->create($userId, $parameters);
        $wallet   = $this->denormalize($response);

        $this->em->persist($wallet);
        $this->em->flush();

        return $wallet;
    }

    public function sendFile(StrongAuthentication $strongAuthentication, $path)
    {
        $this->strongAuthenticationRequest->sendFile($strongAuthentication->getUrlRequest(), $path);
    }

    /**
     * Transform Guzzle Response to a StrongAuthentication
     *
     * @param \Guzzle\Http\Message\Response $response
     */
    public function denormalize(Response $response, StrongAuthentication $strongAuthentication = null)
    {
        $bag = new ResponseBag($response->json());

        if (null === $strongAuthentication) {
            $strongAuthentication = new StrongAuthentication();
        }

        $strongAuthentication
            ->setUserId($bag->get('UserID'))
            ->setBeneficiaryId($bag->get('BeneficiaryID'))
            ->setUrlRequest($bag->get('UrlRequest'))
            ->setIsDocumentsTransmitted($bag->get('IsDocumentsTransmitted'))
            ->setIsCompleted($bag->get('IsCompleted'))
            ->setIsSucceeded($bag->get('IsSucceeded'))
            ->setMessage($bag->get('Message'))
            ->setMangoPayId($bag->get('ID'))
            ->setTag($bag->get('Tag'))
            ->setCreationDate($bag->get('CreationDate'))
            ->setUpdateDate($bag->get('UpdateDate'))
        ;

        $this->em->persist($strongAuthentication);
        $this->em->flush();

        return $strongAuthentication;
    }

}
