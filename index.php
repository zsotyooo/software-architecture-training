<?php

require_once 'AddNumber/classes.php';

require_once 'AddNumberHttp/classes.php';

$requestDataProvider = new Ant_Request_DataProvider_Http($_GET);
$requestData = $requestDataProvider->getRequestData();
$control = new Ant_Control($requestData);