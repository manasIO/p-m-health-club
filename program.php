<!DOCTYPE html>
<?php include("function.php");?>
<html>
<head>
	<title>Members details</title>
</head>
<body>
	 
    <div class="card">          
        <div class=""><h3>Pcakage Details</h3></div>
           
         <!-- <form class="" action="patient_search.php" method="post">  </form> -->
          
                <div class="card-body">
                            <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Program ID </th>
                                                <th>Program Name</th>
                                                <th>Fees</th>       
                                            </tr>   
                                            </thead>
                                        <tbody>
                                        <?php get_program(); ?>
                                        </tbody>
                            </table>   
                </div>
        </div>
    </div>

</body>
</html>