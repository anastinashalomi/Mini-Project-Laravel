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

class ComputeradminController extends Controller
{
    

//function for total number of comlaint
public function totalcomplaint(){

    //count for computer table
    $total=Computer::count();
    $totaolcompleted = Computer::where('currentstatus','=','Completed')->count();
    $totaolprocessing = Computer::where('currentstatus','=','Processing')->count();
    $totaolnotprocesse = Computer::where('currentstatus','=','NotProcessedYet')->count();


    return view('coadmin.coadmin')->with('countnu',[
        
        //for computer count for view
        'total'=>$total,
        'totalcom'=>$totaolcompleted,
        'totalpro'=>$totaolprocessing,
        'totalnot'=>$totaolnotprocesse,

        ]);

}

//function for feach data from computer table into admin view
public function list(){

    $data = Computer::all();

    return view('coadmin.computeradmincomplaint',['data' => $data]);

}

//function for detailscomplaint view (through admin)
public function update($id){

    $computer=Computer::find($id);

    return view('coadmin.detailscomplaint')->with('complaintdata',$computer);

}

//function for update status of complaint in com admin
public function updatestatus($id){

    $computer=Computer::find($id);
    
    return view('coadmin.update')->with('complaintdata',$computer);
}

 //function for update stuatus and others
 public function updatecomplaint(Request $request){

    $id = $request->id;
    $name = $request->name;
    $complaint = $request->complaint;
    $currentstatus = $request->currentstatus;
    $reviewmsg = $request->reviewmsg;

    $computer=Computer::find($id);

    $computer->currentstatus = $currentstatus;
    $computer->reviewmsg = $reviewmsg;

    $computer->save();
    $data = Computer::all();

    return view('coadmin.computeradmincomplaint',['data' => $data]);

}

//function for search computer compalint by user name
public function search(Request $request){

    $request->validate([
        'query'=>'required|min:2'
      ]);

      $search_text = $request->input('query');
    $computer = Computer::where('name','LIKE','%'.$search_text.'%')->orWhere('sid','LIKE','%'.$search_text.'%')->get();
    
    return view('coadmin.searchcom',['data' => $computer]);

}

//function for view for user feedbacks
public function feedback(){

    $data = Feedback::all();

    return view('coadmin.feedback',['data' => $data]);
}



}
