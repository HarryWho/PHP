<?php 
    session_start();
    if(!isset($_SESSION['loggedin'])){
        $_SESSION['loggedin']=false;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Site</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <header>
        <div class="container">
            <!-- <img src="img/architecture-buildings-city-408951.jpg" alt="Logo" class="logo"> -->
            <h3 class="logo"><a href="#">My Site</a></h3>
            <nav>
                <ul>
                    <li><a href="index.php?p=home">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                    <?php if($_SESSION['loggedin']){?>
                        <li><a href="index.php?p=login">Logout</a></li>
                    <?php }else{ ?>
                        <li><a href="index.php?p=login">Login</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <?php
            if(isset($_GET['p'])){
                switch($_GET['p']){
                    case 'login':
                        require_once('modules/login.php');
                    break;
                    default:
                   
                    phpinfo();
               
                    break;
                }
            }else{
                echo "Home Page";
            }
        ?>

    </div>
</body>
</html>