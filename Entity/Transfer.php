<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class Transfer
{

    protected $id;
    protected $mangoPayId;
    protected $tag;
    protected $creationDate;
    protected $updateDate;
    protected $payerId;
    protected $beneficiaryId;
    protected $amount;
    protected $clientFeeAmount;
    protected $payerWalletId;
    protected $beneficiaryWalletId;

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

    public function getPayerId()
    {
        return $this->payerId;
    }

    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;

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

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

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

    public function getPayerWalletId()
    {
        return $this->payerWalletId;
    }

    public function setPayerWalletId($payerWalletId)
    {
        $this->payerWalletId = $payerWalletId;

        return $this;
    }

    public function getBeneficiaryWalletId()
    {
        return $this->beneficiaryWalletId;
    }

    public function setBeneficiaryWalletId($beneficiaryWalletId)
    {
        $this->beneficiaryWalletId = $beneficiaryWalletId;

        return $this;
    }

}
