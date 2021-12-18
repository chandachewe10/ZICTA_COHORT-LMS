<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assignmentsupload;
use App\Models\handouts;
use App\Models\User;
use App\Models\announcements;
use App\Models\adminprofile;
use App\Models\finances;
use App\Models\videosuploading;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class LMS_admins extends Controller
{
    //Assignment uploads
    public function assignmentsupload(Request $request){
$validate=validator::make($request->all(),[
    'fileToUpload'=>['required','mimes:pdf'],
    'target'=>['required','string'],
    'due'=>['required','date'],
    'uploaded_by'=>['required','string']

]);
if($validate->fails()){
    return Redirect::back()->withInput()->withErrors($validate);
}
else{
    $assignmentInputs=new assignmentsupload;
    $assignmentInputs->file=$request->fileToUpload->storeAs('assignments',$request->fileToUpload->getClientOriginalName());
    $assignmentInputs->target=$request->input('target');
    $assignmentInputs->uploaded_by=$request->input('uploaded_by');
    $assignmentInputs->due=$request->input('due');
    $assignmentInputs->save();
    return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/upload'; alert('Assignment Uploaded Successfully')</script>";
}
    }


  //Announcements uploads
  public function announcementsupload(Request $request){
    $validate=validator::make($request->all(),[
        'target'=>['required','string'],
        'notice'=>['required','string'],
        'uploaded_by'=>['required','string']
    
    ]);
    if($validate->fails()){
        return Redirect::back()->withInput()->withErrors($validate);
    }
    else{
        $assignmentInputs=new announcements;
        $assignmentInputs->target=$request->input('target');
        $assignmentInputs->name=$request->input('uploaded_by');
        $assignmentInputs->notice=$request->input('notice');
        $assignmentInputs->save();
        return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/admin'; alert('Announcement Uploaded Successfully')</script>";
    }
        }







    //Handouts uploads
    public function handoutsupload(Request $request){
        $validate=validator::make($request->all(),[
            'fileToUpload'=>['required','mimes:pdf'],
            'target'=>['required','string'],
            'due'=>['required','date'],
            'uploaded_by'=>['required','string']
        
        ]);
        if($validate->fails()){
            return Redirect::back()->withInput()->withErrors($validate);
        }
        else{
            $handoutsInputs=new handouts;
            $handoutsInputs->file=$request->fileToUpload->storeAs('handouts',$request->fileToUpload->getClientOriginalName());
            $handoutsInputs->target=$request->input('target');
            $handoutsInputs->uploaded_by=$request->input('uploaded_by');
            $handoutsInputs->due=$request->input('due');
            $handoutsInputs->save();
            return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/handout'; alert('Handout Uploaded Successfully')</script>";
        }
            }


//Admin Register
public function adminregister(Request $request,$id){
    $validate=validator::make($request->all(),[
        'profilePicture'=>['required'],
        'comments'=>['required','string','max:2500']
    
    ]);
    if($validate->fails()){
        return Redirect::back()->withInput()->withErrors($validate);
    }
    else{
        $admin=User::find($id);
        $admin->picture=$request->profilePicture->storeAs('AdminProfilePictures',$request->profilePicture->getClientOriginalName());
        $admin->comments=$request->input('comments');
        $admin->save();
        return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/admin'; alert('Profile Updated Successfully')</script>";
        
    }
        }




  //viewadmin profile
 public function viewadminprofile(){   
     //adminprofile
    $viewadminprofile=User::where('admin',"=",1)->get();
    return view('viewadminprofile')->with('viewadminprofile', $viewadminprofile);
  
  } 



  //viewadmin for add
 public function viewadmin(){   
    $viewadmin=User::all();
    return view('viewusers')->with('viewadmin', $viewadmin);
  
  } 


  //Admin Add
  public function adminadd(Request $request,$id){
      $validate=validator::make($request->all(),[
       
          'assignadmin'=>['required'],
         
      
      ]);
      if($validate->fails()){
          return Redirect::back()->withInput()->withErrors($validate);
      }
      else{
          $admin=User::find($id);
          $admin->admin=$request->input('assignadmin');
          $admin->save();
          return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/superadmin'; alert('Confirmed Successfully')</script>";
          //return redirect('superadmin')->with('success',"Admin Added Successfully");
        
          
      }
          } 

//Videos Upload
          public function videosupload(Request $request){
            $validate=validator::make($request->all(),[
                'fileToUpload'=>['required'],
                'topic'=>['required','string'],
                'amount'=>['required','numeric'],
                'newamount'=>['required','numeric'],
                'uploaded_by'=>['required','string'],
                'picture'=>['required']
            
            
            ]);
            if($validate->fails()){
                return Redirect::back()->withInput()->withErrors($validate);
            }
            else{
                $handoutsInputs=new videosuploading;
                $handoutsInputs->fileToUpload=$request->fileToUpload->storeAs('videosupload',$request->fileToUpload->getClientOriginalName());
                $handoutsInputs->topic=$request->input('topic');
                $handoutsInputs->name=$request->input('uploaded_by');
                $handoutsInputs->amount=$request->input('amount');
                $handoutsInputs->newamount=$request->input('newamount');
                $handoutsInputs->picture=$request->picture->storeAs('videopictures',$request->picture->getClientOriginalName());
                $handoutsInputs->save();
                return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/videosupload'; alert('Your Video has been Uploaded Successfully')</script>";
            }
                }

//Retrieving Videos Uploaded
public function retrievevideos(){   
    $viewvideo=videosuploading::latest()->get();
    return view('buyvideo')->with('viewvideo', $viewvideo);
  
  } 



  //Payments Check Out
public function checkout($paidamount,$videoid){   
    $video=videosuploading::find($videoid);
    return view('checkout')->with('video',$video);
  
  } 



//financesregistration upload
public function financesregistration(Request $request){
    $validate=validator::make($request->all(),[
        'name'=>['required'],
        'amount'=>['required'],
        'email'=>['required','email'],
        'due'=>['required']  
    
    ]);

    if($validate->fails()){
        return Redirect::back()->withInput()->withErrors($validate);
    }
    else{
        $financesInputs=new finances;
        $financesInputs->name=$request->input('name');
        $financesInputs->amount=$request->input('amount');
        $financesInputs->email=$request->input('email');
        $financesInputs->due=$request->input('due');
        $financesInputs->save();
        return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/financesupload'; alert('Uploaded Successfully')</script>";
    }
        }



 //View Registered Students
public function viewregisteredstudents(){   
    $students=finances::all();
    return view('viewregisteredstudent')->with('students',$students );
  
  } 



//Remove Students From Finances Table
  public function remove($id){   
    $remove=finances::find($id);
    $remove->delete();
    return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/viewregisteredstudents'; alert('Student Deleted Successfully')</script>";
  
  } 





//Update Students Funds Query
public function update(Request $request,$id){  
    $student=finances::find($id);
    
    return view('updatefunds')->with('student',$student);

}




  //Update Students Funds
  public function updatetable(Request $request,$id){   
         $validate=validator::make($request->all(),[
            'name'=>['required'],
            'amount'=>['required'],
            'email'=>['required','email'],
            'due'=>['required']  
        
        ]);
    
        if($validate->fails()){
            return Redirect::back()->withInput()->withErrors($validate);
        }
        else{
            $update=finances::find($id);
            $update->name=$request->input('name');
            $update->amount=$request->input('amount');
            $update->email=$request->input('email');
            $update->due=$request->input('due');
            $update->save();
            return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/viewregisteredstudents'; alert('Updated Successfully')</script>";
        }
            }
    
  // https://us06web.zoom.us/w/89458626170?tk=F-F0ZHNoZzRA3qS6ROYns2kHmCmpXEOKDmDDbrlP-So.DQIAAAAU1CZOehZuWUhWV1Yta1NzNlZrYjY0cFRaa253AAAAAAAAAAAAAAAAAAAAAAAAAAAA&pwd=VUI2TUJTLzRPVXNZd0plQmtqYm5FUT09&uuid=WN_bUQC9TGLT92FtWoTTRltnA

   


}
