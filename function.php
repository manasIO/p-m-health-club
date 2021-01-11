<?php
$con=mysqli_connect("localhost:3307","root","","p&m health club");
if(isset($_POST['login_submit'])){
	$username_a=$_POST['username_a'];
	$password_a=$_POST['password_a'];
	$query="select * from login where username='$username_a' and password='$password_a'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:config.php");
	
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('config.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))  // new user registration
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone_no=$_POST['phone_no'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $query="insert into `customer details` (name,age,email,address,phone_no,height,weight) 
    values ('$name','$age','$email','$address','$phone_no','$height','$weight')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
      echo "<script>window.open('config.php','_self')</script>";
    }
    } 
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
        if(isset($_POST['pay_submit']))
        {
            $payment_id=$_POST['payment_id'];
            $aamount=$_POST['amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
            $customer_name=$_POST['customer_name'];
            $query="insert into payment (payment_id,amount,customer_id,payment_type)values('$payment_id','$amount','$customer_id','$payment_type')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('config.php','_self')</script>";
            }
            } 
 function get_member_details(){
    global $con;
    $query="select * from `customer details`";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
            $name=$row ['name'];
            $age=$row['age'];
            $address=$row['address'];
            $phone_no=$row['phone_no'];
      echo "<tr>
                    <td>$name</td>
                    <td>$age</td>
                    <td>$address</td>
                    <td>$phone_no</td>
           </tr>";
    }
}
function get_program(){
    global $con;
    $query="select * from program";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $program_id=$row ['program_id'];
        $program_name=$row['program_name'];
        $Fees=$row['Fees'];
        echo"<tr>
                <td>$program_id</td>
                <td>$program_name</td>
                <td>$Fees</td>           
            </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $trainer_id=$row ['trainer_id'];
        $trainer_name=$row['trainer_name'];
        $trainer_pno=$row['trainer_pno'];
        echo"<tr>
        <td>$trainer_id</td>
        <td>$trainer_name</td>
            <td>$trainer_pno</td>
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $payment_id=$row ['payment_id'];
        $amount=$row['amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
       // $customer_name=$row['customer_name'];
        
        echo"<tr>
        <td>$payment_id</td>
        <td>$amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
            </tr>";

    }
}


?>



