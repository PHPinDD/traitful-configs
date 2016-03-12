<?php
/**
 * @author hollodotme
 */

namespace SomeCompany\Application\Traits;

use SomeCompany\Application\Interfaces\LogsActivity;

/**
 * Trait DefaultLogging
 * @package SomeCompany\Application\Traits
 */
trait DefaultLogging
{
	public function getLogger() : LogsActivity
	{
		return new class implements LogsActivity
		{
			public function log( string $message, array $context = [ ] )
			{
				/** I am a NullLogger, do nothing */
			}
		};
	}
}