<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>


<i class="fa fa-video camera" aria-hidden="true" style=" font-size:56px; color:royalblue; "></i> <br>
<span  style=" font-size:36px; color:royalblue;">{{ Auth::user()->name }}'s Results</span>
<br><br>

 
 <br><br>             
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:16px">PRINT OUT</div>
    <br><br>
    <hr>

    
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3">
        <h4 style="font-weight:bold;color:royalblue">COURSES</h4> 
       </div> 
       <div class="col-md-3 col-sm-3 col-xs-3">
        <h4 style="font-weight:bold;color:royalblue">MARKS</h4> 
       </div> 

       <div class="col-md-3 col-sm-3 col-xs-3">
        <h4 style="font-weight:bold;color:royalblue">COMMENTS</h4> 
       </div> 

       <div class="col-md-3 col-sm-3 col-xs-3">
        <h5></h5> 
       </div> 


</div>

<hr>
    <div class="row" >
    <div class="col-md-3 col-sm-3 col-xs-3">
     <p>Mathematics</p> 
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
        <p>{{$studentResults->mathematics}}</p> 
       </div>
       <div class="col-md-3 col-sm-3 col-xs-3">
        <p>comments</p> 
        </div>
       <div class="col-md-6 col-sm-6 col-xs-6">
        <p></p> 
       </div>
</div>

<hr>

<div class="row" >
    <div class="col-md-3 col-sm-3 col-xs-3">
     <p>Physics</p> 
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
        <p>{{$studentResults->physics}}</p> 
       </div>
       <div class="col-md-3 col-sm-3 col-xs-3">
        <p>comments</p> 
        </div>
       <div class="col-md-6 col-sm-6 col-xs-6">
        <p></p> 
       </div>
</div>

<hr>

<div class="row" >
    <div class="col-md-3 col-sm-3 col-xs-3">
     <p>Chemistry</p> 
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
        <p>{{$studentResults->chemistry}}</p> 
       </div>
       <div class="col-md-3 col-sm-3 col-xs-3">
        <p>comments</p> 
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <p></p> 
       </div>
      
</div>

<hr>

<div class="row" >
    <div class="col-md-3 col-sm-3 col-xs-3">
     <p>Biology</p> 
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3">
        <p>{{$studentResults->biology}}</p> 
       </div>
       <div class="col-md-3 col-sm-3 col-xs-3">
        <p>comments</p> 
        </div>
       <div class="col-md-6 col-sm-6 col-xs-6">
        <p></p> 
       </div>
</div>

<hr>

</div>
                
</center>

  
</x-app-layout>