<!DOCTYPE html>
<?php include("function.php");?>
<html>
<head>
	<title>Payments</title>
</head>
   <body>
         <div class="">
             <div class=""><h3>Payment Details</h3></div>
                 <div class="">       
                        <table class="">   
                          <thead>
                                <tr>
                                    <th>Payment ID </th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                    <th>Customer ID</th>
                                    <th>Customer Name</th>
                                </tr>   
                          </thead>                               
                                <tbody>
                                <?php get_payment(); ?>
                                </tbody>
                        </table>   
                 </div>
             </div>
          </div>
    </body>
</html>