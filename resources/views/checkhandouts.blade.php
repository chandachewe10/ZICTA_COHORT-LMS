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
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:14px;font-weight:bold">Handouts</div>
    <br><br>
    <table class="table" style="width:60%; font-size:16px" >
        <tr style="color:royalblue">
            <th>POSTED BY</th>
            <th>ABOUT</th>
            <th>TARGET</th>
            <th>HANDOUT</th>
            
        </tr>
        @foreach($checkhandouts as $checkhandout)
        <tr>
        <td>{{$checkhandout['uploaded_by']}}</td>
        <td>{{$checkhandout['created_at']->diffForHumans()}}</td>
        <td>{{$checkhandout['target']}}</td>
        <td><a href="{{asset('app/'.$checkhandout['file'] )}}">Download</a></td>
        
</tr>
@endforeach
    </table>   

    
</div>
</div>
</div>
                
</center>

  
</x-app-layout>