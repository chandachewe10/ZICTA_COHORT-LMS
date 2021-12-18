<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Hi {{ Auth::user()->name }}, Welcome to the Admin Dashboard. 
            
</div>
        

<div style="position:absolute;right:10px; top:7%">

                           


                            

                            
                                  
</div>
    </x-slot>
   
     


              {{--Project code--}} 
              <!DOCTYPE html>
<html>

<head>

    <title>PAREXCELLENCE::ADMIN HOME </title>
    <meta charset="utf-8" />
    <meta name="developer" content="Chanda Chewe" />
    <meta name="description" content="" />
    <meta name="revised" content="06/06/2021" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    
    <!--font awesome online-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    
    
   
     

    
    
    <!--local jquery-->
    <script src="{{asset('css/jquery-3.2.1.min.js')}}"></script>
     <!--local css-->
    <link rel="stylesheet" href="{{asset('css/responsives.css')}}">
    <!--local aos-->
    <link href="css/aos.css?ver=1.2.0" rel="stylesheet">
    <!-- bootstrap font awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/solid.min.css">
    <!-- Slide show css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slideshow.css')}}">
    <!--js slideshow-->
    <script src="{{asset('css/js/jsslide.js')}}"></script>





</head>


<!--Temporal inline style-->

<style>
    #wrapper {
        margin-top: 10px;
    }

    body {
        font-family:'cursive';
        font-size: 16px;
        background-color: #f1f1f1;
    }

    .shadow {
        cursor: pointer;
    }
    
#wrapper{
    height:100%;
    overflow:hidden;
}

.closebtn{
    display: none;
}
    
@media screen and (max-width:767px) {
    #sidebar{
  
  width: 0;
  position:fixed;
  z-index: 1;
  top: 0;
  left: -32px;
  height:101%;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  display: block;
}


    }



    
</style>

<body>
    <center>
        <div  id="wrapper">
        <div class="container">
        <div class="row" ng-app="myApp" ng-controller="myCtrl"  >

            <div id="sidebar" class="col-lg-3 col-md-3 col-xs-12 col-sm-12" >

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <div class="card" style="background-color: royalblue; margin-top: -10px; padding-top: 15px; ">

                    <h2 style="color:white">School Management System</h2>
                    <br>
                    <hr style="color: white;">
                    <i class="fas fa-tachometer-alt" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i>
                    <span style="color:#f1f1f1"> Dashboard</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue;">
                    <i class="fa fa-video camera" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        ><a style="color:white" href="zoomredirect">Zoom Classes</a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        > <a style="color:white" href="{{route('financesupload')}}"> Add Students </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-bullhorn" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> <a style="color:white" href="{{route('makeannouncements')}}">Make Announcements </a></span>
                    <br>
                </div>

                <div class="card" style="background-color:royalblue ">
                    <i class="fa fa-fas fa-money-bill-wave" aria-hidden="true"
                        style=" font-size:26px; color:#f1f1f1"></i> <span ><a style="color:white" href="{{asset('app/FeesStructure/Creative Cv.pdf')}}"> Fees Structure </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        ><a style="color:white" href="{{asset('app/TimeTable/Creative Cv.pdf')}}"> TimeTable </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-graduation-cap" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"><a style="color:white" href='{{"viewadmin"}}'>Add Admin</a></span>
                    <br>
                </div>


                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-copy" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        > <a  style="color:white" href='{{"viewregisteredstudents"}}'> View Registered Students </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-pen" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        ><a style="color:white" href="{{route('conversions')}}"> Conversions </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-laptop" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                      ><a style="color:white" href="{{route('retrievevideos')}}"> Streaming </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-laptop" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        ><a style="color:white" href="{{route('upload')}}">Assignments Upload </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-copy" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                       ><a style="color:white" href="{{route('handout')}}">Handouts Upload </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-user-plus" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        > <a style="color:white" href='{{route("videosupload")}}'> Videos Upload </a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-user" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        ><a style="color:white" href="{{asset('app/CoursesOnOffer/Creative Cv.pdf')}}">Courses on offer</a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-info" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        ><a style="color:white" href="{{route('viewadminprofile')}}">Tutors</a></span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-medal" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                       ><a style="color:white"  href="{{route('viewstudentsupload')}}">View Uploaded Qsn's</a></span>
                    <br>
                </div>

            </div>


            <script>

                function openNav() {
                    
                  document.getElementById("sidebar").style.width = "250px";
                 document.getElementById("leftbar").style.marginLeft= "200px";
                }
                
                function closeNav() {
                  document.getElementById("sidebar").style.width = "0";
                  document.getElementById("leftbar").style.marginLeft= "0";
                }
                
                </script>


            <div id="leftbar" class="col-lg-9 col-sm-12 col-md-9 col-xs-12 ">
                <h2 style="font-weight:bold">PAREXCELLENCE</h2>
                <br>
               

                    <hr>

                    <!--First row-->
                    <br>
                    
