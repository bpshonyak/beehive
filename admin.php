<?php
            /** Error reporting */
            error_reporting(E_ALL);
            ini_set('display_errors', TRUE);
            ini_set('display_startup_errors', TRUE);

            require("database.php");
            require("models/bee-data-model.php");
            
            $model = new MiteSamplesModel($dbh);
            $results = $model->getAllEntries();
            
            include("views/data.php");
            
            //Close databse connection
            $db = null;
?>