<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Signed in as {{ Auth::user()->name }}
            
</div>


<center>
<div class="container">
<div class="row">
@foreach($viewvideo as $viewvideos)
      <div class="timeline-card timeline-card-primary shadow p-3 mb-5 bg-white rounded col-md-3 col-sm-4 col-xs-12">
      <img src="{{asset('app/'.$viewvideos->picture)}}" class="imagen__curso">
          <hr>
            <h4>{{$viewvideos->topic}}</h4>
            <img src='{{asset("img/estrellas.png")}}'>
            <p style="font-size:14px">Posted By {{$viewvideos->name}}</p>
         <!--   <p ><a id="url" href="{{asset('app/'.$viewvideos->fileToUpload)}}">Download   </a></p> -->
            <p style="font-size:16px"><del class="precio">ZMW {{$viewvideos->newamount}} </del> <span class="discount">{{$viewvideos->amount}}</span>  </p>
            <a style="font-size:16px" href='{{"checkout/" .$viewvideos->amount}}/{{$viewvideos->id}}' class="agregar-carrito" data-id="1"><i class="fa fa-cart-plus"></i>&nbsp;  Buy It</a>
          </div>

          @endforeach

         
  </div>        
</div>
</center>

<script>
   // {{asset('app/'.$viewvideos->fileToUpload)}}
  
</script>
      </x-app-layout>