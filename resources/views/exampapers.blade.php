<x-app-layout>
    <x-slot name="header">
        <div id="warning" class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
           
</x-slot>

<br><hr>
<center>

<div class="timeline-card w-50 timeline-card-primary shadow p-3 mb-5 bg-white rounded " >
    <p style="font-size:16px; font-weight:bold"><a href="#">GRADE 12 E.C.Z</a></p>
    <hr>  
    <div  class="btn btn-success" style="font-size:14px;color:white"><a style="font-size:14px;color:white;" href="{{route('g12')}}">DOWNLOAD</a></div>
</div>

<br>

<div class="timeline-card w-50 timeline-card-primary shadow w-25 p-3 mb-5 bg-white rounded" >
    <p style="font-size:16px; font-weight:bold"><a href="#">GCE E.C.Z</a></p>
     <hr>
    <div  class="btn btn-success" style="font-size:14px;color:white"><a style="font-size:14px;color:white;" href="{{route('gce')}}">DOWNLOAD</a></div>
</div>
<br>


<div class="timeline-card w-50 timeline-card-primary shadow p-3 mb-5 bg-white rounded" >
    <p style="font-size:16px; font-weight:bold"><a href="#">CAMBRIDGE</a></p>
    <hr>  
    <div  class="btn btn-success" style="font-size:14px;color:white"><a style="font-size:14px;color:white;" href="{{route('cambridge')}}">DOWNLOAD</a></div>
</div>



<div class="timeline-card w-50 timeline-card-primary shadow p-3 mb-5 bg-white rounded " >
    <p style="font-size:16px; font-weight:bold"><a href="#">A LEVELS </a></p>
    <hr>  
    <div  class="btn btn-success" style="font-size:14px;color:white"><a style="font-size:14px;color:white;" href="#">DOWNLOAD</a></div>
</div>

</center>
</x-app-layout>
