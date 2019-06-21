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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">

    <style>
* {
    box-sizing: border-box;
}
input[type=text]{
    border-radius: 4px;
    width: 100%;
    height: 50%;
    padding: 12px 20px;
}
    .first{
        border-style: solid;
        border: 25px solid gray ;
        margin: 150px;
        padding-top: 50px;
        padding-right: 30px;
        padding-bottom: 50px;
        padding-left: 50px;
    
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
   <div class="py-3">
    <div class="container">
      <div class="row my-4 d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7">
          <h2><strong>Watch: Wesley Sneijder Threatens To Quit Qatar In Furious Rant After Red Card, Tweets Apology</strong></h2>

          <p class="lead mb-0">Dutch star footballer Wesley Sneijder suffered an astonishing meltdown after being shown a red card during a match between Al-Gharafa and Qatar SC. The former Inter Milan star, regarded as one of the finest playmakers, threatened to never play in Qatar ever again after he was sent off with just a few minutes left on the clock. 
          	<br><br>Sneijder, playing in the Qatar Stars League with Al-Gharafa, has scored 14 times in just 18 appearances. In a video doing the rounds on social media, Sneijder can be seen saying, "This is the last game I play in Qatar!".<br><br>

          The Dutchman was on a hat-trick in the match against Qatar SC when he picked up the red card for a foul on Qatar SC goalkeeper Jassim Al Hail. He jumped to avoid contact with the goalie but landed on the right hand of Al Hail.</p>
        </div>
        <div class="p-0 col-lg-3"> <img class="img-fluid d-block" src="1stblog.jpg"> </div>
      </div>
      <div class="row my-4 d-flex justify-content-center">
        <div class="p-0 order-2 order-lg-1 col-lg-3"> <img class="img-fluid d-block" src="1stblogg.jpg"> </div>
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7 order-1 order-lg-2">
          <p class="lead mb-0">The referee surprisingly showed him a straight red for the incident. A furious Sneijder gesticulated at the referee but to no avail and while making his way off the pitch  he was caught on camera repeatedly saying: "This is the last game I play in Qatar!".<br><br>

          After the match, the 34-year-old made a complete U-turn and tweeted his apology. In his apology, Sneijder wrote that he overreacted in the heat of the moment and enjoyed living, playing in Qatar.<br><br>

          Sneijder, the former Real Madrid and Inter Milan playmaker, moved to Al Gharafa of Qatar earlier this year from Ligue 1 side Nice. A star of the Netherlands team that got to the 2010 World Cup final is the most-capped Dutch player of all time.</p><br>
        </div>
      </div>
    </div>
  </div>

  <center><blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">While playing a football match I reacted in the heat of the moment to a red card I did not deserve. However, to counter any false media speculations:  I enjoy living and playing football in Qatar! <a href="https://t.co/WuC7Z7IHAU">pic.twitter.com/WuC7Z7IHAU</a></p>&mdash; Wesley Sneijder (@sneijder101010) <a href="https://twitter.com/sneijder101010/status/1060893536898420736?ref_src=twsrc%5Etfw">November 9, 2018</a></blockquote>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></center>


  <div class="row my-4 d-flex justify-content-center">
        <div class="p-0 order-2 order-lg-1 col-lg-3"></div>
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7 order-1 order-lg-2">
          <p class="lead mb-0"><strong>Sneijder turned out for the Netherlands for the 134th and final time in the team's 2-1 friendly win over Peru in Amsterdam in September this year.</strong></p>
        </div>
      </div>
      <br>

      <fieldset>

 <legend><center>Recent Comments.....</center></legend>
      
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result=mysqli_query($conn,"select * from message");

$conn->close();


while($row=mysqli_fetch_array($result)):?>
    
<center>
<table>
 <tr>
 <td><h3><?php echo $row['msg'];?></h3></td>
 </tr>
</table>
</center>

<?php endwhile;?> 
</fieldset>

<div class="first">
<fieldset>
    <legend>Write a Comment to us....</legend>
 
 <form action="action-blog.php" method='post'>
                <div class="form-group">
                    <input type="text" class="form-control" id="msg" placeholder="Enter a Message....." name="msg">
                </div>
                 <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </fieldset>
    </div>
    </div>
</div>
</div>
      <br>
      <br>


<div class="footer">
  <p>Copyright &copy; GoalMaestro - 2018 Designed and Coded in INDIA.</p>
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

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>