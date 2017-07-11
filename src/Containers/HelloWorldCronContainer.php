<?php

/**
 * Created by IntelliJ IDEA.
 * User: peter
 * Date: 11.07.2017
 * Time: 11:34
 */
use \Plenty\Modules\Cron\Services\CronContainer;
class HelloWorldCronContainer extends CronContainer
{
    public function __construct() {
        $this->add(CronContainer::EVERY_FIFTEEN_MINUTES, HelloWorldTestCronHandler::class);
    }
}