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

    <title>PEARCHEC::HOME </title>
    <meta charset="utf-8" />
    <meta name="developer" content="Chanda Chewe" />
    <meta name="description" content="" />
    <meta name="revised" content="06/06/2021" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--font awesome online-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    
    
    <!--local bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--local jquery-->
    <script src="{{asset('css/jquery-3.2.1.min.js')}}"></script>
    <!--local angularjs-->
    <script src="{{asset('css/angular.min.js')}}"></script>
    <!--local angularjs-->
    <script src="{{asset('css/angularcode.js')}}"></script>
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
    
</style>

<body>
    <center>
        <div class="row" id="wrapper" ng-app="myApp" ng-controller="myCtrl"  >

            <div class="col-sm-3 col-md-3" style="padding-left:25px">

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
                        style="color:#f1f1f1"> Classes</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Tests & Exams</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-bullhorn" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Announcements</span>
                    <br>
                </div>

                <div class="card" style="background-color:royalblue ">
                    <i class="fa fa-fas fa-money-bill-wave" aria-hidden="true"
                        style=" font-size:26px; color:#f1f1f1"></i> <span style="color:#f1f1f1"> Fees Strucure</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Time table</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-graduation-cap" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Results</span>
                    <br>
                </div>


                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-copy" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Exam papers</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-pen" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Handouts</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fa fa-paste" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Assignments</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-laptop" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Stream</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-copy" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> School Library</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-user-plus" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Registration</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-user" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1">Courses on offer </span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-info" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> About our School</span>
                    <br>
                </div>

                <div class="card" style="background-color: royalblue">
                    <i class="fas fa-medal" aria-hidden="true" style=" font-size:26px; color:#f1f1f1"></i> <span
                        style="color:#f1f1f1"> Achievements</span>
                    <br>
                </div>

            </div>

            <div class="col-sm-8 col-md-8 col-xs-12 col-sm-offset-1 col-md-offset-1 col-sm-pull-1 col-md-pull-1 ">
                <h2>School Management System</h2>
                <br>
               

                    <hr>

                    <!--First row-->
                    <br>

                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12 col-sm-offset-1 col-md-offset-1 ">

                            <i class="fa fa-video camera" aria-hidden="true"
                                style=" font-size:26px; color:royalblue; "></i> Classes
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey;"></i>
                           <a href="zoomredirect"> Start Classes on Zoom</a>

                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12 col-sm-offset-1 col-md-offset-1">

                            <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:orange"></i> <span>
                              Add Registered Students</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('financesupload')}}"> Upload </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12 col-sm-offset-1 col-md-offset-1 ">

                            <i class="fa fa-bullhorn" aria-hidden="true" style=" font-size:26px; color:green"></i>
                            <span> Announcements</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('makeannouncements')}}"> Upload </a>
                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-xs-12">
                            <i class="fa fa-book" aria-hidden="true" style=" font-size:26px; color:rebeccapurple"></i>
                            <span> Fees Structure</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{asset('app/FeesStructure/Creative Cv.pdf')}}"> Download </a>
                        </div>


                    </div>

                    <!--Second row-->
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fa fa-clipboard" aria-hidden="true" style=" font-size:26px; color:royalblue"></i>
                            <span> Timetable</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{asset('app/TimeTable/Creative Cv.pdf')}}"> Download </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fa fa-plus" aria-hidden="true"
                                style=" font-size:26px; color:orange"></i> <span> Add Admin</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href='{{"viewadmin"}}'>   Add</a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fa fa-graduation-cap" aria-hidden="true" style=" font-size:26px; color:green"></i>
                            <span> View Registered Students</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href='{{"viewregisteredstudents"}}'> View </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-copy" aria-hidden="true" style=" font-size:26px; color:rebeccapurple"></i>
                            <span> Conversion Units</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('conversions')}}"> View </a>
                            
                        </div>
                    </div>
                    <!--Third row-->
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-laptop" aria-hidden="true" style=" font-size:26px; color:royalblue"></i>
                            <span> Stream</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('retrievevideos')}}"> View Uploaded Items </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-paste" aria-hidden="true" style=" font-size:26px; color:orange"></i> <span>
                             Assignments Upload</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                           <a href="{{route('upload')}}"> Upload </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-pen" aria-hidden="true" style=" font-size:26px; color:green"></i> <span>
                               Handouts Upload </span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('handout')}}"> Upload </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-file" aria-hidden="true" style=" font-size:26px; color:rebeccapurple"></i>
                            <span> Videos & Solutions Upload</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href='{{route("videosupload")}}'> Upload </a>
                        </div>
                    </div>
                    <!--fourth row-->
                    <!--Slideshow Introductory-->
                    <hr>
                    <div class="card" style="padding-left:50px">               
