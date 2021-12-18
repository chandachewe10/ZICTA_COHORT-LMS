<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>


<i class="fa fa-video camera" aria-hidden="true" style=" font-size:36px; color:royalblue; "></i> <br>
<span  style=" font-size:18px; font-weight:bold; color:royalblue;">Zoom</span>
         
 <div class="container">
     <div class="row">    
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
<p style="font-size:14px">
    Zoom cloud meetings on our website is designed to increase the user-friendliness of video conferencing even further. Other benefits of this system is that our clients who are based in environments where they cannot download zoom desktop due to internal IT restrictions or in very low bandwidth environments could be able to join the meetings without any interuptions.
</p>
<p style="font-size:14px">The web client lets end users join a meeting, receive screen share from Instructors, join the meeting through the phone, and leave the meeting.
</p>
<p style="font-size:14px">Supported Browsers: Google Chrome, Safari, and Mozilla Firefox with their latest version</p>
<br>
    <div class="btn btn-primary" style="font-size:16px">Links & Tutors</div>
    <br><br>
    <table class="table" style="width:60%; font-size:16px" >
        <tr style="color:royalblue">
            <th>No.</th>
            <th>COURSE</th>
            <th>LINK</th>
            <th>TUTOR</th>
        </tr>
        <tr>
        <td>1.</td>
        <td>Electronics</td>
        <td><a href="/zoom/index.html">Click Me</a></td>
        <td>Chanda Chewe</td>
</tr>
<tr>
        <td>2.</td>
        <td>Physics</td>
        <td><a href="/zoom/index.html">Click Me</a></td>
        <td>Peter Jr</td>
</tr>

<tr>
        <td>3.</td>
        <td>Algebra</td>
        <td><a href="/zoom/index.html">Click Me</a></td>
        <td>Misheck Botha</td>
</tr>
    </table>   

    


</div>
  </div>
  </div>              
</center>

  
</x-app-layout>