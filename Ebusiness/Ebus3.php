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
            ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color: 	#1E90FF;
}
li{
    float: left;
}
li a{
    display: block;
    color:white;
    text-align:center;
    padding: 10px 59px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
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
        <li><a href = "../homepage.html">Home</a></li>
        <li><a href ="../Interests/CloudServices.html">Cloud Services</a></li>
        <li><a class = "active" href = "#RECEIPT">Purchase Receipt</a></li>
        </ul>
        <h2>Purchase Receipt</h2>
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