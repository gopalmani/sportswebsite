<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GoalMaestro</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">

    <style>
    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
		</style>


</head>

<body class="hidden-sn grey-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="log.jpg" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                <ul class="collapsible collapsible-accordion">
                	<li><a class="collapsible-header waves-effect arrow-r" href="index.php"><i class="fa fa-home"></i>Home<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r" href="all-blogs.html"><i class="fa fa-eye"></i>Blogs<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
					
                    <li><a class="collapsible-header waves-effect arrow-r" href="english-premier-league.php"><i class="fa fa-futbol-o"></i>Tables<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
					
                    <li><a class="collapsible-header waves-effect arrow-r" href="liverpool-team.php"><i class="fa fa-futbol-o"></i>Teams<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
					
                    <li><a class="collapsible-header waves-effect arrow-r" href="lac-fifa-world-cup.php"><i class="fa fa-futbol-o"></i>LeaguesAndCups<i class="fa fa-angle-down rotate-icon"></i></a>
                    </li>
					
					
					<li><a class="collapsible-header waves-effect arrow-r" href="login.php"><i class="fa fa-user"></i>Account<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Introduction</a>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i>Contact<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="contact.html" class="waves-effect">FAQ</a>
                                </li>
                                <li><a href="contact.html" class="waves-effect">Write a message</a>
                                </li>
                            </ul>
                        </div>
                    </li>
					
					
                </ul>
            </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p><strong>GoalMaestro</strong></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="clearfix d-none d-sm-inline-block">Home</span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="all-blogs.html"><i class="fa fa-eye"></i> <span class="clearfix d-none d-sm-inline-block">Blogs</span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="english-premier-league.php"><i class="fa fa-futbol-o"></i> <span class="clearfix d-none d-sm-inline-block">Tables</span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="liverpool-team.php"><i class="fa fa-futbol-o"></i> <span class="clearfix d-none d-sm-inline-block">Teams</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="lac-fifa-world-cup.php"><i class="fa fa-futbol-o"></i> <span class="clearfix d-none d-sm-inline-block">LeaguesAndCups</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main Layout-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leaguetable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result=mysqli_query($conn,"select * from isl");

$conn->close();
?>

<h2>Top Leagues!</h2>

<div class="d-flex">
  <div class="dropdown mr-1">
    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      Top Leagues
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
      <a class="dropdown-item" href="lac-fifa-world-cup.php"><img src="fifa.png" width="30" height="25">FIFA WORLD CUP</a>
      <a class="dropdown-item" href="lac-english-premier-league.php"><img src="epl.jpg" width="30" height="25">English Premier League</a>
      <a class="dropdown-item" href="lac-indian-super-league.php"><img src="arsenal.png" width="30" height="25">Indian Super League</a>
    </div>
  </div>
</div>

<center><h2><b>INDIAN SUPER LEAGUE - Leagues And Cups - 2018-19</b></h2></center>



<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 p-3"> <h2>Indian Super League: Bengaluru FC Register 3-0 Win Against FC Pune City</h2><br>
        	<p>The win saw Bengaluru FC race to the top of the table with seven points and a better goal difference compared to NorthEast United FC.</p>
        	<img class="img-fluid d-block" src="lac-isl.png" width="700" height="400"><span>The match was held at the Shree Shiv Chhatrapati Sports Complex Stadium in Pune</span><br><br>
          <p class="mt-2 mb-0">A quick-fire first-half brace from Sunil Chhetri and another powerful finish from Miku set up a majestic 3-0 win for Bengaluru FC against FC Pune City in the Indian Super League (ISL) clash at Shree Shiv Chhatrapati Sports Complex Stadium in Pune on Monday. Bengaluru led 2-0 at the breather with Chhetri striking in the 41st and 43rd minutes while Venezuelan striker Miku completed the rout in the 64th minute.<p><br>
          	<p>The win saw Bengaluru FC race to the top of the table with seven points and a better goal difference compared to NorthEast United FC, while Pune have just one point after three matches.</p>

