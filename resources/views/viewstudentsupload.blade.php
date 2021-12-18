<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>

<center>

   <br>
   
<div class="container">
<div class="row">          
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:16px; font-weight:bold;">Questions Uploaded By Students</div>
    <br><br>
    <table class="table" style="width:60%; font-size:16px" >
        <tr style="color:royalblue">
            <th>STUDENT EMAIL/WHATSAPP</th>
            <th>POSTED ON</th>
            <th>TARGET</th>
            <th>QESTION</th>
        </tr>
        @foreach($studentupload as $studentuploads)
        <tr>
        <td>{{$studentuploads['email']}}</td>
        <td>{{$studentuploads['created_at']->diffForHumans()}}</td>
        <td>{{$studentuploads['target']}}</td>
        <td><a href="{{asset('app/'.$studentuploads['file'] )}}">Download</a></td>
</tr>
@endforeach
    </table>   

    


</div>
</div>
</div>
                
</center>

  
</x-app-layout>