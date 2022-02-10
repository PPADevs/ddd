<?php

namespace ppadevs\Ddd\Application\DataTransformer;

class NoTransformationDataTransformer implements DataTransformer
{
    private $object;

    public function write($object)
    {
        $this->object = $object;
    }

    public function read()
    {
        return $this->object;
    }
}
