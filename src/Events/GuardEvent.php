<?php

namespace J0hnys\TridentWorkflow\Events;

use Symfony\Component\Workflow\Event\GuardEvent as SymfonyGuardEvent;

class GuardEvent extends BaseEvent
{
    public function __construct(SymfonyGuardEvent $event)
    {
        $this->originalEvent = $event;
    }
}