<div class="container">
                    <div class="row">
                        <div 
                            class="shadow p-3  mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">

                            <i class="fa fa-video camera" aria-hidden="true"
                                style=" font-size:26px; color:royalblue; "></i><hr> Classes
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey;"></i>
                           <a href="zoomredirect"> Start Classes on Zoom</a>

                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">

                            <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:orange"></i><hr> <span>
                              Add Registered Students</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('financesupload')}}"> Add </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">

                            <i class="fa fa-bullhorn" aria-hidden="true" style=" font-size:26px; color:green"></i><hr>
                            <span> Announcements</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('makeannouncements')}}"> Upload </a>
                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:rebeccapurple"></i><hr>
                            <span> Fees Structure</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{asset('app/FeesStructure/FEES _SCHEDULE_PEARCHEC.pdf')}}"> Download </a>
                        </div>


                    </div>
</div>
                    <!--Second row-->
                    <div class="container">
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fa fa-clipboard" aria-hidden="true" style=" font-size:26px; color:royalblue"></i><hr>
                            <span> Timetable</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('timetableNotice')}}"> Download </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fa fa-plus" aria-hidden="true"
                                style=" font-size:26px; color:orange"></i><hr> <span> Add Admin</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href='{{"viewadmin"}}'> Add</a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fa fa-graduation-cap" aria-hidden="true" style=" font-size:26px; color:green"></i><hr>
                            <span> View Registered Students</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href='{{"viewregisteredstudents"}}'> View </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-copy" aria-hidden="true" style=" font-size:26px; color:rebeccapurple"></i><hr>
                            <span> Conversion Units</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('conversions')}}"> View </a>
                            
                        </div>
                    </div>
                    </div>
                    <!--Third row-->
                    <div class="container">
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-laptop" aria-hidden="true" style=" font-size:26px; color:royalblue"></i><hr>
                            <span> Stream</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('retrievevideos')}}"> View Uploaded Items </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-paste" aria-hidden="true" style=" font-size:26px; color:orange"></i><hr><span>
                             Assignments Upload</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                           <a href="{{route('upload')}}"> Upload </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-pen" aria-hidden="true" style=" font-size:26px; color:green"></i><hr><span>
                               Handouts Upload </span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('handout')}}"> Upload </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-file" aria-hidden="true" style=" font-size:26px; color:rebeccapurple"></i><hr>
                            <span> Videos & Solutions Upload</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href='{{route("videosupload")}}'> Upload </a>
                        </div>
                    </div>
                    </div>
                    <!--fourth row-->
                   
                    <hr>
                    <div class="container">
                    <div class="row">
                    <div class="card col-md-12 col-xs-12">               
<h2>About {{ Auth::user()->name }} </h2>

<hr>
<table class="table" style="padding:5px;">
    <tr style="color:royalblue; padding:0px 0px 0px 5px" >
        <th>Email</th>
        <th>Name</th>
        <th>Add Picture</th>
       
</tr>
            <tr>
            <td>{{ Auth::user()->email}}</td>
        <td>{{ Auth::user()->name}}</td>
        <td><a href='adminprofile'>Finish Profile</a></td>
        
</tr>


</table>
<br><br>
<hr>
<small style="font-size:11px">*Hello {{ Auth::user()->name }} make sure you finish your profile update so that your students can get to know more a little bit about yourself.</small>
<small style="font-size:11px">Click on 'finish Profile' to update your profile picture.</small>    
   <br><br>            

                   

</div>
</div>
            </div>            <!--Fith row -->
                    <hr><br>
                    <div class="container">
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-user" aria-hidden="true" style=" font-size:26px; color:royalblue"></i><hr>
                            <span> Courses on offer</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{asset('app/CoursesOnOffer/COURSES _SCHEDULE_PEARCHEC.pdf')}}"> Download </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-tasks" aria-hidden="true" style=" font-size:26px; color:orange"></i><hr><span>
                                Tutors</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('viewadminprofile')}}"> view </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fa fa-copy" aria-hidden="true" style=" font-size:26px; color:green"></i><hr><span>
                                View Uploaded Qsn</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('viewstudentsupload')}}">view</a>
                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-user-plus" aria-hidden="true"
                                style=" font-size:26px; color:greenyellow"></i><hr><span>Programmable Formulas </span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('equations')}}">Solve Equations</a>    
                        </div>
                    </div>
                    </div>
                    <!--Last row-->
                    <div class="container">
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-info" aria-hidden="true" style=" font-size:26px; color:royalblue"></i><hr>
                            <span>About us</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="#">info</a>  
                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <i class="fas fa-medal" aria-hidden="true" style=" font-size:26px; color:greenyellow"></i><hr>
                            <span>Add Profile Picture</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                             <a href="adminprofile">Finish profile</a>  
                        </div>

                        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
                        </div>

                        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
                        </div>
                    </div>
            </div>
            </div>

</div>

        </div>
        <!--Author and copyrights -->
        <br>
        <div class="row" style="background-color:black;">
            <div class="col-sm-12" style="color:white">
                <p class="copyright_text">© 2021 All Rights Reserved. <a href="https://www.pearchec.com" style="color:white">
                        Parexcellencetutorials.com </a><br> Designed by: <a href="https://www.chandachewe.com"
                        >Chanda Chewe</a> </p>
            </div>
        </div>

</div>
    </center>

</body>
</html>            </div>
       
</x-app-layout>
