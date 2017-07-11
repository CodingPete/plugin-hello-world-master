<?php
namespace HelloWorld\Providers;

use Plenty\Log\Services\ReferenceContainer;
use Plenty\Modules\Cron\Contracts\HelloWorldTestCronHandler;
use Plenty\Modules\Cron\Services\CronContainer;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
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
	}

	public function boot(CronContainer $container, EventProceduresService $eventProceduresService, ReferenceContainer $referenceContainer) {
        $container->add(
            CronContainer::EVERY_FIFTEEN_MINUTES,
            HelloWorldTestCronHandler::class
        );
    }
}
