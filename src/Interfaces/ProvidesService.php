<?php


namespace calderawp\CalderaContainers\Interfaces;

use calderawp\CalderaContainers\Container;

/**
 * Interface ProvidesService
 *
 * Interface that all service providers MUST implement
 *
 */
interface ProvidesService
{
	/**
	 * Register provider
	 *
	 * @param Container $container
	 */
	public function registerService(Container $container);
}
