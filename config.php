<?php

$username = 'root';
$password = '';
$server = 'localhost:3307';
$db = 'p&m health club';

$connect = mysqli_connect($server,$username,$password,$db);

// if($con){
//     echo "Connection Successful";
//     // ?
//     //   <script>
//     //       alert('connection successful');
//     //   </script>
//     // ?php
// }else{
//     echo "No connection";
// }
$query = "SELECT * FROM `Trainer`";
$result1 = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P&M Fitness</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">
                                                    <style>

                                                                                #registration{
                                                                                    width: 100%;
                                                                                    padding: 70px 0;
                                                                                    background: linear-gradient(#42cdfc, rgb(146, 146, 146));
                                                                                }

                                                                                .registration-box{
                                                                                    width: 60%;
                                                                                    display: flex;
                                                                                    flex-wrap: wrap;
                                                                                    justify-content: space-around;
                                                                                    margin: auto;
                                                                                }
                                                                                .registration-box p{
                                                                                    font-size: 30px;
                                                                                    font-weight: bolder;
                                                                                    text-align: center;
                                                                                }
                                                                                #form-box{
                                                                                    width: 300px;
                                                                                    border: none;
                                                                                    border-radius: 5px;
                                                                                    padding: 5px;
                                                                                    margin: 10px;
                                                                                    height: 30px;
                                                                                    outline: 0;
                                                                                }
                                                                                /* Price Plan */

                                                                                #price{
                                                                                    width: 100%;
                                                                                    padding: 70px 0;
                                                                                    background: #fffbfb;
                                                                                }
                                                                                .row{
                                                                                    width: 80%;
                                                                                    margin: auto;
                                                                                    display: flex;
                                                                                    justify-content: space-between;
                                                                                    align-items: flex-start;
                                                                                    flex-wrap: wrap;
                                                                                
                                                                                }
                                                                                .col-md-3{
                                                                                    flex-basis: 40%;
                                                                                    margin-top: 10px;
                                                                                    margin-bottom: 30px;
                                                                                    box-shadow: 0 2px 20px #333;
                                                                                }

                                                                                .single-price{
                                                                                    flex-basis: 38%;
                                                                                    text-align: center;
                                                                                    border-radius: 7px;
                                                                                    margin-bottom: 10px;
                                                                                    background-color: #fff;
                                                                                    position: relative;
                                                                                    transition: 00.5s; 
                                                                                }
                                                                                .price-head{
                                                                                    background-color: #2196f3;
                                                                                    display: inline;
                                                                                    float: left;
                                                                                    padding: 10px 5px;
                                                                                    text-align: center;
                                                                                    width: 98%;
                                                                                }
                                                                                .price-head h2{
                                                                                    color: #fff;
                                                                                    font-size: 30px;
                                                                                    font-weight: bold;
                                                                                    margin-bottom: 5px;
                                                                                    padding: 5px;
                                                                                    text-transform: uppercase;
                                                                                }
                                                                                .price-head h4{
                                                                                    font-size: 25px;
                                                                                    color: #ccc;
                                                                                    font-weight: bold;
                                                                                    line-height: 30px;
                                                                                }
                                                                                #price span{
                                                                                    font-size: 20px;
                                                                                }
                                                                                .price-content{
                                                                                display: inline;
                                                                                float: left;
                                                                                width: 90%;
                                                                                padding: 0 15px;
                                                                                }

                                                                                .price-content ul li{
                                                                                    border-bottom: 1px solid #efefef;
                                                                                    padding: 15px 10px;
                                                                                    list-style: none;
                                                                                }
                                                                                ul li:last-child{
                                                                                    border: none;
                                                                                }
                                                                                .fa-check-circle{
                                                                                    color: green;
                                                                                    margin-right: 10px;
                                                                                    font-size: 20px;
                                                                                }
                                                                                .fa-times-circle{
                                                                                    color: red;
                                                                                    margin-right: 10px;
                                                                                    font-size: 20px;
                                                                                }
                                                                                .price-button{
                                                                                    display: inline;
                                                                                    float: left;
                                                                                    padding: 15px 15px 30px;
                                                                                    text-align: center;
                                                                                    width: 100%;
                                                                                }
                                                                                .buy-btn{
                                                                                    background-color: #2196f3;
                                                                                    border-radius: 3px;
                                                                                    display: inline-block;
                                                                                    font-size: 18px;
                                                                                    padding: 5px 20px;
                                                                                    transition: 0.5s;
                                                                                }
                                                                                .buy-btn:hover{
                                                                                    border-color: 1px solid #fff;
                                                                                    background-color: #3f51b5;
                                                                                }
                                                                                a{
                                                                                    text-decoration: none !important;
                                                                                    color: #fff;
                                                                                }

                                                                                /* Price Plan */
                                                                                /* Testimonial CSS PART*/

                                                                                #testimonial{
                                                                                    width: 100%;
                                                                                    padding: 70px 0;
                                                                                }
                                                                                .testimonial-row{
                                                                                    width: 80%;
                                                                                    margin: auto;
                                                                                    display: flex;
                                                                                    justify-content: space-between;
                                                                                    align-items: flex-start;
                                                                                    flex-wrap: wrap;
                                                                                }

                                                                                .testimonial-col{
                                                                                    flex-basis: 28%;
                                                                                    padding: 10px;
                                                                                    margin-bottom: 30px;
                                                                                    border-radius: 5px;
                                                                                    box-shadow: 0 10px 20px 3px #00968814;
                                                                                    cursor: pointer;
                                                                                    transition: transform .5s;
                                                                                }

                                                                                .testimonial-col p{
                                                                                    font-size: 14px;
                                                                                }
                                                                                .user{
                                                                                    display: flex;
                                                                                    align-items: center;
                                                                                    margin: 20px 0;
                                                                                }
                                                                                .user img{
                                                                                    width: 40px;
                                                                                    margin-right: 20px;
                                                                                    border-radius: 3px;
                                                                                }
                                                                                .user-info .fa{
                                                                                    margin-left: 10px;
                                                                                    color: #27c0ff;
                                                                                    font-size: 20px;
                                                                                }
                                                                                .user-info small{
                                                                                    color: #009688;
                                                                                }
                                                                                .testimonial-col:hover{
                                                                                    transform: translateY(-7px);
                                                                                }
                                                                                @media screen and (max-width:770px){
                                                                                .testimonial-col{
                                                                                    flex-basis: 100%;
                                                                                }
                                                                                }
                                                                                /* Testimonial CSS PART END*/
                                                    </style>
