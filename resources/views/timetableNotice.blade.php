<x-app-layout>
    <x-slot name="header">
        <div id="warning" class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
           
</x-slot>

<br><hr>
<center>

<div class="timeline-card w-50 timeline-card-primary shadow p-3 mb-5 bg-white rounded " >
    <p style="font-size:16px; font-weight:bold"><a href="#"></p>
    <hr>  
    <p>Hello {{ Auth::user()->name }} hope you are good, the timetable will be posted shortly, you can check the announcements section or the comment section to see when your next scheduled class will begin. </p>
</div>
<br>
</center>
</x-app-layout>
