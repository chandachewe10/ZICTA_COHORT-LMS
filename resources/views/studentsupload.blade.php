<!DOCTYPE html>
<head>
    <title>Students Questions Upload</title>
    <meta charset="utf-8" />
    <meta name="developer" content="chanda-chewe" />
    <meta name="description" content="Pupils-upload-questions-site" />
    <meta name="revised" content="12/05/2020" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
</head>

<body>
    <center>
        
        
  <form action="{{('studentsqsn/'.Auth::user()->email)}}" enctype="multipart/form-data" method="POST">
  @csrf
   <!-- Validation Errors -->
   <div style="color:red;font-weight:bold;font-family:san-serif">
   <x-auth-validation-errors class="mb-4" :errors="$errors" />
</div>
    <h3 style="color:white">Please upload your Question(s). Only upload question(s) in PDF Format. The questions uploaded should be in harmony with the courses offered here. We will only accept questions from students who are registered with us by paying the full registration fees. </h3>
        <input type="file" name="fileToUpload" id="name" required>
        <h3 style="color:white">TARGET</h3>
        <input type="text" name="target" id="name" placeholder="To which tutor?" required>
        <h3 style="color:white">YOUR EMAIL/WHATSAPP LINE</h3>
        <input type="text" name="whatsapp"  id="name" placeholder="Email or WhatsApp" required></br>
        <input type="submit" value="Upload" id="upload">
        <br><br>
        
        </form>
        <!--notes-->
        <p style="color:royablueblue"> The response will be given through the email or whatsApp line you provided above within a week, ensure all credentials are valid.</p>
        
        
    </center>
    <style>
         body {
        font-family: Arial, Helvetica, sans-serif;
       font-weight:bold;
       font-size:small;
       background-color:#f1f1f1;
       margin-top:60px;
           
    }
        #name{
            width:90%;
                        padding:12px 20px;
                        margin:8px 0;
                        display:inline-block;
                        border:1px solid #ccc;
                        box-sizing:border-box;  
        }
#upload{
    background-color:#4CAF50;
                        color:white;
                        padding:14px 20px;
                        margin:8px 0;
                        border:none;
                        width:70%;
                        cursor:pointer;
}
form{
    border: 3px solid #f1f1f1;
                margin-top: 10px;
                width: 30%;
                background-color:royalblue ;  
                margin-bottom:20px;          
                        
}
@media screen and (max-width:1025px) {
            form{
                        border:3px solid #f1f1f1;
                        margin-top:10px;
                        width:90%;
            }
        }

        </style>
        
</body>
</html>