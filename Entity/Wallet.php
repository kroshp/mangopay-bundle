<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class Wallet
{

    protected $id;
    protected $mangoPayId;
    protected $tag;
    protected $creationDate;
    protected $updateDate;
    protected $owners;
    protected $name;
    protected $description;
    protected $raisingGoalAmount;
    protected $collectedAmount;
    protected $spentAmount;
    protected $amount;
    protected $contributionLimitDate;

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

    public function getOwners()
    {
        return $this->owners;
    }

    public function setOwners($owners)
    {
        $this->owners = $owners;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getRaisingGoalAmount()
    {
        return $this->raisingGoalAmount;
    }

    public function setRaisingGoalAmount($raisingGoalAmount)
    {
        $this->raisingGoalAmount = $raisingGoalAmount;

        return $this;
    }

    public function getCollectedAmount()
    {
        return $this->collectedAmount;
    }

    public function setCollectedAmount($collectedAmount)
    {
        $this->collectedAmount = $collectedAmount;

        return $this;
    }

    public function getSpentAmount()
    {
        return $this->spentAmount;
    }

    public function setSpentAmount($spentAmount)
    {
        $this->spentAmount = $spentAmount;

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

    public function getContributionLimitDate()
    {
        return $this->contributionLimitDate;
    }

    public function setContributionLimitDate($contributionLimitDate)
    {
        $this->contributionLimitDate = $contributionLimitDate;

        return $this;
    }

}
