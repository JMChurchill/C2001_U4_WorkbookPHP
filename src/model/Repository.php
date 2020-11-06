<?php

include_once 'customer.php';

class Repository
{
    private $db_server = 'proj-mysql.uopnet.plymouth.ac.uk';
    private $dbUser = 'COMP2001_JChurchill';
    private $dbPassword = 'VmrR185+';
    private $dbDatabase = 'COMP2001_JChurchill';
    private $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        try {
            if ($this->connection === null) {
                $this->dataSourceName = 'mysql:dbname=' . $this->dbDatabase . ';host=' . $this->db_server;
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword);
                $this->connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
        }catch (PDOException $err)
        {
            echo 'Connection failed: ', $err->getMessage();
        }
        catch (\Exception $e){
            echo 'error';
        }
    }
    public function getAll($tableName)
    {
        $sql = "SELECT * FROM ";
        switch ($tableName)
        {
            case "Customer" : $sql = $sql." customer";
                break;
            case "Booking" : $sql = $sql." booking";
                break;
            case "Orders" : $sql = $sql." Orders";
                break;
        }

        $statement = $this->connection->prepare($sql);
        try {
            $statement->execute();
        }
        catch (\Exception $e){
            echo $tableName;
        }

        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $resultSet;
    }
//    public  function showCustomer($customer_First_Name){
//        $sql = "SELECT * FROM customer where $customer_First_Name";
//        $statement = $this->connection->prepare($sql);
//        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
//        $customer = new customer("123",$customer_First_Name, "phil");
//        echo $customer->CustomerFirstName();
//        echo $customer->CustomerSecondName();
//        return $resultSet;
//    }

}