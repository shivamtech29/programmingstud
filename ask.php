<!DOCTYPE html>
<html>
<head>
    <title>
            PROGRAMMING TUTORIALS
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app.js"></script>

</head>

<style>
body {
    margin:0;
    padding:0;
    font-family:montserrat;
    background:white;
    height:100vh;
    overflow:hidden;
}

.center {
    padding:5%;
    box-shadow: 0 5px 8px 0 rgba(0,0,0,0.4), 0 9px 26px 0 rgba(0,0,0,0.35);
}
.center h2 {
    text-align: center;
    color: black;
}
.btnsubmit {
    width:50%;
    margin-top: 20px;
    margin-left: 20px;
    border-radius: 1rem;
    padding: 1.5%;
    border:none;
    cursor:pointer;
    font-weight: 600;
    color:#fff;
    background: #0062cc;
}
.field {
    width:80%;
    text-align: center;
    margin-top: 20px;
}
@media (min-width:450px) and (max-width:750px) {
    .field {
        width:60%;
        text-align: center;
        margin-top: 20px;
    }
    .btnsubmit {
        width:50%;
    }
}
@media (min-width:751px) {
    .field {
        width:40%;
        text-align: center;
        margin-top: 20px;
    }
    .btnsubmit {
        width:30%;
    }
}
</style>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header active">
            <a class="navbar-brand active" href="index.htm">programming stud</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="registerform.php">join us <small>and register</small></a></li>
            <li><a href="tut.htm">Basic plan</a></li>
            <li class="active"><a href="#">Ask for premium</a></li>
			 <li><a href="gopremium.php">go premium now</a></li>
          </ul>
        </div>
      </nav>

      <div class="center">
          
          <h2>Ask for Premium</h2><center><h5>register first if not done yet or click to go premium</h5></center><center>
          <form method ="post" action="">
            <div class="field form-group">
                <span class="glyphicon user"></span>
                <input type="text" inputmode="email" name="user" class="form-control" placeholder="Email" required>
                
            </div>
            
            <div class="field form-group">
                <input type="password" class="form-control" name="pass" placeholder="given password" required>
                <span></span>
                
            </div>
            <div class="form-group">
            <input type="submit" class="btnsubmit" value="Login"  class="glyphicon log-in">
            </div>
          </form></center>
      </div>


      <?php

$server="localhost";
$user="program8_mydb";
$pwd="shivam29@";
$db="program8_mydb";

$connect=mysqli_connect($server,$user,$pwd,$db);
if(!$connect)
{ die("error".mysqli_connect_error()); }
$usern="";
$usern=$_POST["user"];
$pass=$_POST["pass"];
if($usern)
{
$userQuery= "INSERT INTO ask (username,premium) VALUES ('$usern','yes')";
$result=mysqli_query($connect,$userQuery);
if(!$result)
{die("errormsg".mysqli_error($connect));}
else
{print("You will be Contacted soon...");}
mysqli_close($connect);
$user="";}
?>


</body>
</html>