<h2 >Recent Fees Collected From {{ Auth::user()->name }} </h2>
<p>Fees collection by date </p>
<hr>
<table class="table" style="padding:5px;">
    <tr style="color:royalblue; padding:0px 0px 0px 5px" >
        <th>Email</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Due </th>
</tr>
            <tr>
            <td>{{ Auth::user()->email}}</td>
        <td>{{ Auth::user()->name}}</td>
        <td><a href='{{"finances/" .Auth::user()->email}}'>Click Me </a></td>
        <td><a href='{{"finances/" .Auth::user()->email}}'>Click Me </a></td>
</tr>


</table>
<br><br>
<hr>
<small style="font-size:11px">*Hello {{ Auth::user()->name }} If there are no fees shown then you are no longer a registered student of us and you will be limited to the services we offer to our registred students.</small>
<small style="font-size:11px"> You need to pay the full registration fees to enjoy all our services offered here. </small>    
   <br><br>            

                   

</div>
                    <!--Fith row -->
                    <hr><br>
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-user" aria-hidden="true" style=" font-size:26px; color:royalblue"></i>
                            <span> Courses on offer</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{asset('app/CoursesOnOffer/Creative Cv.pdf')}}"> Download </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-tasks" aria-hidden="true" style=" font-size:26px; color:orange"></i> <span>
                                Tutors</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('viewadminprofile')}}"> view </a>
                        </div>
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fa fa-copy" aria-hidden="true" style=" font-size:26px; color:green"></i> <span>
                                View Uploaded Qsn</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('viewstudentsupload')}}">view</a>
                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-user-plus" aria-hidden="true"
                                style=" font-size:26px; color:greenyellow"></i> <span>Programmable Formulas </span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="{{route('equations')}}">Solve Equations</a>    
                        </div>
                    </div>
                    <!--Last row-->
                    <div class="row">
                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-info" aria-hidden="true" style=" font-size:26px; color:royalblue"></i>
                            <span>About us</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                            <a href="#">info</a>  
                        </div>

                        <div
                            class="shadow p-3 mb-5 bg-white rounded col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                            <i class="fas fa-medal" aria-hidden="true" style=" font-size:26px; color:greenyellow"></i>
                            <span>Achievements</span>
                            <hr>
                            <i class="fa fa-arrow-right" aria-hidden="true" style=" font-size:16px; color:grey"></i>
                             <a href="#">View</a>  
                        </div>

                        <div class="col-sm-2 col-md-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12  col-sm-offset-1 col-md-offset-1">
                        </div>
                    </div>
            </div>



        </div>
        <!--Author and copyrights -->
        <br>
        <div class="row" style="background-color: gray;">
            <div class="col-sm-12" style="color:white">
                <p class="copyright_text">© 2021 All Rights Reserved. <a href="https://html.design" style="color:black">
                        school name.com </a><br> Designed by:<a href="https://www.chewetech.com"
                        style="color:black">Chanda Chewe</a> </p>
            </div>
        </div>


    </center>

    <script src="asset('css/js/jsslide.js')"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>            </div>
       
</x-app-layout>
