<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<html>
    <head>
        <title>RECEIPT</title>
         <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css">
 <style type = "text/css">
  #Logo3 {
  top:4em;
  left:2em;
  position: absolute;
  }
  ul{
    margin: 0px;
    padding: 0px;
    list-style-type: none;
    width:100%;
    overflow:hidden;
}

 ul li{
    float: left;
    width:222px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
    background-color: black;
    text-transform:uppercase;
    font-family: arial;
    list-style: none;
    
}

ul li a {
 text-decoration: none;
 color: white;
 display: block;
 text-align:center;
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

.active {
    background-color: white ;
}
  #mainContent {
   top:8em;
   left:25em;
   width:30em;
   height:30em;
   position:absolute;
   border-style:groove;
                 }
  </style>
         </head></PHP>
    </head>
    <body>
       <ul>
        <li><a href = "Ebus1.php">Home</a></li>
        <li><a href ="Interests/CloudServices.html">Cloud Services</a></li>
        <li><a class = "active" href = "#RECEIPT">Purchase Receipt</a></li>
        </ul>
          <div id ="Logo3">
        <img src="https://logos.textgiraffe.com/logos/logo-name/Cloud-designstyle-cloud-m.png">
    </div>
        <h1>Purchase Receipt</h1>
        <div id = "mainContent">
        <?php
        //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><br><strong>Email: </strong>". $email);
        echo "<br><br><strong>Total Price is $</strong>" .$_SESSION["total"] . "."; 
        
        ?>
        </div>
    </body>
</html>