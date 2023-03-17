
<!DOCTYPE html>
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
		<link rel="stylesheet" type="text/css" href="css1/style.css" />
		<link rel="stylesheet" type="text/css" href="css1/demo.css" />
		<link rel="stylesheet" type="text/css" href="style1.css" />
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
                        <li><a href="food.php">Foods</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{
$first_name=$_POST['t1'];
$last_name=$_POST['t2'];
$email=$_POST['t3'];
$password=$_POST['t4'];
$phone_no=$_POST['t5'];
$country=$_POST['t6'];
$city=$_POST['t7'];
$township=$_POST['t8'];
if(mysql_query("insert into sign_up(first_name,last_name,email,password,phone_no,country,city,township) values('$first_name','$last_name','$email','$password','$phone_no','$country','$city','$township')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}

?>
<center>
            <form  method="post">
			<table>
            <h2>Create a Register!!</h2>
			<tr>
			     <td>First_Name : </td>
			     <td><span><input type="text" name="t1" id="t1"  class="input_field"/></span></td>
			</tr>
			
			 <tr>
                        <td height="20px"></td>
                </tr>  
			<tr>
			     <td>last_Name : </td>
			     <td><span><input type="text" name="t2" id="t2"  class="input_field"/></span></td>
			</tr>
			      
            <tr>
                        <td height="20px"></td>
                </tr>     
			<tr>
			     <td>Email:</td>
			     <td><input type="text" name="t3" id="t2"  class="input_field"/></td>
			</tr>
			
			 <tr>
                        <td height="20px"></td>
                </tr>        
			
			<tr>

                 <td>Password: </td>
                 <td><input type="text" name="t4" id="t3" class="input_field" /></td>
			</tr>
			
			 <tr>
                        <td height="20px"></td>
             </tr>        
			
			<tr>
				<td>Phone_no: </td>
                <td><input id="t4" name="t5" class="required"></td>
			</tr>
            <tr >
            <td height="20px"></td>

            </tr>
            <tr>
				<td>Country: </td>
                <td><input id="t4" name="t6" rows="0" cols="0" class="required"></td>
			</tr>
            <tr >
            <td height="20px"></td>

            </tr>
            <tr>
				<td>City: </td>
                <td><input id="t4" name="t7" rows="0" cols="0" class="required"></td>
			</tr>
            <tr >
            <td height="20px"></td>

            </tr>
            <tr>
				<td>Township: </td>
                <td><input id="t4" name="t8" rows="0" cols="0" class="required"></td>
			</tr>
            <tr >
            <td height="20px"></td>

            </tr>
            	
					<tr>
						<td colspan="2" align="center"><input type="submit" name="sub" value="Send"> &nbsp;
													   <input type="reset" value="Cancel">
						</td>
					</tr>
        
            </form>
			</table>
            <h2><?php echo $er;?></h2>
        
</center> 

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Developer by &copy; PAGE MYANMAR STUDENT</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Design: ONE STUDENT</p>
                </div>
            </div>
        </div>
    </footer>
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