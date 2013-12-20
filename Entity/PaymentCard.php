<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

class PaymentCard {

    protected $id;
    protected $ownerId;
    protected $cardNumber;
    protected $mangoPayId;
    protected $tag;
    protected $redirectURL;
    protected $templateURL;
    protected $returnURL;
    protected $user;
    protected $immediateContributions;

    public function __construct() {
        $this->immediateContributions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getOwnerId() {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;

        return $this;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber) {
        $this->cardNumber = $cardNumber;

        return $this;
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

    public function getRedirectURL() {
        return $this->redirectURL;
    }

    public function setRedirectURL($redirectURL) {
        $this->redirectURL = $redirectURL;

        return $this;
    }

    public function getReturnURL() {
        return $this->returnURL;
    }

    public function setReturnURL($returnURL) {
        $this->returnURL = $returnURL;

        return $this;
    }

    public function getTemplateURL() {
        return $this->templateURL;
    }

    public function setTemplateURL($templateURL) {
        $this->templateURL = $templateURL;

        return $this;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(User $user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Add ImmediateContribution
     *
     * @param ImmediateContribution $immediateContribution
     * @return User
     */
    public function addImmediateContribution(ImmediateContribution $immediateContribution) {
        $this->immediateContributions[] = $immediateContribution;

        return $this;
    }

    /**
     * Remove ImmediateContribution
     *
     * @param ImmediateContribution $immediateContribution
     */
    public function removeImmediateContribution(ImmediateContribution $immediateContribution) {
        $this->immediateContributions->removeElement($immediateContribution);
    }

    /**
     * Get ImmediateContributions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImmediateContributions() {
        return $this->immediateContributions;
    }

}
