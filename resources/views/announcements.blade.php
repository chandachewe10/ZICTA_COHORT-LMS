<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>

<div class="container">
<div class="row">         
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

    <div class="btn btn-primary" style="font-size:16px; font-weight:bold">Announcements</div>
    <br><br>
    <table class="table" >
        <tr style="color:royalblue">
            <th>POSTED BY</th>
            <th>TIME</th>
            <th>NOTICE</th>
        </tr>
        @foreach($announcements as $announcement)
        <tr>
        <td>{{$announcement['name']}}</td>
        <td>{{$announcement['created_at']->diffForHumans()}}</td>
        <td>{{$announcement['notice']}}</td>
</tr>
@endforeach
    </table>   

    

</div>
</div>
</div>
                
</center>

  
</x-app-layout>