</head>
<body>
    <section id="banner">
        <img src="./img/logo.png" class="logo" alt="Logo">
        <div class="banner-text">
            <h1>P&M Health Club</h1>
            <p>Stay Fit and healthy make's you more flexible to your work</p>
            <div class="banner-btn">
                <a href="login.php"><span></span>Login</a>
                <a href="admin.php"><span></span>Admin</a>
            </div>
            
        </div>
    </section>
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Meet Us</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="./img/menu.png" id="menu" alt="NavBar">
    </div>

    <!-- #################Features #####################-->

    <section id="features">
        <div class="title-text">
            <p>Features</p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Experienced Trainer</h1>
                <div class="features-desc">
                    
                    <div class="feature-text">
                        <p>Trainer experience is important to meet your fitness goals. </p>
                    </div>
                </div>
        
                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    
                    <div class="feature-text">
                        <p>Fitness is not expensive. Atleast not anymore... </p>
                    </div>
                </div>

                <h1>Register Online</h1>
                <div class="features-desc">
                    
                    <div class="feature-text">
                        <p>Select program of your choice and register online </p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="./images/5.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- #################Features #####################-->

    <!--########## Services ###############-->

    <section id="service">
        <div class="title-text">
            <p>Services</p>
            <h1>We Provide Best </h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="./img/two.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Cardio</h3>
                    <hr>
                    <p> For more details register yourself and see the program detials </p>
                </div>
            </div>
            <div class="single-service">
                <img src="./img/three.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Group Exercise</h3>
                    <hr>
                    <p> For more details register yourself and see the program detials </p>
                </div>
            </div>
            <div class="single-service">
                <img src="./img/nine.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3> Muscle Training </h3>
                    <hr>
                    <p> For more details register yourself and see the program detials </p>
                </div>
            </div>

            <div class="single-service">
                <img src="./img/eight.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3> Yoga </h3>
                    <hr>
                    <p> For more details register yourself and see the program detials </p>
                </div>
            </div>
        </div>
    </section>

    <!--########## Services ###############-->

    <!-- ############Price Plans ############### -->

    <section id="price">
            <div class="title-text">
                <h1 style="margin-bottom: 20px">Today's goal</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>
                                    Goal 1
                                </h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li> Walk atleat 30,000 steps in 24 hrs </li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#" class="buy-btn">Completed</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>
                                    Goal 2
                                </h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li> Get heart rate of avg. 150bpm for 20 minutes </li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#" class="buy-btn">Completed</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>
                                    Goal 3
                                </h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li> Meditate for atleast 15 minutes </li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#" class="buy-btn">Completed</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2>
                                    Goal 4
                                </h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li> abhi kuch socha nhi baad ma likhunga </li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#" class="buy-btn">Completed</a>
                            </div>
                        </div>
                    </div>
    
    
                    
                </div>
            </div>
    </section>
    
        <!-- ############Price Plans ############### -->

        <!--########## Registration ###############-->

     <section id="registration">

