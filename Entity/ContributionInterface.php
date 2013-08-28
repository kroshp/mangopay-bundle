<?php

namespace Betacie\Bundle\MangoPayBundle\Entity;

interface ContributionInterface
{

    function isCompleted();

    function isSucceeded();

    function getUserId();

    function getWalletId();

    function getAmount();

    function getClientFeeAmount();

    function getAnswerCode();

    function getAnswerMessage();
}