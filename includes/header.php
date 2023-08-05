<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .mar{
                margin-top:8px;
            }
        </style>
</head>
<?php if($_SESSION['login'])
{?>
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">

            <li class="prnt"><a href="profile.php">Profile</a></li>
            <li class="prnt"><a href="change-password.php">Change Password</a></li>
            <li class="prnt"><a href="tour-history.php"> Tour History</a></li>

        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Welcome :</li>
            <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
            <li class="sigi"><a href="logout.php">/Logout</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div><?php } else {?>
<!--<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>-->
<?php }?>
<!--- /top-header ---->

<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="page.php?type=About Us">About</a></li>
                            <li><a href="package-list.php">Packages</a></li>
                            <li><a href="page.php?type=Terms and Condition">Terms and Condition</a></li>
                            <li><a href="page.php?type=Contact">Contact Us</a></li>

                            <?php if($_SESSION['login']){?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal3"> Any Query </a>
                            </li>
                            <?php } else{ ?>
                            <li class="sig">
                                <a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a>
                            </li>
                            <li class="sigi">
                                <a href="#" data-toggle="modal" data-target="#myModal4">/ &nbsp; &nbsp; Sign In</a>
                            </li>
                            <?php }?>

                            <li>
                                <form action="search.php" method="post" class="mar">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                        	<div class="clearfix"></div>
                		</ul>
            		</nav>
        		</div><!-- /.navbar-collapse -->
        	</nav>
   		 </div>
    <div class="clearfix"></div>
</div>
</div>