<p>Bengaluru FC were the early aggressors and had an opportunity to score in the 15th minute when Matt Mills' poor first-touch allowed Miku to nick the ball off the defender. The Venezuelan striker dribbled into the box before curling the ball over the bar from a tight angle.

Bengaluru FC goalkeeper Gurpreet Singh used his height to great effect to keep out a dipping free-kick effort by Marcelinho. The Brazilian's stunning take looked destined to hit the top right corner of the net but the Blues custodian dived to his left to pull off a terrific save.</p><br>

<p>As the two sides stood tight at the back, clear-cut chances were hard to come by.

Dimas Delgado's in-swinging corner-kick found Chhetri unmarked in the centre of the box but the striker's header was straight at the goalkeeper.

Bengaluru's best chance of the first half came in the 40th minute when Udanta Singh was released down the right flank by Miku. The winger crossed perfectly for Chhetri in the centre whose effort struck agonisingly wide from close range.

The Blues skipper made amends for his miss with a goal a minute later. He beat Pune's offside trap to receive Delgado's long diagonal from the right and placed a neat finish past goalkeeper Vishal Kaith to give his side the lead.</p><br>

<p>Chhetri doubled his side's lead within two minutes. Another long ball from the back was poorly cleared by the Pune defence. Miku pounced on the loose ball before releasing Chhetri into the box who skipped past Sarthak Golui's challenge to complete the move.</p><br>

<p>Soon after the restart, the visitors threatened again. Udanta intercepted a pass and lobbed the ball over the defence for Miku to chase but the striker, once he got to the byline, took too long to cross and the delay allowed Martin Diaz to slide in with a tackle.

Miku's physical prowess and persistence helped Bengaluru add their third goal in the 64th minute. A long punt forward by Albert Serran fell to Miku who outmuscled Sahil Panwar and slammed home.</p><br>

Pune almost came up with an immediate response at the other end. Rahul Bheke failed to clear a long ball and Diego Carlos pounced onto it before sending a ferocious attempt that struck the outside of the post and sailed out.</p>
                <br>
                <br>
        </div>
        <div class="col-md-6 p-3">
          <center>
<table width="600" cellpadding=7 celspacing=7 border=3 style="background-color: #D7D4D3">
<tr>
<th data-toggle="tooltip" title="FIFA World Cup Teams"><b>Teams</b></th>
<th data-toggle="tooltip" title="Games Played"><b>GP</b></th>
<th data-toggle="tooltip" title="Wins"><b>W</b></th>
<th data-toggle="tooltip" title="Draws"><b>D</b></th>
<th data-toggle="tooltip" title="Losses"><b>L</b></th>
<th data-toggle="tooltip" title="Goals For"><b>F</b></th>
<th data-toggle="tooltip" title="Goals Against"><b>A</b></th>
<th data-toggle="tooltip" title="Goals Difference"><b>GD</b></th>
<th data-toggle="tooltip" title="Points"><b>P</b></th>
</tr>
<?php while($row=mysqli_fetch_array($result)):?>
 <tr>
 <td><?php echo $row['teams'];?></td>
 <td><?php echo $row['gp'];?></td>
 <td><?php echo $row['w'];?></td>
 <td><?php echo $row['d'];?></td>
 <td><?php echo $row['l'];?></td>
 <td><?php echo $row['f'];?></td>
 <td><?php echo $row['a'];?></td>
 <td><?php echo $row['gd'];?></td>
 <td><?php echo $row['p'];?></td>
 </tr>
 <?php endwhile;?> 
 </table>
 </center><br><br>

<h2>Glossary</h2><br>
<P>GP: Games Played</P>
<P>W: Wins</P>
<P>D: Draws</P>
<P>L: Losses</P>
<P>F: Goals For</P>
<P>A: Goals Against</P>
<P>GD: Goals Difference</P>
<P>P: Points</P>


</div>      

<div "style: clear:both;"></div>
</div>

    <!--Main Layout-->
<div class="footer">
  <p>Copyright &copy; GoalMaestro - 2018 Designed and Coded in INDIA.</p>
</div>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/jquery-3.3.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/mdb.min.js"></script>
    <script>
        
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
</body>
</html>