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


class ComputerController extends Controller
{
    //function for store 'computer complaint' in to db table 'computer'
    public function store(){

        $data = request()-> validate([
            'name'=> 'required',
            'sid' => 'required',
            'instrument' => 'nullable',
            'instrumentcode' => 'nullable',
            'complaint' => 'required|min:8'
        ]);
 
        $computer = new Computer(); //object for computer model

        $computer->name = request('name');
        $computer->sid = request('sid');
        $computer->instrument = request('instrument');
        $computer->instrumentcode = request('instrumentcode');
        $computer->complaint = request('complaint');

        session()->flash('mssg','Complaint added successfuly');

        $computer->save();
        return redirect('/userindex');
    }


    //function for feach data from computer table into admin view
    public function list(){

        $data = Computer::all();

        return view('admin.computercomplaint',['data' => $data]);

    }

    //function for detailscomplaint view (through admin)
    public function update($id){

        $computer=Computer::find($id);

        return view('admin.detailscomplaint')->with('complaintdata',$computer);

    }


    //function for update status of complaint
    public function updatestatus($id){

        $computer=Computer::find($id);
        
        return view('admin.update')->with('complaintdata',$computer);
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

        return view('admin.computercomplaint',['data' => $data]);

    }

    //function for delete computer complaint through admin
    public function deletecomplaint($id){

        $computer=Computer::find($id);
        $computer->delete();
        return redirect()->back();
    }


    //function for total number of comlaint
    public function totalcomplaint(){

        //count for computer table
        $total=Computer::count();
        $totaolcompleted = Computer::where('currentstatus','=','Completed')->count();
        $totaolprocessing = Computer::where('currentstatus','=','Processing')->count();
        $totaolnotprocesse = Computer::where('currentstatus','=','NotProcessedYet')->count();

        //count for physics table
        $totalp=Physics::count();
        $totaolcompletedp= Physics::where('currentstatus','=','Completed')->count();
        $totaolprocessingp = Physics::where('currentstatus','=','Processing')->count();
        $totaolnotprocessep = Physics::where('currentstatus','=','NotProcessedYet')->count();

        //count for chemistry table
        $totalc=Chemistry::count();
        $totaolcompletedc= Chemistry::where('currentstatus','=','Completed')->count();
        $totaolprocessingc = Chemistry::where('currentstatus','=','Processing')->count();
        $totaolnotprocessec = Chemistry::where('currentstatus','=','NotProcessedYet')->count();
        
        
        return view('admin.admin')->with('countnu',[
            
            //for computer count for view
            'total'=>$total,
            'totalcom'=>$totaolcompleted,
            'totalpro'=>$totaolprocessing,
            'totalnot'=>$totaolnotprocesse,
             
            //for physics count for view
            'totalp'=>$totalp,
            'totalcomp'=>$totaolcompletedp,
            'totalprop'=>$totaolprocessingp,
            'totalnotp'=>$totaolnotprocessep,

             //for chemistry count for view
             'totalc'=>$totalc,
             'totalcomc'=>$totaolcompletedc,
             'totalproc'=>$totaolprocessingc,
             'totalnotc'=>$totaolnotprocessec,

            ]);

    }


    //function for user dashboard count of complaints
    public function totalusercomplaint(){

        $sid = Auth::user()->sid;

        //for count to specific user in computer table 
        $data = DB::table('computers')->where('sid','=',$sid)->get(); //total count
        $countnu = count($data);
        
        $comcount = DB::table('computers')->where('sid','=',$sid)->where('currentstatus','=','Completed')->get(); //completed count
        $compcount = count($comcount);

        $procount = DB::table('computers')->where('sid','=',$sid)->where('currentstatus','=','Processing')->get(); //processing count
        $proscount = count($procount);

        $notcomcount = DB::table('computers')->where('sid','=',$sid)->where('currentstatus','=','NotProcessedYet')->get();  // not completed cont
        $notcompcount = count($notcomcount);


        //for count in specific user in physics table
        $data = DB::table('physics')->where('sid','=',$sid)->get(); //total count
        $countnup = count($data);
        
        $comcount = DB::table('physics')->where('sid','=',$sid)->where('currentstatus','=','Completed')->get(); //completed count
        $compcountp = count($comcount);

        $procount = DB::table('physics')->where('sid','=',$sid)->where('currentstatus','=','Processing')->get(); //processing count
        $proscountp = count($procount);

        $notcomcount = DB::table('physics')->where('sid','=',$sid)->where('currentstatus','=','NotProcessedYet')->get();  // not completed cont
        $notcompcountp = count($notcomcount);


        //for count in specific user in chemistry table
        $data = DB::table('chemistries')->where('sid','=',$sid)->get(); //total count
        $countnuc = count($data);
        
        $checmcount = DB::table('chemistries')->where('sid','=',$sid)->where('currentstatus','=','Completed')->get(); //completed count
        $comcountch = count($checmcount);

        $procountch = DB::table('chemistries')->where('sid','=',$sid)->where('currentstatus','=','Processing')->get(); //processing count
        $proscountch = count($procountch);

        $notcomcount = DB::table('chemistries')->where('sid','=',$sid)->where('currentstatus','=','NotProcessedYet')->get();  // not completed cont
        $notcompcountch = count($notcomcount);

        return view('user.user')->with('count',[
            //for count of computer table into view
            'fcount'=>$countnu,
            'completedcount'=>$compcount,
            'processingcount'=>$proscount,
            'notcompletedcount'=>$notcompcount,

            //for count of physics tables in to view
            'fcountp'=>$countnup,
            'completedcountp'=>$compcountp,
            'processingcountp'=>$proscountp,
            'notcompletedcountp'=>$notcompcountp,

             //for count of chemistry tables in to view
             'fcountc'=>$countnuc,
             'completedcountc'=>$comcountch,
             'processingcountc'=>$proscountch,
             'notcompletedcountc'=>$notcompcountch
        ]);
    }


    //function for computer complaint view of user
    public function computerview(){

        $sid = Auth::user()->sid;

        $data = DB::table('computers')->where('sid','=',$sid)->get();

        return view('user.computercomplaint',['data' => $data]);

    }

    //function for user details for admin view
    public function userdetails(){

        $data = User::all();

        return view('admin.userdetails',['data' => $data]);
    }

    //function for delete user in user table
    public function deleteuser($id){

        $user=User::find($id);
        $user->delete();
        return redirect()->back();

    }

    //function for edit user role
    public function editrole($id){
   
         $userrole = User::find($id);
         return view('admin.edit',['data' => $userrole]);
    }

    //function for update user role
    public function updaterole(Request $request){
        
        $id = $request->id;
        $name = $request->name;
        $is_admin = $request->is_admin;
    

        $user=User::find($id);

        $user->is_admin = $is_admin;
      

        $user->update();
        $data = User::all();

        return view('admin.userdetails',['data' => $data]);

    }

    //function for view for user feedbacks
    public function feedback(){

        $data = Feedback::all();

        return view('admin.feedback',['data' => $data]);
    }

    //function for search computer compalint by user name
    public function search(){

        $search_text = $_GET['query'];
        $computer = Computer::where('name','LIKE','%'.$search_text.'%')->get();
        
        return view('admin.searchcom',['data' => $computer]);

    }


  



}
