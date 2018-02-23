/* global $*/
function calcSub(){
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
    }
    else if (document.getElementById('gmail').checked) {
        argSubTotal = 400;
    }
    else if (document.getElementById('cloud 9').checked) {
        argSubTotal = 200;
    }
    else  { 
        argSubTotal = 300;
    }
    
    display(argSubTotal);
    }
    
function display(parm1){
    
   document.getElementById("subtotal").value= parm1 ;
   document.getElementById("total").value= parm1 ;
   
   enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
     $('#btnProceed').prop('disabled', true);
}