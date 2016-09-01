<?php 

require_once dirname(__FILE__)."/../AddNumber/interfaces.php";

// Test Request
class Ant_Request_DataProvider_Csv
    implements Ant_Request_DataProvider
{
    private $a;

    private $b;

    public function __construct()
    {
        $content = file_get_contents("static/input.csv");
        $parts = explode(',', $content);
        $this->a = $parts[0];
        $this->b = $parts[1];
    }

    public function getRequestData()
    {
        return new Ant_Request_Data($this->a, $this->b);
    }
}