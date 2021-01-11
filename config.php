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
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus fugit dolores eaque maiores quo dolorem excepturi officiis</p>
                    </div>
                </div>

                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus fugit dolores eaque maiores quo dolorem excepturi officiis</p>
                    </div>
                </div>

                <h1>Book Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus fugit dolores eaque maiores quo dolorem excepturi officiis</p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="./img/one.jpg" alt="">
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
                    <h3>Rope Exercise</h3>
                    <hr>
                    <p>This is test under description of club foundation this is test under description of club foundation</p>
                </div>
            </div>
            <div class="single-service">
                <img src="./img/three.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Group Exercise</h3>
                    <hr>
                    <p>This is test under description of club foundation this is test under description of club foundation</p>
                </div>
            </div>
            <div class="single-service">
                <img src="./img/four.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Weight Lifting</h3>
                    <hr>
                    <p>This is test under description of club foundation this is test under description of club foundation</p>
                </div>
            </div>
            <div class="single-service">
                <img src="./img/ten.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Weighter Lifter</h3>
                    <hr>
                    <p>This is test under description of club foundation this is test under description of club foundation</p>
                </div>
            </div>

            <div class="single-service">
                <img src="./img/nine.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Weighter Lifter</h3>
                    <hr>
                    <p>This is test under description of club foundation this is test under description of club foundation</p>
                </div>
            </div>

            <div class="single-service">
                <img src="./img/eight.jpg" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Weighter Lifter</h3>
                    <hr>
                    <p>This is test under description of club foundation this is test under description of club foundation</p>
                </div>
            </div>
        </div>
    </section>

    <!--########## Services ###############-->

    <!--########## Registration ###############-->

     <section  id="registration">

          <div class="title-text">
              <p>Interested ?</p>
              <h1> Register here.. <h1>
          </div>
          <div class="registration-box">
               <div class="reg-details">
                        <div class="reg-details-title">
                            <p> Enter your details <p>
                        </div>
                   <form class="" action="function.php" method="POST">
                           <div>
                                <input type="text" name="name" class="" placeholder="Name">
                           </div>
                           <div>
                                <input type="text" name="age" class="" placeholder="age">
                           </div>
                           <div>
                                <input type="text" name="email" class="" placeholder="email">
                           </div>
                           <div>
                                <input type="text" name="address" class="" placeholder="address">
                           </div>
                           <div>
                                <input type="text" name="phone_no" class="" placeholder="phone_no">
                           </div>
                           <div>
                                <input type="text" name="height" class="" placeholder="height">
                           </div>
                           <div>
                                <input type="text" name="weight" class="" placeholder="weight">
                           </div>
                           <div>
                               <p> Trainer </p>
                               <select class="" name="trainer">

                                        <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

                                        <?php endwhile;?>

                               </select>
                           </div>
                           <div>
                                  <input type="submit" class="" name="pat_submit" value="Register">            
                                  <a href="function.php" class=""></a>
                           </div>
                   <form>
               <div>
          </div>

     </section>

    <!--########## Registration ###############-->

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