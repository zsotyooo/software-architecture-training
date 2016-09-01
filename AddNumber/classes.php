<?php

require_once "interfaces.php";

// Business logic begin


// Entity
class Ant_Number
{
    private $_number;

    public function __construct($number)
    {
        $this->setValue($number);
    }

    public function setValue($number)
    {
        $this->_number = $number;
    }

    public function getValue()
    {
        return $this->_number;
    }

    public function add(Ant_Number $otherNumber)
    {
        $this->setValue($this->getValue() + $otherNumber->getValue());
    }
}

class Ant_Control
{
    public function __construct(Ant_Request_Data $request)
    {
        try {
            $request->validate();

            $summaryNumber = $this->addTogether(
                $request->getA(),
                $request->getB()
            );
            echo $summaryNumber->getValue();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    protected function addTogether($a, $b)
    {
        $numberA = new Ant_Number($a);
        $numberB = new Ant_Number($b);

        $numberA->add($numberB);

        return $numberA;
    }
}

class Ant_Request_Data
{
    private $a;

    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function validate()
    {
        if (!is_numeric($this->a) || !is_numeric($this->b)) {
            throw new Exception("Please provide valid numbers!", 1);
            return false;
        }

        return true;
    }
}

// Business logic end