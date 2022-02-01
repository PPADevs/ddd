<?php

namespace ppadevs\Ddd\Domain;

interface DomainEvent
{
    /**
     * @return \DateTime
     */
    public function occurredOn();
}
