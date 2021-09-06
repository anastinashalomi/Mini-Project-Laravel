<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//route for admin login page  and protect auth using 'isadmin' middleware
Route::get('admin', ['middleware' => 'isadmin', function () {
    return view('admin.admin');
}]);
 

//admin routes start

//route for count of computer.physics,chemistry complaint
Route::get('/admin','ComputerController@totalcomplaint')->middleware('isadmin');

//route for feach data from db computer table
Route::get('/computercomplaint','ComputerController@list')->middleware('isadmin');

//route for details of complaint computer view (admin though)
Route::get('/detailscomplaint/{id}','ComputerController@update')->middleware('isadmin');

//r0ute for update view of computer complaints
Route::get('/updatestatus/{id}','ComputerController@updatestatus')->middleware('isadmin');

//Route for update cmplaint staus of computer complaint 
Route::post('/updatecomplaint','ComputerController@updatecomplaint')->middleware('isadmin');

//route for delete computer complaint by admin
Route::get('/deleteccomplaint/{id}','ComputerController@deletecomplaint');

//route for user details view of admin view
Route::get('/userdetails','ComputerController@userdetails')->middleware('isadmin');

//route for delete user through admin
Route::get('/deleteuser/{id}','ComputerController@deleteuser');

//route for see feedback of user through admin
Route::get('/feedback','ComputerController@feedback')->middleware('isadmin');

//route for search computer complaint through admin
Route::get('/search','ComputerController@search')->middleware('isadmin');

//delete feedback route
Route::get('/deletefeedback/{id}','FeedbackController@deletefeedback');

//edit user role view
Route::get('/editrole/{id}','ComputerController@editrole')->middleware('isadmin');

//route for update user role
Route::post('/updaterole','ComputerController@updaterole');



//route for admin physics complaint feach data view
Route::get('/physicscomplaint','PhysicsController@list')->middleware('isadmin');

//route for details for physics complaint(admin through)
Route::get('/detailsphysicscomplaint/{id}','PhysicsController@detailphysics')->middleware('isadmin');

//route for update specific physics complaint status through admin
Route::get('/updatephysicsstatus/{id}','PhysicsController@updatestatus')->middleware('isadmin');

//route for update physics db table trough admin
Route::post('/updatephysicscomplaint','PhysicsController@updatephysicscomplint'); 

//route for delete physics complaint by admin
Route::get('/deletecomplaintp/{id}','PhysicsController@deletecomplaintp');

//route for search physics complaint through admin
Route::get('/searchphy','PhysicsController@searchphy')->middleware('isadmin');





//route for adminpage chemistry

//route for chemistry complaint view of admin page (featch data from db)
Route::get('/chemistryscomplaint','ChemistryController@chemistryscomplaint')->middleware('isadmin');

//route for detail of specific user chemistry complaint through admin
Route::get('/detailschemistrycomplaint/{id}','ChemistryController@detailschemistrycomplaint')->middleware('isadmin');

//update the chemistry complaint details
Route::get('/updatechemistrystatus/{id}','ChemistryController@updatechemistrystatus')->middleware('isadmin');

//route for update details of chemistries table through admin
Route::post('/updatechemistrycomplaint','ChemistryController@updatechemistrycomplaint');

//delete complaint of chemistry through admin
Route::get('/deletecomplaintc/{id}','ChemistryController@deletecomplaintc');

//route for search chemistry complaint through admin
Route::get('/searchche','ChemistryController@searchche')->middleware('isadmin');

//route for search user through admin
Route::get('/searchuser','ComputerController@searchuser')->middleware('isadmin');



//admin route end



//user route start

// protect user route using 'auth' middleware route for user login page
Route::get('/user',['middleware' => 'auth' , function () {
    return view('user.user');
}]);

//user index 
Route::view('/userindex','user.userindex');

//route for user dashboard complaint count computer,physics,chemstry  complaint
Route::get('/user','ComputerController@totalusercomplaint')->middleware('auth');

// route for add compalint view computer view
Route::get('/computer',['middleware' => 'auth' ,function(){
    return view('user.computer');
}]);

//route for store complaint record in to db 'computer' table
Route::post('/computer','ComputerController@store')->middleware('auth');

//route for computer complaint view of user
Route::get('/computerview','ComputerController@computerview');




//Route for user Account setting view
Route::get('/userprofile','ComputerController@userprofileview');











//routes for physis
//route for physicas complaint view
Route::view('/physics','user.physics')->middleware('auth');

//route for store physics complaint in physics table
Route::post('/physics','PhysicsController@store')->middleware('auth');

//route for physics complaint view of user
Route::get('/physicsview','PhysicsController@physicsview')->middleware('auth');




//routers for chemistry

//rputer for chmistry complaint view
Route::view('/chemistry','user.chemistry')->middleware('auth');

//route for store data into db table in chemistry
Route::post('/chemistry','ChemistryController@store');

//route for get data from chemistry table to user view
Route::get('chemistrycomplaintview','ChemistryController@chemistrycomplaintview')->middleware('auth');

//user route end

//user route for feedback
Route::view('/userfeedback','user.userfeedback')->middleware('auth');

//route for store feedback record in to db 'feddback' table
Route::post('/userfeedback','FeedbackController@store')->middleware('auth');



Auth::routes();

Route::view('/home', 'user.userindex');
