<?php
namespace ppadevs\Ddd\Domain\Exception;

class DomainException extends \Exception
{
	/** @var array */
	private $parameters = [];
	
	public function __construct($message, ?array $parameters = [])
	{
		$this->setParameters( $parameters );
		parent::__construct($message);
	}
	
	/**
	 * @return array
	 */
	public function getParameters()
	{
		return $this->parameters;
	}
	
	public function setParameters( $parameters )
	{
		$this->parameters = !empty($parameters) ? $parameters : [];
	}
}