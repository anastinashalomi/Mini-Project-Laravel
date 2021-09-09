<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
Use App\Physics;
Use App\Chemistry;
Use App\User;
Use App\Feedback;
Use Auth;
Use DB;

class PhysicsadminController extends Controller
{
    //
//function for total number of comlaint
public function totalcomplaint(){

     //count for physics table
     $totalp=Physics::count();
     $totaolcompletedp= Physics::where('currentstatus','=','Completed')->count();
     $totaolprocessingp = Physics::where('currentstatus','=','Processing')->count();
     $totaolnotprocessep = Physics::where('currentstatus','=','NotProcessedYet')->count();


    return view('phyadmin.phyadmin')->with('countnu',[
        
        //for physics count for view
        'totalp'=>$totalp,
        'totalcomp'=>$totaolcompletedp,
        'totalprop'=>$totaolprocessingp,
        'totalnotp'=>$totaolnotprocessep,

        ]);

}

//function for feach data from computer table into admin view
public function list(){

    $data = Physics::all();

    return view('phyadmin.physicsadmincomplaint',['data' => $data]);

}

//function for detailscomplaint view (through admin)
public function update($id){

    $computer=Physics::find($id);

    return view('phyadmin.detailscomplaint')->with('complaintdata',$computer);

}

//function for delete physics complaint through admin
public function deletecomplaintc($id){

    $physics=Physics::find($id);
    $physics->delete();
    return redirect()->back();
}

//function for update status of complaint in phy admin
public function updatestatus($id){

    $computer=Physics::find($id);
    
    return view('phyadmin.update')->with('complaintdata',$computer);
}

 //function for update stuatus and others
 public function updatecomplaint(Request $request){

    $id = $request->id;
    $name = $request->name;
    $complaint = $request->complaint;
    $currentstatus = $request->currentstatus;
    $reviewmsg = $request->reviewmsg;

    $physics=Physics::find($id);

    $physics->currentstatus = $currentstatus;
    $physics->reviewmsg = $reviewmsg;

    $physics->save();
    $data = Physics::all();

    return view('phyadmin.physicsadmincomplaint',['data' => $data]);

}

//function for search physica compalint by user name
public function search(Request $request){

    $request->validate([
        'query'=>'required|min:2'
      ]);

    $search_text = $request->input('query');
    $physics = Physics::where('name','LIKE','%'.$search_text.'%')->orWhere('sid','LIKE','%'.$search_text.'%')->get();
    
    return view('phyadmin.searchphy',['data' => $physics]);

}

//function for view for user feedbacks
public function feedback(){

    $data = Feedback::all();

    return view('coadmin.feedback',['data' => $data]);
}



}
