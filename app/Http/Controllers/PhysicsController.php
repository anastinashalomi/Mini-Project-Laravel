<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Physics;
Use Auth;
Use DB;

class PhysicsController extends Controller
{
    public function store(){

        $data = request()-> validate([
            'name'=> 'required',
            'sid' => 'required',
            'instrument' => 'nullable',
            'instrumentcode' => 'nullable',
            'complaint' => 'required|min:8'
        ]);
 
        $physics = new Physics(); //object for physics model

        $physics->name = request('name');
        $physics->sid = request('sid');
        $physics->instrument = request('instrument');
        $physics->instrumentcode = request('instrumentcode');
        $physics->complaint = request('complaint');
        
        session()->flash('mssg','Complaint added successfuly');

        $physics->save();
        return redirect('/userindex');
    }

    //function for physics complaint view for user
    public function physicsview(){

        
        $sid = Auth::user()->sid;

        $data = DB::table('physics')->where('sid','=',$sid)->get();

        return view('user.physicscomplaint',['data' => $data]);
    }


    //function for admin physics complaint feach
    public function list(){

        $data = Physics::all();

        return view('admin.physicscomplaint',['data' => $data]);
    }

    //function for details of physics complaint (specific one)
    public function detailphysics($id){

        $physics=Physics::find($id);

        return view('admin.detailsphysicscomplaint')->with('complaintdata',$physics);
    }

    //function for update physics complaint status
    public function updatestatus($id){

        $physics=Physics::find($id);
        
        return view('admin.updatephysics')->with('complaintdata',$physics);
    }

    //function for update physics db table
    public function updatephysicscomplint(Request $request){

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

        return view('admin.physicscomplaint',['data' => $data]);
    }

    //function for delete physics complaint through admin
    public function deletecomplaintp($id){

        $physics=Physics::find($id);
        $physics->delete();
        return redirect()->back();
    }

     //function for search physics compalint by user name
     public function searchphy(Request $request){

        $request->validate([
            'query'=>'required|min:2'
          ]);
  
          $search_text = $request->input('query');
        $physics = Physics::where('name','LIKE','%'.$search_text.'%')->orWhere('sid','LIKE','%'.$search_text.'%')->get();
        
        return view('admin.searchphy',['data' => $physics]);

    }

    
}
