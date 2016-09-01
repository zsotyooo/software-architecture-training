<?php 

require_once dirname(__FILE__)."/../AddNumber/interfaces.php";

// Test Request
class Ant_Request_DataProvider_Cli
    implements Ant_Request_DataProvider
{
    private $a;

    private $b;

    public function __construct($argvArray)
    {
        $this->a = $argvArray[1];
        $this->b = $argvArray[2];
    }

    public function getRequestData()
    {
        return new Ant_Request_Data($this->a, $this->b);
    }
}