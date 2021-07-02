<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chemistry;
Use Auth;
Use DB;

class ChemistryController extends Controller
{
    //function for store chemistry complaint into db (cheemistries table)
    public function store(){
        
        //input field validation
        $data = request()-> validate([
            'name'=> 'required',
            'sid' => 'required',
            'instrument' => 'nullable',
            'instrumentcode' => 'nullable',
            'complaint' => 'required|min:8'
        ]);
 
        $chemistry = new Chemistry(); //object for computer model
        
        //save data to data base useing model objct
        $chemistry->name = request('name');
        $chemistry->sid = request('sid');
        $chemistry->instrument = request('instrument');
        $chemistry->instrumentcode = request('instrumentcode');
        $chemistry->complaint = request('complaint');

        session()->flash('mssg','Complaint added successfuly');

        $chemistry->save();
        return redirect('/userindex');
    }

    //function for retrivew data from db chemistries table
    public function chemistrycomplaintview(){

        $sid = Auth::user()->sid;

        $data = DB::table('chemistries')->where('sid','=',$sid)->get();

        return view('user.chemistrycomplaintview',['data' => $data]);

    }

    //function for get data from chemistries table to admin view
    public function chemistryscomplaint(){
        $data = Chemistry::all();

        return view('admin.chemistryscomplaint',['data' => $data]);
    }

    //route for chemistry complaint detail of specific user
    public function detailschemistrycomplaint($id){
        
        $chemistry=Chemistry::find($id);

        return view('admin.detailschemistrycomplaint')->with('complaintdata',$chemistry);
    }

    //function for update the specific complaint status 
    public function updatechemistrystatus($id){

        $chemistry=Chemistry::find($id);
        
        return view('admin.updatechemistrystatus')->with('complaintdata',$chemistry);
    }

    //function for updatate details of chemistry table in db
    public function updatechemistrycomplaint(Request $request){

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

        return view('admin.chemistryscomplaint',['data' => $data]);
    }
    

    //function for delete chemistry complaint through admin
    public function deletecomplaintc($id){

        $chemistry=Chemistry::find($id);
        $chemistry->delete();
        return redirect()->back();
    }

    //function for search chemistry compalint by user name
    public function searchche(){

        $search_text = $_GET['query'];
        $chemistry = Chemistry::where('name','LIKE','%'.$search_text.'%')->get();
        
        return view('admin.searchche',['data' => $chemistry]);

    }


}
