<?php
    class MiteSamplesModel {
        private $dbh;
        
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function insertOneEntry($hive_id, $collection_date, $sample_period, $num_mites){
            // PDO prepared statement code will go here
            $sql = "INSERT INTO mite_samples (hive_id, collection_date, sample_period, num_mites) VALUES (:hive_id, :collection_date, :sample_period, :num_mites)";
            
            //Prepare the statement
            $statement = $this->dbh->prepare($sql);
            
            //Bind the parameters
            $statement->bindParam(':hive_id', $hive_id, PDO::PARAM_INT);
            $statement->bindParam(':collection_date', $collection_date, PDO::PARAM_STR);
            $statement->bindParam(':sample_period', $sample_period, PDO::PARAM_INT);
            $statement->bindParam(':num_mites', $num_mites, PDO::PARAM_INT);
            
            //Execute
            if($statement->execute()){
                header( 'Location: index.php?success=true' );
            } else {
                echo "<h1>Error executing query!</h1>";
            }
        }
        
        public function getAllEntries(){
            //Define the query
            $sql = "SELECT * FROM mite_samples";
            //Prepare the statement
            $statement = $this->dbh->prepare($sql);
            //Execute the statement
            $statement->execute();
            
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>