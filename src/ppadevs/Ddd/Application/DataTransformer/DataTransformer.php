<?php

namespace ppadevs\Ddd\Application\DataTransformer;

interface DataTransformer
{
    
    public function write($object);

    public function read();
}
