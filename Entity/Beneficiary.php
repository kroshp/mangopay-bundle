<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class Beneficiary {

    protected $id;
    protected $mangoPayId;
    protected $tag;
    protected $creationDate;
    protected $updateDate;
    protected $userId;
    protected $bankAccountOwnerName;
    protected $bankAccountOwnerAddress;
    protected $bankAccountIBAN;
    protected $bankAccountBIC;
    protected $user;

    public function __construct() {
        $this->userId = 0;
    }

    public function getId() {
        return $this->id;
    }

    public function getMangoPayId() {
        return $this->mangoPayId;
    }

    public function setMangoPayId($mangoPayId) {
        $this->mangoPayId = $mangoPayId;

        return $this;
    }

    public function getTag() {
        return $this->tag;
    }

    public function setTag($tag) {
        $this->tag = $tag;

        return $this;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getUpdateDate() {
        return $this->updateDate;
    }

    public function setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;

        return $this;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    public function getBankAccountOwnerName() {
        return $this->bankAccountOwnerName;
    }

    public function setBankAccountOwnerName($bankAccountOwnerName) {
        $this->bankAccountOwnerName = $bankAccountOwnerName;

        return $this;
    }

    public function getBankAccountOwnerAddress() {
        return $this->bankAccountOwnerAddress;
    }

    public function setBankAccountOwnerAddress($bankAccountOwnerAddress) {
        $this->bankAccountOwnerAddress = $bankAccountOwnerAddress;

        return $this;
    }

    public function getBankAccountIBAN() {
        return $this->bankAccountIBAN;
    }

    public function setBankAccountIBAN($bankAccountIBAN) {
        $this->bankAccountIBAN = $bankAccountIBAN;

        return $this;
    }

    public function getBankAccountBIC() {
        return $this->bankAccountBIC;
    }

    public function setBankAccountBIC($bankAccountBIC) {
        $this->bankAccountBIC = $bankAccountBIC;

        return $this;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(User $user) {
        $this->user = $user;

        return $this;
    }

}
