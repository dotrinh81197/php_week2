<?php
class StopWatch
{
    public $startTime;
    public $endTime;
    public function __construct()
    {
        $this->startTime = time();
    }

    function start()
    {
        return $this->startTime = time();
    }

    function stop()
    {
        return $this->endTime = time();
    }

    function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
$timeToSearchGg = new StopWatch();
$timeToSearchGg->start();
var_dump(time());
file_get_contents('https://www.w3schools.com/php/php_date.asp');
file_get_contents('https://www.w3schools.com/php/php_date.asp');
file_get_contents('https://www.w3schools.com/php/php_date.asp');

$timeToSearchGg->stop();
var_dump(time());
echo 'Thời gian để load trang web https://www.w3schools.com/php/php_date.asp là : ' . $timeToSearchGg->getElapsedTime();
