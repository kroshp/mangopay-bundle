<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

use Betacie\MangoPay\Message\UserRequest;

class User {

    protected $id;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $ip;
    protected $birthday;
    protected $nationality;
    protected $personType;
    protected $tag;
    protected $canRegisterMeanOfPayment;
    protected $hasRegisteredMeansOfPayment;
    protected $mangoPayId;
    protected $paymentCards;
    protected $immediateContributions;
    protected $beneficiaries;

    public function __construct() {
        $this->paymentCards = new \Doctrine\Common\Collections\ArrayCollection();
        $this->immediateContributions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->beneficiaries = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    public function getIp() {
        return $this->ip;
    }

    public function setIp($ip) {
        $this->ip = $ip;

        return $this;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function setBirthday($birthday) {
        $this->birthday = $birthday;

        return $this;
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function setNationality($nationality) {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPersonType() {
        return $this->personType;
    }

    public function setPersonType($personType) {
        $this->personType = $personType;

        return $this;
    }

    public function setNaturalPersonType() {
        $this->personType = UserRequest::NATURAL_PERSON;

        return $this;
    }

    public function setLegalPersonalityType() {
        $this->personType = UserRequest::LEGAL_PERSONALITY;

        return $this;
    }

    public static function getAvailablePersonTypes() {
        return array(
            UserRequest::LEGAL_PERSONALITY,
            UserRequest::NATURAL_PERSON,
        );
    }

    public function getTag() {
        return $this->tag;
    }

    public function setTag($tag) {
        $this->tag = $tag;

        return $this;
    }

    public function getCanRegisterMeanOfPayment() {
        return $this->canRegisterMeanOfPayment;
    }

    public function setCanRegisterMeanOfPayment($canRegisterMeanOfPayment) {
        $this->canRegisterMeanOfPayment = $canRegisterMeanOfPayment;

        return $this;
    }

    public function getHasRegisteredMeansOfPayment() {
        return $this->hasRegisteredMeansOfPayment;
    }

    public function setHasRegisteredMeansOfPayment($hasRegisteredMeansOfPayment) {
        $this->hasRegisteredMeansOfPayment = $hasRegisteredMeansOfPayment;

        return $this;
    }

    public function getMangoPayId() {
        return $this->mangoPayId;
    }

    public function setMangoPayId($mangoPayId) {
        $this->mangoPayId = $mangoPayId;

        return $this;
    }

    /**
     * Add PaymentCard
     *
     * @param PaymentCard $paymentCard
     * @return User
     */
    public function addPaymentCard(PaymentCard $paymentCard) {
        $this->paymentCards[] = $paymentCard;

        return $this;
    }

    /**
     * Remove PaymentCard
     *
     * @param PaymentCard $paymentCard
     */
    public function removePaymentCard(PaymentCard $paymentCard) {
        $this->paymentCards->removeElement($paymentCard);
    }

    /**
     * Get paymentCards
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaymentCards() {
        return $this->paymentCards;
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

    /**
     * Add Beneficiary
     *
     * @param Beneficiary $beneficiary
     * @return User
     */
    public function addBeneficiary(Beneficiary $beneficiary) {
        $this->beneficiaries[] = $beneficiary;

        return $this;
    }

    /**
     * Remove Beneficiary
     *
     * @param Beneficiary $beneficiary
     */
    public function removeBeneficiary(Beneficiary $beneficiary) {
        $this->beneficiaries->removeElement($beneficiary);
    }
    
    /**
     * Get Beneficiaries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBeneficiaries() {
        return $this->beneficiaries;
    }
}
