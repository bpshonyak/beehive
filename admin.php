<?php
            require("database.php");
            require("models/bee-data-model.php");
            
            $model = new MiteSamplesModel($dbh);
            $results = $model->getAllEntries();
            
            include("views/data.php");
            
            //Close databse connection
            $db = null;
?>