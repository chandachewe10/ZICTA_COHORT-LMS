<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>


<i class="fa fa-video camera" aria-hidden="true" style=" font-size:56px; color:royalblue; "></i> <br>
<span  style=" font-size:36px; color:royalblue;">Financial Status for {{ Auth::user()->name }}</span>
<br><br>

 
 <br><br>             
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:16px">Finances</div>
    <br><br>
    <table class="table" style="width:60%; font-size:16px" >
        <tr style="color:royalblue">
            <th>EMAIL</th>
            <th>NAME</th>
            <th>AMOUNT</th>
            <th>DUE</th>
        </tr>
        
        <tr>
        <td>{{$studentEmail->email}}</td>
        <td>{{$studentEmail->name}}</td>
        <td>{{$studentEmail->amount}}</td>
        <td>{{$studentEmail->due}}</td>
</tr>
    </table>   

    


</div>
                
</center>

  
</x-app-layout>