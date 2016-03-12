<?php
/**
 * @author hollodotme
 */

namespace SomeCompany\Application;

use SomeCompany\Application\Interfaces\ConfiguresApplication;

/**
 * Class Application
 * @package SomeCompany\Application
 */
class Application
{
	/** @var ConfiguresApplication */
	private $config;

	/**
	 * @param ConfiguresApplication $config
	 */
	public function __construct( ConfiguresApplication $config )
	{
		$this->config = $config;
	}

	/**
	 * Methods using the config
	 */
}