<div class="title-text">
    <p>Interested ?</p>
    <h1> Register here.. <h1>
</div>
<div class="registration-box">
    <div class="reg-details">
        <div class="reg-details-title">
            <p> Enter your details
            <p>
        </div>
        <form class="register-form" action="function.php" method="POST">
            <div>
                <input type="text" name="name" id="form-box" placeholder="Name">
            </div>
            <div>
                <input type="text" name="age" id="form-box" placeholder="Age">
            </div>
            <div>
                <input type="text" name="email" id="form-box" placeholder=" Email">
            </div>
            <div>
                <input type="text" name="address" id="form-box" placeholder=" Address">
            </div>
            <div>
                <input type="text" name="phone_no" id="form-box" placeholder=" phone_no">
            </div>
            <div>
                <input type="text" name="height" id="form-box" placeholder="height">
            </div>
            <div>
                <input type="text" name="weight" id="form-box" placeholder="weight">
            </div>
            <div>
                <p>Our Trainer's </p>
                <select class="option-box" name="trainer" style="width: 300px;  height: 30px; border-radius: 7px; padding: 5px;>

                    <?php while($row1 = mysqli_fetch_array($result1)):;?>

                    <option value="<?php echo $row1[0];?>">
                        <?php echo $row1[1];?>
                    </option>

                    <?php endwhile;?>

                </select>
            </div>
            <div class="">
                <input type="submit" class="" name="pat_submit" value="Register" style="width: 200px;
                        background: linear-gradient(#FD746C,#1f4363);
                        margin-left: 50px;
                        margin-top: 20px;
                        color: #ffffff;
                        font-size: 20px;
                        font-weight: bold;
                        font-family: sans-serif;
                        padding: 15px;
                        border-top-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        border-bottom-left-radius: 4px;
                        border-top-right-radius: 4px;
                        border: none;">
                <a href="function.php" class=""></a>
            </div>
            <form>
                <div>
                </div>

</section>

<!--########## Registration ###############-->

<!--########## Testimonial HTML PART ###############-->

<section id="testimonial">
        <div class="title-text">
            <p>Testimonial</p>
            <h1>What Client Says</h1>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="./img/img1.jpg" alt="">
                    <div class="user-info">
                        <h4>Watson<i class="fa fa-twitter"></i></h4>
                        <small>@watsongym </small>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae est ad earum cupiditate, omnis velit eum minima corporis, eligendi ipsam consectetur aliquid porro voluptas inventore. Autem, vitae sit. Quidem neque impedit mollitia nesciunt cupiditate eligendi voluptates rerum placeat doloremque maxime, recusandae id perferendis quae facere esse magni excepturi eveniet similique!</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="./img/saket.jpeg" alt="">
                    <div class="user-info">
                        <h4>saket <i class="fa fa-twitter"></i></h4>
                        <small>@saket35 </small>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae est ad earum cupiditate, omnis velit eum minima corporis, eligendi ipsam consectetur aliquid porro voluptas inventore. Autem, vitae sit. Quidem neque impedit mollitia nesciunt cupiditate eligendi.</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="./img/img1.jpg" alt="">
                    <div class="user-info">
                        <h4>Watson<i class="fa fa-twitter"></i></h4>
                        <small>@watsongym </small>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae est ad earum cupiditate, omnis velit eum minima corporis, eligendi ipsam consectetur aliquid porro voluptas inventore. Autem, vitae sit. Quidem neque impedit mollitia nesciunt cupiditate eligendi voluptates rerum placeat doloremque maxime, recusandae id perferendis quae facere esse magni excepturi eveniet similique!</p>
            </div>
        </div>
    </section>

    <!--########## Testimonial HTML PART END ###############-->

    

    <script>
        
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        

        sideNav.style.right = "-220px"

        menuBtn.onclick = function(){
            if(sideNav.style.right == "-220px"){
                sideNav.style.right = "0"
                menu.src = "./img/close.png"
            }
            else{
                sideNav.style.right = "-220px"
                menu.src = "./img/menu.png"
            }
        }
    </script>

    
</body>
</html>