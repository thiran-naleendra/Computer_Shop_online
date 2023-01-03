<!DOCTYPE html>
<html lang="en">
<?php
     //start session
     //session_start();
     
     
     define('LOCALHOST','localhost');
     define('DB_USERNAME','root');
     define('DB_PASSWORD','');
     define('DB_NAME','dynamichandlertst1');//Please put your database name here
     
     $con=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());//DB connection
     $db=mysqli_select_db($con,DB_NAME) or die(mysqli_error());
?>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout "  >
    
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                <li class="active"> <a href="index.html">Home</a> </li>
                                            <li><a href="cart/index.php">Store</a></li>
                                            <li><a href="cart/cart.php">Cart</a></li>
                                            <li><a href="repair.php">Repair Request</a></li>
                                            <li> <a href="singup.php">SingUp</a> </li>
                                            
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            <li><img src="icon/call.png" />(041)2250999</li>
                            <li><img src="icon/email.png" />dyc@gmail.com</li>
                            <li><img src="icon/loc.png" />Matara</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Issu Item" type="text" name="Item">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="Msg"></textarea>
                            </div>
                            <div class=" col-md-12">
                            <button class="send" type="submit" name="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Today=date("Y-m-d");
        $Phone=$_POST['Phone'];
        $Item=$_POST['Item'];
        $Msg=$_POST['Msg'];

        $sql="INSERT INTO repairitem SET
            name='$Name',
            email='$Email',
            date=now(),
            phone='$Phone',
            item='$Item',
            msg='$Msg'";

            $output=mysqli_query($con,$sql);
            if($output==True){
                echo "Request Complete";
            }
            else{
                echo "Request Failed";
            }
    }
?>

</body>
</html>