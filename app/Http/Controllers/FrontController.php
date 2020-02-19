<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\SubCategory;
use App\frontend_latest_school_news;
use App\Frontend_upcoming_events;
use App\FrontendIncludeSchools;
use App\FrontendLearnShares;
use App\FrontendPracticeWishs;
use App\FrontendStudentReviews;
use App\FrontendNotice;
use App\AdmissionOrientations;

class FrontController extends Controller
{
   
   public function index(){

   	return view('front.home.home');
   }

   /*menu*/
   public function AddMenu(){
   	return view('back.menu.createMenu');
   }
public function ManageMenu(){
	  $menus = Menu::all();
     return view('back.menu.ManageMenu')->with('menus', $menus);	
}

   public function StoreMenu(Request $request){
    
    $menu = new Menu();
    $menu->MenuName = $request->MenuName;
    $menu->save();

    return redirect()->route('add.menu'); 
   }


   /*sub menu*/
   public function AddSubMenu(){
   	 $menus = Menu::all();
   	return view('back.submenu.createSubMenu')->with('menus', $menus);
   }
    public function ManageSubMenu(){
	  $subMenus = Menu::all();
     return view('back.submenu.ManageSubMenu')->with('subMenus', $subMenus);	
   }

   public function StoreSubMenu(Request $request){
    
    $subMenu = new SubCategory();
    $subMenu->SubMenuName = $request->SubMenuName;
    $subMenu->Menu_id = $request->Menu_id;
    $subMenu->save();
    
    return redirect()->route('add.sub.menu'); 
   }

     /*latest school news*/
   public function AddLatestSchoolNews(){
    return view('back.latest_school_news.create_school_news');
   }

   public function AddLatestSchoolNews_save(Request $request){

    $latestNews = new frontend_latest_school_news();
    $latestNews->school_news_title = $request->school_news_title;
    $latestNews->school_news_description = $request->school_news_description;
    $latestNews->save();

    return redirect('/add/latest_school_news');  
   }

   public function ManageLatestSchoolNews(){
     $latestNews = frontend_latest_school_news::all();
     return view('back.latest_school_news.manage_school_news', ['latestNews_school'=>$latestNews]);
   }

     /*upcoming events*/
   public function AddUpcomingEvents(){
    return view('back.upcoming_events.create_upcoming_events');
   }

   public function AddUpcomingEvents_save(Request $request){

    $upcoming_events = new Frontend_upcoming_events();
    $upcoming_events->upcoming_events_title = $request->upcoming_events_title;
    $upcoming_events->upcoming_events_address = $request->upcoming_events_address;
    $upcoming_events->save();

    return redirect('/add/upcoming_events');  
   }

   public function ManageUpcomingEvents(){
     $upcoming_events = Frontend_upcoming_events::all();
     return view('back.upcoming_events.manage_upcoming_events', ['upcoming_events_message'=>$upcoming_events]);
   }

   /*include schools*/
   public function AddIncludeSchool(){
    return view('back.include_school.create_Include_School');
   }

   public function AddIncludeSchool_save(Request $request){

    $include_school = new FrontendIncludeSchools();
    $include_school->include_school_image = 'Picture';
    $include_school->include_school_title = $request->include_school_title;
    $include_school->include_school_address = $request->include_school_address;
    $include_school->save();
    
    $lastId = $include_school->include_school_id;
    $pictureInfo = $request->file('include_school_image');
    $picName = $lastId.$pictureInfo->getClientOriginalName();
    $folder = "smsImage/";
    $pictureInfo->move($folder,$picName);
    $picUrl = $folder.$picName;
    $smsPic = FrontendIncludeSchools::find($lastId);
    $smsPic->include_school_image = $picUrl;
    $smsPic->save();


    return redirect('/add/include_school');  
   }

   public function ManageIncludeSchool(){
     $include_school = FrontendIncludeSchools::all();
     return view('back.include_school.manage_Include_School', ['include_school_message'=>$include_school]);
   }

   /*learn and share*/
   public function AddLearnShare(){
    return view('back.learn_share.create_learn_share');
   }

   public function AddLearnShare_save(Request $request){

    $learn_share = new FrontendLearnShares();
    $learn_share->learn_share_title = $request->learn_share_title;
    $learn_share->learn_share_description = $request->learn_share_description;
    $learn_share->save();

    return redirect('/add/learn_share');  
   }

   public function ManageLearnShare(){
     $learn_share = FrontendLearnShares::all();
     return view('back.learn_share.manage_learn_share', ['learn_share_message'=>$learn_share]);
   }

/*practice and wish*/
   public function AddPracticeWish(){
    return view('back.practice_wish.create_practice_wish');
   }

   public function AddPracticeWish_save(Request $request){

    $practice_wish = new FrontendPracticeWishs();
    $practice_wish->practice_wish_title = $request->practice_wish_title;
    $practice_wish->practice_wish_description = $request->practice_wish_description;
    $practice_wish->save();

    return redirect('/add/practice_wish');  
   }

   public function ManagePracticeWish(){
     $practice_wish = FrontendPracticeWishs::all();
     return view('back.practice_wish.manage_practice_wish', ['practice_wish_message'=>$practice_wish]);
   }

   /*student and review*/
   public function AddStudentReview(){
    return view('back.student_review.create_student_review');
   }

   public function AddStudentReview_save(Request $request){

    $student_review = new FrontendStudentReviews();
    $student_review->student_review_title = $request->student_review_title;
    $student_review->student_review_description = $request->student_review_description;
    $student_review->save();

    return redirect('/add/students_review');  
   }

   public function ManageStudentReview(){
     $student_review = FrontendStudentReviews::all();
     return view('back.student_review.manage_student_review', ['student_review_message'=>$student_review]);
   }

   /*notice*/
   public function AddNotice(){
    return view('back.notice.create_notice');
   }

   public function AddNotice_save(Request $request){

    $notices = new FrontendNotice();
    $notices->notice_title = $request->notice_title;
    $notices->save();

    return redirect('/add/notice');  
   }

   public function ManageNotice(){
     $notices = FrontendNotice::all();
     return view('back.notice.manage_notice', ['notice_message'=>$notices]);
   }

   /*admission*/
   public function AddAdmission(){
    return view('back.admission.create_admission');
   }

   public function AddAdmission_save(Request $request){

    $admission = new AdmissionOrientations();
    $admission->admission_orientation_title = $request->admission_orientation_title;
    $admission->admission_orientation_description = $request->admission_orientation_description;
    $admission->save();

    return redirect('/add/notice');  
   }

   public function ManageAdmission(){
     $admission = AdmissionOrientations::all();
     return view('back.admission.manage_admission', ['admission_message'=>$admission]);
   }

}
