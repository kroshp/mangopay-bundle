<?php

namespace Betacie\Bundle\MangoPayBundle\Controller;

use Betacie\Bundle\MangoPayBundle\Event\MangoPayEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{

    public function indexAction()
    {
        $request    = $this->getRequest();
        $dispatcher = $this->get('event_dispatcher');
        $operation  = $request->get('operation');
        $data       = json_decode($operation, true);
        $name       = sprintf('Betacie\\Bundle\\MangoPayBundle\\MangoPayEvents::%s_COMPLETED', strtoupper($data['TransactionType']));

        if (defined($name)) {
            $dispatcher->dispatch(constant($name), new MangoPayEvent($data));
        }

        return new Response('200 OK');
    }

}