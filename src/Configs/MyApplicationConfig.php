<?php
/**
 * @author hollodotme
 */

namespace MyCompany\MyApplication\Configs;

use SomeCompany\Application\Interfaces\ConfiguresApplication;
use SomeCompany\Application\Traits\DefaultErrorHandling;
use SomeCompany\Application\Traits\DefaultLogging;

/**
 * Class MyApplicationConfig
 * @package MyCompany\MyApplication\Configs
 */
class MyApplicationConfig implements ConfiguresApplication
{
	public function getName() : string
	{
		return 'My application';
	}

	public function getUrl() : string
	{
		return 'https://www.my-application.de';
	}

	use DefaultLogging;
	use DefaultErrorHandling;
}