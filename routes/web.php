<?php

/*
====================================
Front End Controller
====================================
*/

Route::get('/', 'FrontController@index');

//menu
Route::get('/add/menu', 'FrontController@AddMenu')->name('add.menu');
Route::post('/store/menu', 'FrontController@StoreMenu')->name('store.menu');
Route::get('/manage/menu', 'FrontController@ManageMenu')->name('manage.menu');

//sub menu
Route::get('/add/sub/menu', 'FrontController@AddSubMenu')->name('add.sub.menu');
Route::post('/store/sub/menu', 'FrontController@StoreSubMenu')->name('store.sub.menu');
Route::get('/manage/sub/menu', 'FrontController@ManageSubMenu')->name('manage.sub.menu');

//latest school News
Route::get('/add/latest_school_news', 'FrontController@AddLatestSchoolNews');
Route::post('/add/latest_school_news', 'FrontController@AddLatestSchoolNews_save');
Route::get('/manage/latest_school_news', 'FrontController@ManageLatestSchoolNews');

//upcoming events
Route::get('/add/upcoming_events', 'FrontController@AddUpcomingEvents');
Route::post('/add/upcoming_events', 'FrontController@AddUpcomingEvents_save');
Route::get('/manage/upcoming_events', 'FrontController@ManageUpcomingEvents');

//include school
Route::get('/add/include_school', 'FrontController@AddIncludeSchool');
Route::post('/add/include_school', 'FrontController@AddIncludeSchool_save');
Route::get('/manage/include_school', 'FrontController@ManageIncludeSchool');

//learn and share
Route::get('/add/learn_share', 'FrontController@AddLearnShare');
Route::post('/add/learn_share', 'FrontController@AddLearnShare_save');
Route::get('/manage/learn_share', 'FrontController@ManageLearnShare');

//practice and wish
Route::get('/add/practice_wish', 'FrontController@AddPracticeWish');
Route::post('/add/practice_wish', 'FrontController@AddPracticeWish_save');
Route::get('/manage/practice_wish', 'FrontController@ManagePracticeWish');

//student reviews
Route::get('/add/students_review', 'FrontController@AddStudentReview');
Route::post('/add/students_review', 'FrontController@AddStudentReview_save');
Route::get('/manage/students_review', 'FrontController@ManageStudentReview');

//notice
Route::get('/add/notice', 'FrontController@AddNotice');
Route::post('/add/notice', 'FrontController@AddNotice_save');
Route::get('/manage/notice', 'FrontController@ManageNotice');

//admission
Route::get('/add/admission', 'FrontController@AddAdmission');
Route::post('/add/admission', 'FrontController@AddAdmission_save');
Route::get('/manage/admission', 'FrontController@ManageAdmission');

//slider
Route::group(['prefix'=>'admin'], function(){
Route::resource('slider','SliderController');
});


/*
=================================
Pages controller
=================================
*/
Route::get('/add/pages', 'PagesController@AddPages');



//home controller
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

