<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class StrongAuthentication
{

    protected $id;
    protected $mangoPayId;
    protected $tag;
    protected $creationDate;
    protected $updateDate;
    protected $userId;
    protected $beneficiaryId;
    protected $urlRequest;
    protected $isDocumentsTransmitted;
    protected $isCompleted;
    protected $isSucceeded;
    protected $message;

    public function getId()
    {
        return $this->id;
    }

    public function getMangoPayId()
    {
        return $this->mangoPayId;
    }

    public function setMangoPayId($mangoPayId)
    {
        $this->mangoPayId = $mangoPayId;

        return $this;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    public function getBeneficiaryId()
    {
        return $this->beneficiaryId;
    }

    public function setBeneficiaryId($beneficiaryId)
    {
        $this->beneficiaryId = $beneficiaryId;

        return $this;
    }

    public function getUrlRequest()
    {
        return $this->urlRequest;
    }

    public function setUrlRequest($urlRequest)
    {
        $this->urlRequest = $urlRequest;

        return $this;
    }

    public function isDocumentsTransmitted()
    {
        return $this->isDocumentsTransmitted;
    }

    public function setIsDocumentsTransmitted($isDocumentsTransmitted)
    {
        $this->isDocumentsTransmitted = $isDocumentsTransmitted;

        return $this;
    }

    public function isCompleted()
    {
        return $this->isCompleted;
    }

    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    public function isSucceeded()
    {
        return $this->isSucceeded;
    }

    public function setIsSucceeded($isSucceeded)
    {
        $this->isSucceeded = $isSucceeded;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

}