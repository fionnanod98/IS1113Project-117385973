<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
       
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type = "text/javascript" src ="cost_calc.js"></script>
        <style type = "text/css">
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
    background-color: 	#1E90FF;
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
 background-color: black;
 
}

ul li ul li{
 display: none;
}

ul li:hover ul li {
 display: block;
 
}
.active {
    background-color: white;
}
        
        #maincontent {
                top:7em;
                left:25em;
                width:30em;
                height:30em;
                position:absolute;
                border-style:groove;
        }
        #button1 {
            top:22.5em;
            left:3em;
            position:absolute;
        }
        #button2 {
            top:22.5em;
            left:13em;
            position:absolute;
        }
        #button3 {
            top:25em;
            left:9em;
            position: absolute;
        }
   
        h2 {
            text-align:center;
        }
        body{
            background:url("http://www.lgcnsblog.com/wp-content/uploads/2015/09/main.jpg")no-repeat center center fixed; 
            background-size: cover;
        }

        input[type=text] {
                           border: 2px solid black;
                           border-radius: 4px;
                           text-align:center;
}
       button[type=submit]:disabled {
                           background-color: black;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
       button[type=submit]:enabled {
                          background-color:#333;
                          color: White;
       }
       button {
            background-color: black;
                           border-radius: 2px;
                           border:none;
                           color: white;
                           padding: 5px;
                           cursor: pointer;
       }
       button:hover {
           background-color:#333;
           color:White;
       }
       
       
        </style>
    </head>
    <body>
        
        
        
    <ul>
        <li><a href="../homepage.html">Home</a></li>
    </ul>   
        <br/>
        <br/>
        
        <h2>Select A Product</h2>
        <div id ="maincontent">
            <br>
        <form method ="POST" action ="Ebus2.php">
            <label for = "salesforce">
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="salesforce" name="product"  onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label>
            <br/><br>
            <label for ="cloud9">
               &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id ="cloud9" name = "product" onClick = "disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br><br>
            <label for= "aws">
             &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br><br>
            <label for ="Gmail">
              &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id ="Gmail" name = "product" onClick = "disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br><br><br>
            <label for ="subtotal">
            <Strong> &nbsp;  Sub Total:</Strong> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            <br><br>
            <label for = "discount">
                <strong>&nbsp; Discount @ 5%:</strong>
                <input type = "text" id ="discount" name ="discount" readonly/>
                <br> <strong> &nbsp;&nbsp;(-Discount)</strong>
            </label>
            <br><br>
            <label for ="vat">
                <strong>&nbsp; Vat @ 10%:</strong>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type = "text" id ="vat" name ="vat" readonly />
            </label>
            
            <br><br>
            
            <label for ="total">
             <strong>  &nbsp; Total:</strong> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="total" name = "total" value="0.00" readonly/>
            </label>
          
            <br><br>
            <div id ="button1">
            <button type = "submit" id="btnProceed" disable>Add to Shopping Cart</button>
            </div>
        </form> 
            <div id ="button2">
          <button onClick="calcSub();calcDisVatTotal()">Calculate Cost</button>
          </div>
          
       
        
        <br/>
        <div id ="button3">
        <a href="Ebus1.php"><button>Clear Choice</a></button>
        </div>
        </div>
    </body>
</html>