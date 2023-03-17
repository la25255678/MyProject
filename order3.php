<?php
error_reporting(1);
session_start();
$i=$_REQUEST['image'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['image'];
if($_POST['ord'])
{ 
$prod_no=$_POST['prodno'];
$prince=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$address=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into italy_order(prod_no,prince,name,phone,address,order_no) values('$prod_no','$prince','$name','$phone','$address','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory HTML CSS Template
https://templatemo.com/tm-507-victory
-->
        <title>FOODS PAGE Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" type="text/css" href="style1.css">
		<link rel="stylesheet" type="text/css" href="css1/style.css" />
		<link rel="stylesheet" type="text/css" href="css1/demo.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
			<img src="img/Inkedb2 (2).jpg" align="left" >
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                       
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->

	
    	<div id="tooplate_content" class="left">
          <div id="comment_form">
		  <center>
            <h3>Italy form</h3>
        <?php
        include("connection.php");
         $sel=mysql_query("select * from italy  where image='$i' ");
         $mat=mysql_fetch_array($sel);

			?>
           
            <form  method="post">
			<table align="center">
			<tr>
			     <td>Product No: </td>
			     <td><span><input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" class="input_field"/></span></td>
			</tr>
			
			 <tr>
                        <td height="20px"></td>
                </tr>        
			
			<tr>
			     <td>Price:</td>
			     <td><input type="text" name="price" id="price" value="<?php echo $mat['prince'];?>" class="input_field"/></td>
			</tr>
			
			 <tr>
                        <td height="20px"></td>
                </tr>        
			
			<tr>

                 <td>Name: </td>
                 <td><input type="text" name="nam" id="nam" class="input_field" /></td>
			</tr>
			
			 <tr>
                        <td height="20px"></td>
             </tr>        
			
			<tr>
				<td>Phone: </td>
                <td><input type="text" name="pho" id="php" class="input_field" /></td>
			</tr>

            <tr>
                        <td height="20px"></td>
              </tr>        
			
			<tr>
				 <td>Address:</td>
                 <td><textarea id="add" name="add" rows="0" cols="0" class="required"></textarea></td>
			</tr>
			
			
			 <tr>
                        <td height="20px"></td>
             </tr>   
			
			<td  colspan="2" align="center">
                    <input type="submit" name="ord" id="ord" value="sent order" class="submit_button" />
				 <input type="submit" name="Cancel" value="Cancel" class="submit_button" /><a href="index.php">
                    
              </td>
            </form>
			</table>
        
        </div>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>