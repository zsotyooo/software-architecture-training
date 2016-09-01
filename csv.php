<?php

require_once 'AddNumber/classes.php';

require_once 'AddNumberCsv/classes.php';

$requestDataProvider = new Ant_Request_DataProvider_Csv();
$requestData = $requestDataProvider->getRequestData();
$control = new Ant_Control($requestData);