<?php

$data = new DateTime("now");
echo "No Brasil são: " . $data->format("H:i:s") . "<br>";

$data = new DateTime("now", new DateTimeZone('Australia/Sydney'));
echo "Em Sidney, na Austrália são: " . $data->format("H:i:s") . "<br>";

$fusoHorario = new DateTimeZone('Australia/Sydney');
$data = new DateTime("now", $fusoHorario);