<?php

require_once 'AddNumber/classes.php';

require_once 'AddNumberCli/classes.php';

$requestDataProvider = new Ant_Request_DataProvider_Cli($argv);
$requestData = $requestDataProvider->getRequestData();
$control = new Ant_Control($requestData);