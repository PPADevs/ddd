<?php
namespace ppadevs\Ddd\Application;

use ppadevs\Ddd\Domain\DomainEvent;

interface EventStore
{
    /**
     * @param DomainEvent $aDomainEvent
     */
    public function append($aDomainEvent);

    /**
     * @param $anEventId
     * @return DomainEvent[]
     */
    public function allStoredEventsSince($anEventId);
}
