<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class TransferRefund
{

    protected $id;
    protected $mangoPayId;
    protected $tag;
    protected $creationDate;
    protected $updateDate;
    protected $userId;
    protected $transferId;

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

    public function getTransferId()
    {
        return $this->transferId;
    }

    public function setTransferId($transferId)
    {
        $this->transferId = $transferId;

        return $this;
    }

}
