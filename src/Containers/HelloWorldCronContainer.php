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

    /**
     * Use this method to add a handler class and a schedule time for your desired cron event. The action will then be triggered according to the given schedule.
     */
    public function add(
        int $schedule,
        string $handlerClass
    )
    {
        parent::add($schedule, $handlerClass);
    }
}