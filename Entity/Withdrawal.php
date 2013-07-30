<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class Withdrawal
{

    protected $id;
    protected $mangoPayId;
    protected $tag;
    protected $creationDate;
    protected $updateDate;
    protected $userId;
    protected $walletId;
    protected $amount;
    protected $amountWithoutFees;
    protected $clientFeeAmount;
    protected $isCompleted;
    protected $isSucceeded;
    protected $beneficiaryId;
    protected $error;

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

    public function getWalletId()
    {
        return $this->walletId;
    }

    public function setWalletId($walletId)
    {
        $this->walletId = $walletId;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmountWithoutFees()
    {
        return $this->amountWithoutFees;
    }

    public function setAmountWithoutFees($amountWithoutFees)
    {
        $this->amountWithoutFees = $amountWithoutFees;

        return $this;
    }

    public function getClientFeeAmount()
    {
        return $this->clientFeeAmount;
    }

    public function setClientFeeAmount($clientFeeAmount)
    {
        $this->clientFeeAmount = $clientFeeAmount;

        return $this;
    }

    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    public function getIsSucceeded()
    {
        return $this->isSucceeded;
    }

    public function setIsSucceeded($isSucceeded)
    {
        $this->isSucceeded = $isSucceeded;

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

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

}
