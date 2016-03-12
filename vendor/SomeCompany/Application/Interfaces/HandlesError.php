<?php
/**
 * @author hollodotme
 */

namespace SomeCompany\Application\Interfaces;

/**
 * Interface HandlesError
 * @package SomeCompany\Application\Interfaces
 */
interface HandlesError
{
	public function handleError( \Throwable $throwable );
}