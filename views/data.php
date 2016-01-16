<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beehive Prototype Home</title>
        <meta charset="UTF-8">
        <meta name="author" content="Scarlett Johansson">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    </head>
 <body>
        <?php include("nav.php"); ?>
        
        <?php            
            echo "<ol>";
            //Process the result
            foreach ($results as $row) {
                    echo "<li>";
                        echo "<ul>";
                            echo "<li> Sample ID: "         . $row['sample_id']         . "</li>";
                            echo "<li> Hive ID: "           . $row['hive_id']           . "</li>";
                            echo "<li> Collection Date: "   . $row['collection_date']   . "</li>";
                            echo "<li> Sample Period: "     . $row['sample_period']     . "</li>";
                            echo "<li> Number Of Mites: "   . $row['num_mites']         . "</li>";
                        echo "</ul>";
                    echo "</li>";
                    echo "-------------------------------------------------";
            }
            echo "</ol>";
        ?> 
    </body>
</html>

