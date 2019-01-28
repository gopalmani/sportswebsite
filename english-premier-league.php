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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "englishpremierleague";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result=mysqli_query($conn,"select * from englishpremierleague");

$conn->close();
?>

<h2>League Table!</h2>



<div class="d-flex">
  <div class="dropdown mr-1">
    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      Select League
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
      <a class="dropdown-item" href="english-premier-league.php"><img src="epl.jpg" width="30" height="25">English Premier League</a>
      <a class="dropdown-item" href="german-bundesliga.php"><img src="epl.jpg" width="30" height="25">German Bundesliga</a>
      <a class="dropdown-item" href="french-league.php"><img src="arsenal.png" width="30" height="25">French League</a>
      <a class="dropdown-item" href="italian-series-a.php"><img src="epl.jpg" width="30" height="25">Italian Series A</a>
      <a class="dropdown-item" href="spanish-la-liga.php"><img src="arsenal.png" width="30" height="25">Spanish La Liga</a>
    </div>
  </div>
</div>




<center>
    <h2><b>ENGLISH PREMIER LEAGUE - 2018</b></h2>
<table width="850" cellpadding=10 celspacing=15 border=3 style="background-color: #D7D4D3">
<tr>
<th data-toggle="tooltip" title=""><b>Date</b></th>
<th data-toggle="tooltip" title=""><b>HomeTeam</b></th>
<th data-toggle="tooltip" title=""><b>AwayTeam</b></th>
<th data-toggle="tooltip" title=""><b>FTHG</b></th>
<th data-toggle="tooltip" title=""><b>FTAG</b></th>
<th data-toggle="tooltip" title=""><b>FTR</b></th>
<th data-toggle="tooltip" title=""><b>HTHG</b></th>
<th data-toggle="tooltip" title=""><b>HTAG</b></th>
<th data-toggle="tooltip" title=""><b>HTR</b></th>
<th data-toggle="tooltip" title=""><b>Referee</b></th>
<th data-toggle="tooltip" title=""><b>HS</b></th>
<th data-toggle="tooltip" title=""><b>AS</b></th>
<th data-toggle="tooltip" title=""><b>HST</b></th>
<th data-toggle="tooltip" title=""><b>AST</b></th>
<th data-toggle="tooltip" title=""><b>HF</b></th>
<th data-toggle="tooltip" title=""><b>AF</b></th>
<th data-toggle="tooltip" title=""><b>HC</b></th>
<th data-toggle="tooltip" title=""><b>AC</b></th>
<th data-toggle="tooltip" title=""><b>HY</b></th>
<th data-toggle="tooltip" title=""><b>AY</b></th>
<th data-toggle="tooltip" title=""><b>HR</b></th>
<th data-toggle="tooltip" title=""><b>AR</b></th>
</tr>

 <?php while($row=mysqli_fetch_array($result)):?>
 <tr>
 <td><?php echo $row['Date'];?></td>
 <td><?php echo $row['HomeTeam'];?></td>
 <td><?php echo $row['AwayTeam'];?></td>
 <td><?php echo $row['FTHG'];?></td>
 <td><?php echo $row['FTAG'];?></td>
 <td><?php echo $row['FTR'];?></td>
 <td><?php echo $row['HTHG'];?></td>
 <td><?php echo $row['HTAG'];?></td>
 <td><?php echo $row['HTR'];?></td>
 <td><?php echo $row['Referee'];?></td>
 <td><?php echo $row['HS'];?></td>
 <td><?php echo $row['AS'];?></td>
 <td><?php echo $row['HST'];?></td>
 <td><?php echo $row['AST'];?></td>
 <td><?php echo $row['HF'];?></td>
 <td><?php echo $row['AF'];?></td>
 <td><?php echo $row['HC'];?></td>
 <td><?php echo $row['AC'];?></td>
 <td><?php echo $row['HY'];?></td>
 <td><?php echo $row['AY'];?></td>
 <td><?php echo $row['HR'];?></td>
 <td><?php echo $row['AR'];?></td>
 </tr>
 <?php endwhile;?> 
 </table>
 <br>
 <br>
 <br>
 </center>

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
    </script>
</body>
</html>