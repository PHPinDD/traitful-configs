<?php
/**
 * @author hollodotme
 */

namespace SomeCompany\Application\Interfaces;

/**
 * Interface ConfiguresApplication
 * @package SomeCompany\Application\Interfaces
 */
interface ConfiguresApplication
{
	public function getName() : string;

	public function getUrl() : string;

	public function getLogger() : LogsActivity;

	public function getErrorHandler() : HandlesError;
}