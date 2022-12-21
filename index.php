<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}



?>


<?php echo "Welcome ". $_SESSION['username']?></a>


<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img class="logo" src="clipart4139811.png" alt="">
            <ul>
                <li><a>Home</a></li>
                <li><a>Bedroom</a></li>
                <li><a>Dining</a></li>
                <li><a>Kitchen</a></li>
                <li><a>Backyard</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>DESIGN YOUR HOME</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Quaerat ut non voluptas minima quia incidunt</p>
            <div>
                <button type="button"><span></span> WATCH MORE</button>
                <button type="button"><span></span> SUBSCRIBE</button>
            </div>
        </div>

    </div>

    <section class="services">
        <div class='service-div'>
            <h1 class="sec service-h1">Our Services</h1>
            <p class="sec service-p">Lorem ipsum dolor sit amet, Lorem ipsum, dolor sit  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ipsum? consectetur adipisicing Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis minima alias quaerat cum, reprehenderit eveniet placeat id ut eaque in. elit. Nam, ratione! consectetur adipisicing elit. Aliquid itaque dolorum totam alias, voluptate quia!</p>
        </div>
        <center><button class="more">More</button></center>
    </section>

</body>

</html>