<?php
namespace ppadevs\Ddd\Application\Service;

/**
 * Interface ApplicationService
 * @package Ddd\Application\Service
 */
interface ApplicationService
{
    /**
     * @param $request
     */
    public function execute($request = null);
}
