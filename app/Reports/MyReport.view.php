<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\ColumnChart;
use Illuminate\Support\Facades\DB;
use \koolreport\datagrids\DataTables;


$data = array(
    array("category"=>"Breakfast","sale"=>32000,"cost"=>20000,"profit"=>12000),
    array("category"=>"Lunch","sale"=>43000,"cost"=>36000,"profit"=>7000),
    array("category"=>"Dinner","sale"=>54000,"cost"=>39000,"profit"=>15000),
    
);

?>
<html>
    <head>
    <title>My Report</title>
    </head>
    <body>
        <h1>It works</h1>
        <?php
        Table::create([
            "dataSource"=>$this->dataStore("order")
        ]);

        

        ColumnChart::create(array(
            "dataSource"=>$data
        ));

        ?>
    </body>
</html>
