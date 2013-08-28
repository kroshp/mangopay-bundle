<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class Contribution implements ContributionInterface
{

    protected $id;
    protected $mangoPayId;
    protected $userId;
    protected $walletId;
    protected $amount;
    protected $clientFeeAmount;
    protected $isSucceeded;
    protected $isCompleted;
    protected $paymentUrl;
    protected $templateUrl;
    protected $returnUrl;
    protected $registerMeanOfPayment;
    protected $error;
    protected $paymentCardId;
    protected $culture;
    protected $type;
    protected $paymentMethodType;
    protected $answerCode;
    protected $answerMessage;
    protected $tag;
    protected $creationDate;
    protected $updateDate;

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

    public function getClientFeeAmount()
    {
        return $this->clientFeeAmount;
    }

    public function setClientFeeAmount($clientFeeAmount)
    {
        $this->clientFeeAmount = $clientFeeAmount;

        return $this;
    }

    public function isSucceeded()
    {
        return $this->isSucceeded;
    }

    public function setSucceeded($isSucceeded)
    {
        $this->isSucceeded = $isSucceeded;

        return $this;
    }

    public function isCompleted()
    {
        return $this->isCompleted;
    }

    public function setCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    public function setPaymentUrl($paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;

        return $this;
    }

    public function getTemplateUrl()
    {
        return $this->templateUrl;
    }

    public function setTemplateUrl($templateUrl)
    {
        $this->templateUrl = $templateUrl;

        return $this;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    public function getRegisterMeanOfPayment()
    {
        return $this->registerMeanOfPayment;
    }

    public function setRegisterMeanOfPayment($registerMeanOfPayment)
    {
        $this->registerMeanOfPayment = $registerMeanOfPayment;

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

    public function getPaymentCardId()
    {
        return $this->paymentCardId;
    }

    public function setPaymentCardId($paymentCardId)
    {
        $this->paymentCardId = $paymentCardId;

        return $this;
    }

    public function getCulture()
    {
        return $this->culture;
    }

    public function setCulture($culture)
    {
        $this->culture = $culture;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getPaymentMethodType()
    {
        return $this->paymentMethodType;
    }

    public function setPaymentMethodType($paymentMethodType)
    {
        $this->paymentMethodType = $paymentMethodType;

        return $this;
    }

    public function getAnswerCode()
    {
        return $this->answerCode;
    }

    public function setAnswerCode($answerCode)
    {
        $this->answerCode = $answerCode;

        return $this;
    }

    public function getAnswerMessage()
    {
        return $this->answerMessage;
    }

    public function setAnswerMessage($answerMessage)
    {
        $this->answerMessage = $answerMessage;

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

}
