<!DOCTYPE html>
<html>
    <head>
        <title>
           
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <center>
        <body>

<style>
    body{
        margin-top: 100px;
    color: #222222;
    
    
    background-color: #56385a;
  font-family: 'Muli', sans-serif, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
}


.units{
padding: 10px;
  font-size: 16px;
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 3px;
  margin-bottom: 10px;
  transition: background .3s;
  color: #e6e6e6;



}


</style>

<div class="btn btn-success" style="font-size: 14px;">MAKE PAYMENTS</div>
<hr> 

            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
                <input type="hidden" name="public_key" value="FLWPUBK-a6313612dfeeadd3f10199cba8575e66-X" />
                <input type="email" name="customer[email]" placeholder="Enter Email" class="units" required/>
                <input type="number" name="customer[phone_number]" placeholder="Enter Phone Number" class="units" required/>
                <input type="text" name="customer[name]" placeholder="Enter Your Name" class="units" required/>
                <input type="hidden" name="tx_ref" value="bitethtx-019203" />
                <input type="text" name="amount" value='{{$video->amount}}'   class="units" readonly/> <span style="color:white; font-size:14px"> ZMW </span><br><br>
                <input type="hidden" name="currency" value="ZMW" />
                <input type="hidden" name="meta[token]" value="12345651VnV?L54" />
                <input type="hidden" name="redirect_url" value='{{"http://localhost/Trial/Zicta_Cohort/public/app/".$video->fileToUpload}}' />
                <hr> 
                <button class="btn btn-success" type="submit" style="font-size: 14px;">CHECKOUT</button> 
              </form>
              
              <script>

var current_path = window.location.pathname;
  var path_arr = current_path.split("/");
  var subtotal =path_arr[5];
  document.getElementById('amount').value=subtotal;
  
  //Retrieving A URL after the ?

              //const QueryString = window.location.search.substr(1);
                
                
               // var x=document.getElementById('amount').value=QueryString;
               
                
                
                //const urlParams = new URLSearchParams(QueryString);
                //urlParams.has(‘q’) //returns true 
                //urlParams.get(‘country’) //returns US
                //urlParams.append('status', 'true')) //returns ?q=losAngeles&country=US&status=true 
                
                </script>



        </body>
    </center>
   
</html>

         