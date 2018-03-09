<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<html>
    <head>
        <title>RECEIPT</title>
        
    <style type = "text/css">
 /*navigation bar*/
 ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
    width:100%;
}

 ul li{
    float: left;
    width:222px;
    height: 40px;
    opacity: .8;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
    background-color:black;
    text-transform:uppercase;
    font-family: arial;
    list-style: none;
    
}

ul li a {
 text-decoration: none;
 color: white;
 display: block;
}

ul li a:hover {
 background-color: white;
 color:black;
 
}

ul li ul li{
 display: none;
}

ul li:hover ul li {
 display: block;
 
}
body{
     background:url("http://www.lgcnsblog.com/wp-content/uploads/2015/09/main.jpg")no-repeat center center fixed; 
     background-size: cover;
        }
#mainContent {
 top:8em;
 left:25em; width:30em;
 height:30em;
 position:absolute;
 border-style:groove;
 
}
</style>
</head>
    </head>
    <body>
       <ul>
        <li><a href = "../homepage.html">Home</a></li>
      </ul>
        <h2>Purchase Receipt</h2>
        <div id = "mainContent">
        <?php
        /*Echo session varaibles that were set to the previous page*/
        echo("<strong>Name: </strong>". $name);
        echo("<br><br><strong>Email: </strong>". $email);
        echo "<br><br><strong>Total Price is $</strong>" .$_SESSION["total"] . "."; 
        
        ?>
        </div>
    </body>
</html>