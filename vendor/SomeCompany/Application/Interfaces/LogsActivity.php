<?php
/**
 * @author hollodotme
 */

namespace SomeCompany\Application\Interfaces;

/**
 * Interface LogsActivity
 * @package SomeCompany\Application\Interfaces
 */
interface LogsActivity
{
	public function log( string $message, array $context = [ ] );
}