<!DOCTYPE html>
<html>
    <head>
        <title>Select Product
    </title>
    
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        
    <h4>Select a product</h4>
    
    <br/> 
     
     <form method="POST" action="Ebus2.php"
    
     <label for="salesforce">
      
        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
       Sales Force @$100
     </label>
    
     <label for="aws">
        <input type="radio" id="aws" name="prduct" onClick="disablebtnProceed()"/>
        AWS @ $300
     </label>
    
     </br>
     </br>
    
     <label for="subtotal">
        Sub Total
        <input type="text" id="subtotal" value="0.00" readonly/>
     </label>
        
     </br>
        
     <label for="total">
        Sub Total
        <input type="text" id="subtotal" value="0.00" readonly/>
     </label>
     
     <br/>
     
       <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
     </form>
   
      </br>
      <button onClick="calcSub()">Calculate Cost</button>
      <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>