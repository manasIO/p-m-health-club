<!DOCTYPE html>
<?php include("function.php");?>
<html>
<head>
    <title>Trainer</title>
    <link rel="stylesheet" href="./css/table.css">
</head>
<body>

      <div class="">              
             <div class=""><h3> Trainer Information </h3></div>                       
                        <div class="">
                            <div class="">
                                <table class="">
                                    <thead>
                                        <tr>
                                            <th> Trainer ID </th>
                                            <th> Name </th>
                                            <th> Phone </th>                    
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        <?php get_trainer(); ?>
                                    </tbody>
                                </table>

                            </div>
                    </div>
             </div>
       </div>
    </body>
</html>