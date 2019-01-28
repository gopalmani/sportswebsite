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

.zoom {
    padding: 50px;
    transition: transform .2s;
    width: 400px;
    height: 400px;
    margin: 0 auto;
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
          <h2><strong>Europa League: Chelsea March Into Knockouts, Arsenal Progress Despite Sporting Stalemate</strong></h2>

          <p class="lead mb-0">Arsenal booked a place in the Europa League knockout stage and extended their unbeaten run to 15 matches despite a 0-0 draw with Sporting Lisbon on Thursday, while Olivier Giroud's first goal of the season sent Chelsea through. But Arsenal striker Danny Welbeck, given a rare start just hours after being named in Gareth Southgate's England squad, had to be stretchered down the tunnel with what looked a nasty ankle injury in the first half. Arsenal midfielders Matteo Guendouzi and Aaron Ramsey were both visibly upset after Welbeck, who is out of contract at the end of the campaign, went down after jumping to win a header."It is mentally challenging (playing after a teammate is injured) but sometimes it comes with the game, and Danny has had a lot of injuries," winger Alex Iwobi told BT Sport.<br>
            <br>

"We wish him the best and will keep on encouraging and motivating him to get back."
        </div>
        <div class="p-0 col-lg-3"> <img class="img-fluid d-block" src="2ndblog.jpg"> </div>
      </div>
      <div class="row my-4 d-flex justify-content-center">
        <div class="p-0 order-2 order-lg-1 col-lg-3"> <img class="img-fluid d-block" src="2ndblogg.jpg"> </div>
        <div class="d-flex flex-column justify-content-center p-3 col-lg-7 order-1 order-lg-2">
          <p class="lead mb-0">Unai Emery's Gunners were the better side for long periods at the Emirates against a team who have already had three different managers this term, but were forced to settle for a point despite Sporting being reduced to 10 men late on when former Barcelona centre-back Jeremy Mathieu was sent off.<br><br>

But Arsenal did secure a last-32 spot regardless, as Vorskla Poltava lost 1-0 at home to Azeri outfit Qarabag in the other Group E game.<br>

Chelsea made it four wins from four matches in Group L by edging out a spirited BATE Borisov 1-0 in Belarus.<br><br>

Giroud ended his 11-game goal drought this season by giving Chelsea a 53rd-minute lead, and the Premier League giants held on despite BATE striking the woodwork three times in the match.<br>

Reigning Scottish champions Celtic gave themselves a lifeline in Group B, as Odsonne Edouard's 79th-minute strike saw them beat RB Leipzig 2-1 in their must-win clash at Parkhead.<br>

Salzburg, semi-finalists last season, qualified for the next round with a 5-2 thrashing of Rosenborg in the group's other match, as Japanese forward Takumi Minamino scored a hat-trick. Elsewhere, Eintracht Frankfurt reached the last 32 with their fourth win from as many group games by beating Apollon Limassol 3-2 in Cyprus, while Lazio joined them in progressing from Group H as goals from Marco Parolo and Joaquin Correa secured a 2-1 win over Marseille to eliminate last season's runners-up.<br><br>

AC Milan stayed just a point adrift of Group F leaders Real Betis after Suso's second-half equaliser grabbed a 1-1 draw in Spain.

Record five-time winners Sevilla needed a late penalty from Ever Banega to claim a 3-2 victory at Akhisar Belediyespor, after having a man sent off, losing a two-goal lead and seeing the Turks miss a spot-kick of their own.<br><br>
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
  <p>Copyright &copy; Football All-in-One - 2018 Designed and Coded in INDIA.</p>
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