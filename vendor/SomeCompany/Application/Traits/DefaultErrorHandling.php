<?php
/**
 * @author hollodotme
 */

namespace SomeCompany\Application\Traits;

use SomeCompany\Application\Interfaces\HandlesError;

/**
 * Trait DefaultErrorHandler
 * @package SomeCompany\Application\Traits
 */
trait DefaultErrorHandling
{
	public function getErrorHandler() : HandlesError
	{
		return new class implements HandlesError
		{
			public function handleError( \Throwable $throwable )
			{
				throw $throwable;
			}
		};
	}
}