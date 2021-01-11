<!DOCTYPE html>
    <?php include("function.php");?>
    <html>
    <head>
        <title>Members</title>
    </head>
    <body>
      
        <div class="">
        
                <div class=""><h3>Members Details</h3></div>
                <div class="">
            
                                <div class="">
                                    <table class="">
                                                    <thead>
                                                        <tr>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Address</th>
                                                        <th>Phone no</th>
                                                        </tr>   
                                                    </thead>
                                            <tbody>
                                            <?php get_member_details(); ?>
                                            </tbody>
                                    </table>
                                </div>
               </div>
               </div>       
    
        </div>
    </body>
</html>