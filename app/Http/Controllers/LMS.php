<?php

namespace App\Http\Controllers;
use App\Models\announcements;
use App\Models\finances;
use App\Models\examinationresults;
use App\Models\assignmentsupload;
use App\Models\handouts;
use App\Models\studentsqsn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class LMS extends Controller
{

  // announcements method
   public function announcements(){
   
   $announcements=announcements::all();
   return view('announcements')->with('announcements', $announcements);

} 
//Finances method
public function finances($id){
    

    if ($studentEmail=finances::where ('email',"=",$id)->first()){
        return view('finances')->with('studentEmail',$studentEmail);
      }
      else{
          return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/dashboard'; alert('Whoooops, you have not paid. Only subscribed students can view their financial status')</script>";
      }   
    
}


//Results method deplicated // To be Implemented in the next version of this LMS
  public function examinationresults($id){

    if ($studentResults=examinationresults::where ('email',"=",$id)->first()){
        return view('viewresults')->with('studentResults',$studentResults);
      }
      else{
          return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/dashboard';  alert('Either your results are not yet published or you have not sat for any examinations recently')</script>";

      }
    }


     // viewassignments method
   public function checkassignments(){
   
    $checked=assignmentsupload::all();
    return view('assignmentscheck')->with('checked', $checked);
 
 } 

 // viewhandouts method
 public function checkhandouts(){
   
  $checkhandouts=handouts::all();
  return view('checkhandouts')->with('checkhandouts', $checkhandouts);

} 


// viewuploaded Questions By Students method
public function viewstudentsupload(){
   
  $studentupload=studentsqsn::all();
  return view('viewstudentsupload')->with('studentupload', $studentupload);

} 






 //students uploads
 public function studentsqsn(Request $request, $id){
  $validate=validator::make($request->all(),[
      'fileToUpload'=>['required','mimes:pdf'],
      'target'=>['required','string'],
      'whatsapp'=>['required'],
      
  
  ]);
  
  if($validate->fails()){
    return Redirect::back()->withInput()->withErrors($validate);
}

else if(finances::where ('email',"=",$id)->first()){
    
    $studentqsnInputs=new studentsqsn;
    $studentqsnInputs->file=$request->fileToUpload->storeAs('studentsupload',$request->fileToUpload->getClientOriginalName());
    $studentqsnInputs->target=$request->input('target');
    $studentqsnInputs->email=$request->input('whatsapp');
    
    $studentqsnInputs->save();
    return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/studentsupload'; alert('Your Question has been Uploaded Successfully')</script>";

}
else{
  return  "<script>window.location='http://localhost/Trial/Zicta_Cohort/public/studentsupload'; alert('Whooops, we did not upload your question because you have not paid. Please register to upload your questions successfully.')</script>";
}


 
      }
  
}
