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
                <p><strong>Football All-in-One</strong></p>
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
          <h2><strong>Alvaro Morata Double Sends Below-Par Chelsea Into Second Place</strong></h2>

          <p class="lead mb-0">Alvaro Morata scored twice to take unbeaten Chelsea above Liverpool into second place in the Premier League behind Manchester City on Sunday, but Maurizio Sarri's men made hard work of seeing off Crystal Palace 3-1. Morata has now scored four in his last four Premier League games after just two goals in his previous 20 domestic matches, and his return to form could be the final ingredient Sarri's side need to mount a serious title challenge. The former Real Madrid striker gave Chelsea a barely deserved half-time lead from an uninspired first 45 minutes.<br><br>

          However, Andros Townsend's equaliser and the introduction of Eden Hazard from the bench woke Chelsea from their slumber after the break and Morata restored the hosts' lead before Pedro Rodriguez sealed the three points.<br>
          <br>

Hazard was only fit enough for a place on the bench on his return from a back injury and his creative spark was badly missed as Chelsea laboured against a well-organised Palace, who also provided a threat on the counter-attack through Wilfried Zaha.</p>
        </div>
        <div class="p-0 col-lg-3"> <img class="img-fluid d-block" src="3rdblog.jpg"> </div>
      </div>
      <div class="row my-4 d-flex justify-content-center">
        <div class="p-0 order-2 order-lg-1 col-lg-3"> <img class="img-fluid d-block" src="3rdblogg.jpg"> </div>
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7 order-1 order-lg-2">
          <p class="lead mb-0">It was Max Meyer who had the visitors' best chance, but the German international, who is still looking for his first Palace goal since a summer move from Schalke, fired over when well-placed on the edge of the area.

Chelsea took over half an hour to create anything of note, but Morata took the first opportunity to come his way.

The Spanish international showed a confidence that has been sorely lacking for the majority of his Chelsea career by deftly controlling Pedro's cross before drilling the ball low past Wayne Hennessey.

Chelsea could have had a second moments later when Willian blasted home another deflected Pedro effort, but the Brazilian was harshly adjudged to be offside.

Sarri is now unbeaten in his first 16 competitive games as Chelsea boss, but will know there is still plenty of room for improvement as a sleepy start to the second-half was punished in the 53rd minute.

David Luiz was caught ball watching and Townsend played a quick one-two with James McArthur before firing low past Kepa Arrizalabaga.<br><br>
Hennessey did well to parry a powerful Luiz header as the Brazilian tried to make amends for his error.

However, it wasn't until Sarri summoned Hazard and Mateo Kovacic from the bench in the 64th minute that Chelsea took control.

Hazard's first involvement was to be chopped down midway inside the Palace half, and his free-kick found a way through to Morata, who arrowed a shot into the far corner.<br><br>

Five minutes later Chelsea had breathing room as Morata again did well to leave Marcos Alonso's cross for the onrushing Pedro to slot home.

Morata had the chance to complete a fine display when put clean through by Hazard in stoppage time, but failed to fool Hennessey with his attempted chip.
</p><br>
        </div>

      </div>
<fieldset>

 <legend>Recent Comments.....</legend>
      
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

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>