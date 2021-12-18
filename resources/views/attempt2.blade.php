<x-app-layout>
    <x-slot name="header">
        <div id="warning" class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
           
</x-slot>

<br><hr>
<center>

<div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded sm-12 col-md-12 col-xs-12" >

<p style="font-size:14px">Hi {{ Auth::user()->name }} Your online examination will begin once you click the start button below. Please ensure you have the following in place before you begin: </p>
<ul>
    <li>Stable, reliable, and strong Internet connetion.</li>
    <li> Continous power supply to your laptop or desktop or strong battery in your device. </li>
    <li> Be in a place where you should not be disturbed for atleast one hour. </li>
    </ul>

    <p> Please note that should you fail to submit your paper on time, your paper will be submitted automatically once the time is up!</p>
    <p style="font-size:14px">Do you still want to do this? </p>
    <hr>  
    <div  class="btn btn-success" style="font-size:14px"><a style="color:white" href="{{route('examinations')}}">Begin</a></div>
</center>
</div>

</x-app-layout>
