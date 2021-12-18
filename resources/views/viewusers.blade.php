<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>
        


    </x-slot>
<br><br>

<center>

<br>

 
 <br><br>    
 <div class="container">
     <div class="row">         
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="btn btn-primary" style="font-size:14px">ALL USERS</div>
    <br><br>
    <table class="table"  >
        <tr style="color:royalblue">
            <th>No.</th>
            <th>EMAIL</th>
            <th>NAME</th>
            <th>Assign As Admin?</th>
            <th>IMPLEMENT</th>
            <th>STATUS</th>
        </tr>
        @foreach($viewadmin as $viewadmins)
        <tr>
        <td>{{$viewadmins->id}}</td>
        <td>{{$viewadmins->email}}</td>
        <td>{{$viewadmins->name}}</td>
        <form method="POST" action="{{('adminadd/'.$viewadmins->id)}}" enctype="multipart/form-data">
            @csrf 
        <td>  <input id="yes"  type="radio" name="assignadmin" value=1 required /> Yes
                <br>
                <input id="False"  type="radio" name="assignadmin" value=0 required /> No</td>
        <td><input type="submit" value="Confirm" style="color:blue;font-weight:bold;"></td>
        <td>{{$viewadmins->admin}}</td>
    </form>
    @endforeach
</tr>

    </table> 

</div>
  </div>
  </div>              
</center>

  
</x-app-layout>