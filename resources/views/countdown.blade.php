<x-app-layout>
    <x-slot name="header">
        <div id="warning" class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
           
        <span id="status">Remaining Time : </span> <div id="timer" class="btn btn-primary" style="font-weight:bold;font-size:16px"></div>
        <hr><div id="danger" class="btn btn-danger" style="font-weight:bold;font-size:16px;display:none; width:100px"></div>
        
</div>
</x-slot>  





<script>
    var count =20;
var counter = setInterval(timer, 1000); //1000 will  run it every 1 second

function timer() {
    count = count - 1;
    if (count <= 15) {
        
        document.getElementById('timer').style.display="none";
        document.getElementById('danger').style.display="block";
       
       
    }



    if (count == -1) {
        alert('Time Up');
        clearInterval(counter);
        return;
    }

    var seconds = count % 60;
    var minutes = Math.floor(count / 60);
    var hours = Math.floor(minutes / 60);
    minutes %= 60;
    hours %= 60;

    document.getElementById("timer").innerHTML = hours+ ":" + minutes + ":" + seconds; // show this on page load
    document.getElementById("danger").innerHTML = hours+ ":" + minutes + ":" + seconds; // show this when time is almost up
}
</script>




</x-app-layout>








