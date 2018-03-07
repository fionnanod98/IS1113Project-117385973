<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type = "text/javascript" src ="cost_calc.js"></script>
        <style type = "text/css">
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            width:100%;
            overflow:hidden;
            background-color:#42d7f4 ;
}
li{
    float: left;
}
li a{
    display: block;
    color:black;
    text-align:center;
    padding: 16px 18px;
    text-decoration: none;
}
li a:hover {
    background-color:#d966ff ;
}
.active {
    background-color: #d966ff;
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
        input[type=text] {
                           border: 2px solid black;
                           border-radius: 4px;
                           text-align:center;
}
       button[type=submit]:disabled {
                           background-color: grey;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
       button[type=submit]:enabled {
                          background-color:#80ffd4;
                          color: White;
       }
       button {
            background-color: #1E90FF;
                           border-radius: 2px;
                           border:none;
                           color: white;
                           padding: 5px;
                           cursor: pointer;
       }
       button:hover {
           background-color:#d966ff;
           color:White;
       }
       
       
        </style>
    </head>
    <body>
        
        
        
    <ul>
      <li> <a href="homepage.html"> Home</a></li>
      <li> <a href="CV/CV_Page1.html"> Curriculum Vitae </a> </li>
      <li> <a href="Interests/Interests.html"> Interests </a> </li>
      <li> <a href="../EBusiness1.html"> E-Business </a></li>
      
    </ul>
        
        
        
        
        
        
        
        
        <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css"></head></PHP>
      

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