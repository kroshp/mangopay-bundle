<?php

namespace Betacie\Bundle\MangoPayBundle\Controller;

use Betacie\Bundle\MangoPayBundle\Event\MangoPayEvent;
use Betacie\Bundle\MangoPayBundle\MangoPayEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{

    public function indexAction()
    {
        $request    = $this->getRequest();
        $dispatcher = $this->get('event_dispatcher');
        $operation  = $request->get('operation');
        $json       = json_decode($operation, true);

        $logger = $this->get('logger');
        $logger->info(sprintf('MangoPay Notification: "%s"', $operation));
        
        $dispatcher->dispatch(MangoPayEvents::CONTRIBUTION_COMPLETED, new MangoPayEvent($json));

        return new Response('200 OK');
    }

}