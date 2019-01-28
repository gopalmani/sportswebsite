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
    <link rel="shortcut icon" href="um4.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">

    <style>
* {
    box-sizing: border-box;
}

.zoom {
    padding: 50px;
    transition: transform .2s;
    width: 400px;
    height: 400px;
    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}
     .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
	.container {
    position: relative;
    font-family: Arial;
    text-align: center;
    text-decoration-color: green;
}
    .ms-footer{
    background-color: black;
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
    <h2 class="w3-center">Welcome!!</h2>
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="1st.jpg" >
                <div class="carousel-caption">
                  <h3>Football Stadium</h3>
                  <p>Multi-Purpose Stadium, which hosts mainly football matches.</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="2nd.jpg">
                <div class="carousel-caption">
                  <h3>Lionel Messi</h3>
                  <p> Lionel Messi is an Argentine professional footballer who plays as a forward</p>
                </div>
              </div>

              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="3rd.jpg">
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="4th.jpg">
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <br>

              <div>
              	<h2><center><strong>Upcoming Matches....</strong></center></h2><br><br>
              	<img src="arsenal.png">Arsenal&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;11 oct, 2019, USA&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Liverpool<img src="liverpool.png"><br><br>
              	<img src="um1.png">Barcelona&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;11 Dec, 2019, London&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ManchesterCity<img src="um2.png"><br><br>
              	<img src="um3.png">Chelsea&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;18 Dec, 2019, Brazil&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Juventus<img src="um4.png"><br><br>
              	<img src="um5.png">Liverpool&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;20 Dec, 2019, Germany&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RealMadrid<img src="um6.png"><br><br>
              	<img src="um7.png">Arsenal&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;22 Dec, 2019, France&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Chelsea<img src="um8.png"><br><br>
              	<img src="um9.png">AtleticoMadrid&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;28 Dec, 2019,USA&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Juventus<img src="um10.png"><br><br>

              </div>


            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>



	<div class="w3-container w3-teal" >
<h1><center>Latest News</center></h1>
</div>

<div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <a href="1stblog.php"><img src="1stblog.jpg" alt="Sandwich" style="width:70%">
      <a href="1stblog.php"><h3>Wesley Sneijder Threatens To Quit Qatar In Furious Rant After Red Card, Tweets Apology</h3>
      <a href="1stblog.php"><p>Wesley Sneijder vowed to not play in Qatar again after he was shown a red card during a Qatar Stars League match.</p>
    </div>
    <div class="w3-quarter">
      <a href="2ndblog.php"><img src="2ndblog.jpg" alt="Steak" style="width:70%">
      <a href="2ndblog.php"><h3>Europa League: Chelsea March Into Knockouts, Arsenal Progress Despite Sporting Stalemate</h3>
      <a href="2ndblog.php"><p>Chelsea made it four wins from four matches in Group L by edging out a spirited BATE Borisov 1-0 in Belarus.</p>
    </div>
    <div class="w3-quarter">
      <a href="3rdblog.php"><img src="3rdblog.jpg" alt="Cherries" style="width:70%">
      <a href="3rdblog.php"><h3>Alvaro Morata Double Sends Below-Par Chelsea Into Second Place</h3>
      <a href="3rdblog.php"><p>Alvaro Morata has now scored four in his last four Premier League games.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <a href="4thblog.php"><img src="4thblog.jpg" alt="Pasta and Wine" style="width:70%">
      <a href="4thblog.php"><h3>Cristiano Ronaldo Still Out Of Portugal Squad For UEFA Nations League</h3>
      <a href="4thblog.php"><p>Portugal face Italy in Milan on November 17 and host Poland three days later in Guimaraes.</p>
    </div>
  </div>
	
	<div class="w3-container w3-teal" >
<h1><center>Our Gallery</center></h1>
</div>

<div class="w3-row-padding w3-margin-top">
	<div class="w3-third">
<div class="w3-card">
	<div class="zoom">
<img src="4.jpg" style="width:100%">
<div class="w3-container">
<h4>A young fan with the Leicester flag</h4>
</div>
</div>
</div>
</div>


<div class="w3-third">
<div class="w3-card">
	<div class="zoom">
<img src="2.jpg" style="width:100%">
<div class="w3-container">
<h4>Cristiano Ronaldo and Florentino Perez</h4>
</div>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
	<div class="zoom">
<img src="5.jpg" style="width:100%">
<div class="w3-container">
<h4>Lionel Messi against Inter Milan.</h4>
</div>
</div>
</div>
</div>
</div>

<div class="w3-row-padding w3-margin-top">



<div class="w3-third">
	<div class="zoom">
<div class="w3-card">
<img src="1.jpg" style="width:100%">
<div class="w3-container">
<h4>Cristiano Ronaldo for games.</h4>
</div>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
	<div class="zoom">
<img src="5.jpg" style="width:100%">
<div class="w3-container">
<h4>Neymar's New Challenge For Fans Goes Viral</h4>
</div>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card">
	<div class="zoom">
<img src="6.jpg" style="width:100%">
<div class="w3-container">
<h4>Brazil's Miranda Silences Argentina</h4>
</div>
</div>
</div>
</div>

</div>

<br>
<br>


<div class="footer">
  <p>Copyright &copy; GoalMaestro.com - 2018 Designed and Coded in INDIA.</p>
</div>
    <!--Main Layout-->
    
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

        var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
    </script>
</body>
</html>
