<?php
namespace HelloWorld\Providers;

use Plenty\Modules\Cron\Contracts\HelloWorldTestCronHandler;
use Plenty\Modules\Cron\Services\CronContainer;
use Plenty\Plugin\ServiceProvider;

/**
 * Class HelloWorldServiceProvider
 * @package HelloWorld\Providers
 */
class HelloWorldServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(HelloWorldRouteServiceProvider::class);
		$this->getApplication()->bind(
		    HelloWorldTestCronHandler::class,
            CronContainer::class
        );
	}
}
