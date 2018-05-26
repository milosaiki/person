<?php

require_once (dirname(__FILE__) . '/Classes/Child.php');
require_once (dirname(__FILE__) . '/Classes/Adult.php');
require_once (dirname(__FILE__) . '/CustomFunctions.php');

$child = new Child('Mike', 'Doe', 'male', 14, 'green', 'black', 'LA', 'Sunset Boulevard 12', 'California', 'Magick Jonson', 'Philip', 'Skyrim');

CustomFunction::introduce($child);

$date = new \DateTime();

$adult = new Adult('John', 'Doe', 'male', 35, 'black', 'black', 'Nis', 'Serbia', 'Radanska 10', 'PHP developer', 1000, 'Cambridge', '', 0, 400);

CustomFunction::introduce($adult);

$time = (new \DateTime())->format('H:i');
$wakeUpTime = (new \DateTime('07:30'))->format('H:i');
$breakfastTime = (new \DateTime('08:30'))->format('H:i');
$lunchTime = (new \DateTime('13:36'))->format('H:i');
$dinnerTime = (new \DateTime('20:00'))->format('H:i');

if ($time >= $wakeUpTime) {
  CustomFunction::wakeUp($adult);
}

if ($time == $breakfastTime || $time == $lunchTime || $time == $dinnerTime) {
  CustomFunction::eat();
}

if ($adult && (int)$adult->getMoney() > (int)$adult->getIncome() / 2 && $time > (new \DateTime('21:00'))->format('H:i') && (new \DateTime())->format('w') > 5) {
  CustomFunction::getOut();
}

if ((!empty($child) && $time >= (new \DateTime('23:00'))->format('H:i')) || ((!empty($adult) && $time >= (new \DateTime('23:00'))->format('H:i')))) {
  CustomFunction::goToSleep();
}