<?php
class customer
{
    private $id;
    private $customerFirstName;
    private $customerSecondName;

    public function __construct($id, $customerFirstName, $customerSecondName)
    {
        $this->customerFirstName = $customerFirstName;
        $this->id = $id;
        $this->customerSecondName = $customerSecondName;
    }

    public function id()
    {
        return $this->id;
    }

    public function CustomerFirstName()
    {
        return $this->customerFirstName;
    }
    public function CustomerSecondName()
    {
        return $this->customerSecondName;
    }
    public  function getCustomer(){

    }
}

