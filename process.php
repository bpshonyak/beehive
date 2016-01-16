<?php
    //print_r($_GET);
    if(isset($_GET['submit'])){
        require("database.php");
        require("models/bee-data-model.php");
        
        $hive_id            = $_GET["hive_id"];
        $collection_date    = $_GET["collection_date"];
        $sample_period      = $_GET["sample_period"];
        $num_mites          = $_GET["num_mites"];
        
        $model = new MiteSamplesModel($dbh);
        
        $model->insertOneEntry($hive_id, $collection_date, $sample_period, $num_mites);
    }
        
?>