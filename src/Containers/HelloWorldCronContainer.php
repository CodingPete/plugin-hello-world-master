<?php

/**
 * Created by IntelliJ IDEA.
 * User: peter
 * Date: 11.07.2017
 * Time: 11:01
 */
class HelloWorldCronContainer extends \Plenty\Modules\Cron\Services\CronContainer
{

    /**
     * Use this method to add a handler class and a schedule time for your desired cron event. The action will then be triggered according to the given schedule.
     */
    public function add(
        int $schedule,
        string $handlerClass
    )
    {
        // TODO: Implement add() method.
    }
}