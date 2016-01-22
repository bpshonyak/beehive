<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beehive Prototype Home</title>
        <meta charset="UTF-8">
        <meta name="author" content="Scarlett Johansson">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <!--jQuery data tables-->
        <script language="JavaScript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script language="JavaScript" src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <link href="https://cdn.datatables.net/1.10.8/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
 <body>
        <?php include("nav.php"); ?>
        
        <div class="container">
        <div class="row">
            
                <a href="getExcel.php?data=bee" class="btn btn-danger">Export to Excel</a>
                
                <hr>

                <div class="well">
                    <h1>
                      Bee Data Entries
                    </h1>
                                
                    <table style="table-layout: inherit" class="table table-striped table-bordered" id="datatable" width="100%">
                      <thead>
                        <tr>
                          <th>Sample ID</th>
                          <th>Hive ID</th>
                          <th>Collection Date</th>
                          <th>Sample Period</th>
                          <th>Number Of Mites</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
						  
                            // TODO: clean all data
                            function clean($data) {
                              $data = trim($data);
                              $data = str_replace("_", " ", $data);
                              $data = str_replace("**", ", ", $data);
                              return $data;
                            }
                            
                            foreach($results as $row)
                            {
                                
                                $smapleId         = $row['sample_id'];
                                $hiveId           = $row['hive_id'] ;
                                $collectonDate    = $row['collection_date'];
                                $samplePeriod     = $row['sample_period'];
                                $miteCount        = $row['num_mites'];
                                
                                echo "<tr>";
                                echo "<td data-title='Sample ID'>{$samplePeriod}</td>";
                                echo "<td data-title='Hive ID'>{$hiveId}</td>";
                                echo "<td data-title='Collection Date'>{$collectonDate}</td>";
                                echo "<td data-title='Sample Period'>{$samplePeriod}</td>";
                                echo "<td data-title='Number of Mites'>{$miteCount}</td>";
                                echo "</tr>";
                            }
        
                        ?>
                        </tbody>
                    </table>
                </div>
        </div>
	</div>
    
        <script>
            $(document).ready(function() {
                var table = $('#datatable').dataTable();
                 $('[data-toggle=tooltip]').tooltip();
            });
        </script>
    </body>
</html>

