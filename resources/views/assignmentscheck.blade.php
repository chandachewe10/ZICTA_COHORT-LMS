<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>


<i class="fa fa-video camera" aria-hidden="true" style=" font-size:56px; color:royalblue; "></i> <br>
<span  style=" font-size:56px; color:royalblue;">Zoom</span>
<br><br>

 
 <br><br>             
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:16px">Assignments</div>
    <br><br>
    <table class="table" style="width:60%; font-size:16px" >
        <tr style="color:royalblue">
            <th>POSTED BY</th>
            <th>ABOUT</th>
            <th>TARGET</th>
            <th>ASSIGNMENT</th>
            <th>DUE DATE</th>
        </tr>
        @foreach($checked as $checking)
        <tr>
        <td>{{$checking['uploaded_by']}}</td>
        <td>{{$checking['created_at']->diffForHumans()}}</td>
        <td>{{$checking['target']}}</td>
        <td><a href="{{asset('app/'.$checking['file'] )}}">Download</a></td>
        <td>{{$checking['due']}}</td>
</tr>
@endforeach
    </table>   

    


</div>
                
</center>

  
</x-app-layout>