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



class ChemistryadminController extends Controller
{
    

//function for total number of comlaint
public function totalcomplaint(){

   //count for chemistry table
   $totalc=Chemistry::count();
   $totaolcompletedc= Chemistry::where('currentstatus','=','Completed')->count();
   $totaolprocessingc = Chemistry::where('currentstatus','=','Processing')->count();
   $totaolnotprocessec = Chemistry::where('currentstatus','=','NotProcessedYet')->count();
   
   
   return view('cheadmin.cheadmin')->with('countnu',[

        //for chemistry count for view
        'totalc'=>$totalc,
        'totalcomc'=>$totaolcompletedc,
        'totalproc'=>$totaolprocessingc,
        'totalnotc'=>$totaolnotprocessec,

        ]);

}

//function for feach data from computer table into admin view
public function list(){

    $data = Chemistry::all();

    return view('cheadmin.chemistryadmincomplaint',['data' => $data]);

}

//function for detailscomplaint view (through admin)
public function update($id){

    $chemistry=Chemistry::find($id);

    return view('cheadmin.detailscomplaint')->with('complaintdata',$chemistry);

}

//function for update status of complaint in che admin
public function updatestatus($id){

    $chemistry=Chemistry::find($id);
    
    return view('cheadmin.update')->with('complaintdata',$chemistry);
}

//function for update stuatus and others
public function updatecomplaint(Request $request){

    $id = $request->id;
    $name = $request->name;
    $complaint = $request->complaint;
    $currentstatus = $request->currentstatus;
    $reviewmsg = $request->reviewmsg;

    $chemistry=Chemistry::find($id);

    $chemistry->currentstatus = $currentstatus;
    $chemistry->reviewmsg = $reviewmsg;

    $chemistry->save();
    $data = Chemistry::all();

    return view('cheadmin.chemistryadmincomplaint',['data' => $data]);

}

//function for delete chemistry complaint through admin
public function deletecomplaintc($id){

    $chemistry=Chemistry::find($id);
    $chemistry->delete();
    return redirect()->back();
}


//function for search computer compalint by user name
public function search(Request $request){

    $request->validate([
        'query'=>'required|min:2'
      ]);

    $search_text = $request->input('query');
    $chemistry = Chemistry::where('name','LIKE','%'.$search_text.'%')->orWhere('sid','LIKE','%'.$search_text.'%')->get();
    
    return view('cheadmin.searchche',['data' => $chemistry]);

}

//function for view for user feedbacks
public function feedback(){

    $data = Feedback::all();

    return view('coadmin.feedback',['data' => $data]);
}


}
