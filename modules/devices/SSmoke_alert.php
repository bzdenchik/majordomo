<?php

$ot = $this->object_title;

$description = $this->description;
if (!$description) {
    $description = $ot;
}

$alert_timer_title = $ot.'_alert';

say(LANG_DEVICES_SENSOR_ALERT.': '.$description,100);
clearTimeOut($alert_timer_title);
if ($this->getProperty('notify_eliminated')) {
    setTimeOut($alert_timer_title,'cm("'.$ot.'.alert");',60);
}