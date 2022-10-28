<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" src="jquery-ui.min.js">
</script>
<script type="text/javascript" src="bootstrap.min.js">
</script>
<script type="text/javascript" src="Customjs.js">
</script>
<script type="text/javascript" src="contactform.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
<title>
Notice
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="totop.js">
</script>
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
</head>
<body class="Home"
     >
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div>

</header>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div class="menuforeground">
</div>
<div class="ttr_menushape1">
<div class="html_content"><p><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:22px;color:rgba(53,181,235,1);">Digital Society</span></p></div>
</div>
<div id="navigationmenu">
<div class="navbar-header">
<button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</button>
<a href="#" target="_self">
<img  class="ttr_menu_logo" src="menulogo.png" >
</a>
</div>
<div class="menu-center collapse navbar-collapse">
<ul class="ttr_menu_items nav navbar-nav navbar-right">
<li class="ttr_menu_items_parent dropdown active"><a href="home.html" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="AboutUs.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About Us</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="Profile.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Profile</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="contact.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact Us</a>
<hr class ="horiz_separator"/>
</li>
</ul>
</div>
</div>
</div>
</nav>

<div class="contact-clean" style="margin: 20px;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <h2 align="center" style="color: #000000; font-family: Georgia"><b>Notice for all society Members</b></h2>
        <h4 style="color: #0r0r0r;"><b>Occasion</b></h4>
        <input type="text" name="occasion"><br>
        <h4 style="color: #0r0r0r;"><b>Notice</b></h4>
        <textarea name="notice"></textarea><br>
        
        <button class="btn btn-primary" type="submit" name="sendnotice" style="margin-top: 30px; font-size: 15px; box-shadow:1px 1px 5px rgba(0,0,0,0.1); border-radius:5px;">Send</button>
        
        <button class="btn btn-primary" type="button" name="viewnotice" onclick="location.href='viewnotice.php'" style="width: 400px; text-align: center; font-size: 18px; border-radius: 5px; box-shadow: 1px 1px 5px rgba(0,0,0,0.1); ">View All Notice</button>
       
    </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

<?php

   require_once "DBConnect.php";
    if(isset($_POST['sendnotice']))
    {
        $occasion = $_POST['occasion'];
        $notice = $_POST['notice'];
        $sql = "INSERT INTO notice(occasion,notice) VALUES ('$occasion','$notice')";

            if(mysqli_query($con,$sql))
            {
                $result["success"] = "1";
                $result["message"] = "Successful";

                echo json_encode($result);
                mysqli_close($con);
            }

            else
            {
                $result["success"] = "0";
                $result["message"] = "Something went wrong..!!";

                echo json_encode($result);
                mysqli_close($con); 
            }
    }
    
?>
