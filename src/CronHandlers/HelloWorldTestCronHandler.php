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
        $url = "https://requestb.in/1lvot0f1";
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0);
        curl_setopt($curl, CURLOPT_FAILONERROR, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);
    }
}