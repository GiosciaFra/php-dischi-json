<?php

$discItem = file_get_contents('./dischi.json');
$discList = json_decode($discItem);


header('Content-Type: application/json');

echo json_encode($discList);
