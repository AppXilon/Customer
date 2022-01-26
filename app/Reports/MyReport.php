<?php


namespace App\Reports;

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "mysql"=>array(
                    'host' => '127.0.0.1',
                    'username' => 'root',
                    'password' => '',
                    'dbname' => 'customer_db',
                    'charset' => 'utf8',  
                    'class' => "\koolreport\datasources\MySQLDataSource"  
                ),
            )
        );
    }
    public function setup()
    {
        $this->src('mysql')
        ->query("SELECT * FROM customer_db.order")
        ->pipe($this->dataStore('order'));
    }
}