<x-app-layout>
    <x-slot name="header">
        <div id="warning" class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
           
</x-slot>

<br><hr>
<center>

<div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded sm-12 col-md-12 col-xs-12" >

<p style="font-size:14px">Hi {{ Auth::user()->name }} Please Note that once you begin this online examinations there is no going back.</p>
    <p style="font-size:14px">Are you sure you want to continue? </p>
    <hr>  
    <div  class="btn btn-success" style="font-size:14px;color:white"><a  style="color:white" href="{{route('secondattempt')}}">Am sure</a></div>
</center>
</div>

</x-app-layout>
