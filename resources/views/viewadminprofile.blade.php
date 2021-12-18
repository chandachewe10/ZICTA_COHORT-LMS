<x-app-layout>
    <x-slot name="header">
    <div id="warning" class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray"> 
</div>  
</x-slot>

<br><hr>
<center>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
@foreach ($viewadminprofile as $viewadminprofiles)

<div class="shadow p-3 mb-5 bg-white rounded w-50">
<img src="{{asset('app/'.$viewadminprofiles->picture)}}" style="width:140px; height:200px; ">
<hr>
<h2 style="font-size:24px">{{$viewadminprofiles['name']}}</h2>
<p style="font-size:16px">{{$viewadminprofiles['comments']}}</p>
</div>

@endforeach
</div>
</div>
</div>
</center>
</x-app-layout>
