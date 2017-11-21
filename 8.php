<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.11.2017
 * Time: 16:59
 */
$age="fdlk";
if ($age>18 && $age<59)  echo "Вам еще работать и работать.";
if ($age>59) echo "Вам пора на пенсию.";
if ($age<=17 && $age>0) echo "Вам ещё рано работать.";
if ($age<=0 or !is_int($age))echo "Неизвестный возраст.";
?>