<?php

/**
 * Created by IntelliJ IDEA.
 * User: peter
 * Date: 11.07.2017
 * Time: 11:02
 */
namespace HelloWorld\CronHandlers;

use Plenty\Log\Models\Log;
use \Plenty\Modules\Cron\Contracts\CronHandler;
use Plenty\Plugin\Log\Loggable;

class HelloWorldTestCronHandler extends CronHandler
{
    use Loggable;
    public function handle() {
        $this->getLogger("HelloWorldTestCronHandler_handle")->debug("HelloWorld::migration.successMessage");
    }
}