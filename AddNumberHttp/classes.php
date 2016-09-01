<?php 

require_once dirname(__FILE__)."/../AddNumber/interfaces.php";

// Test Request
class Ant_Request_DataProvider_Http
    implements Ant_Request_DataProvider
{
    private $a;

    private $b;

    public function __construct($getArray)
    {
        $this->a = $getArray['a'];
        $this->b = $getArray['b'];
    }

    public function getRequestData()
    {
        return new Ant_Request_Data($this->a, $this->b);
    }
}