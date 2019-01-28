<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
     <style>
    .bb {
    background-color: lightblue;
}

button{
	border-radius: 6px;
	padding: 12px 20px;
}
input[type=text]{
	border-radius: 4px;
	width: 50%;
	height: 50%;
	padding: 12px 20px;
}
    .first{
        border-style: solid;
        border: 25px solid lightyellow ;
        margin: 150px;
        padding-top: 50px;
        padding-right: 30px;
        padding-bottom: 50px;
        padding-left: 350px;
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
</style>
</head>
<body class="bb">
    <div class="first">

    <fieldset>
    <legend>Enter Your Email Address and Password</legend>

 <form action="action_page.php" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" id="email" placeholder="Enter your Email" name="email">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" id="pass" placeholder="Enter Password" name="pass">
                </div><br><br>
                <button type="submit" class="btn btn-default">Login</button>
                &nbsp;&nbsp;<a href="signup.php">Create Account</a>
            </form>
        </fieldset>
        </div>
        <div class="footer">
  <p>Copyright &copy; GoalMaestro.com - 2018 Designed and Coded in INDIA.</p>
</div>

</body>
</html>