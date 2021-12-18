<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>
<span  style=" font-size:14px;font-weight:bold; color:royalblue;">REGISTERED STUDENTS</span>
<br><br>

 
 <br>
 <div class="container">
 <div class="row">                  
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:16px">Finances</div>
    <br><br>
    <table class="table" >
        <tr style="color:royalblue">
            <th>No.</th> 
            <th>EMAIL</th>
            <th>NAME</th>
            <th>AMOUNT</th>
            <th>DUE</th>
            <th>REMOVE</th>
            <th>UPDATE</th>
        </tr>
       @foreach($students as $student) 
        <tr>
        <td>{{$student->id}}</td>    
        <td>{{$student->email}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->amount}}</td>
        <td>{{$student->due}}</td>
        <td><a href='{{"remove/" .$student->id}}'>Remove</a></td>
        <td><a href='{{"update/" .$student->id}}'>Update</a></td>
</tr>
@endforeach
    </table>   
</div>
</div>
</div>                
</center>

  
</x-app-layout>