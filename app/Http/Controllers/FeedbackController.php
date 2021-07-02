<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
Use Auth;
Use DB;

class FeedbackController extends Controller
{
    //function for store feedback in feedbavk table
    public function store(){


        //input field validation
     
        $feedback = new Feedback(); //object for feedback model
        
        //save data to data base useing model objct
        $feedback->name = request('name');
        $feedback->email = request('email');
        $feedback->sid = request('sid');
        $feedback->feedback = request('feedback');

        session()->flash('mssg','Feedback added successfuly');
        

        $feedback->save();
        return redirect('/userfeedback');
    }

    //function for delete feedback
     public function deletefeedback($id){

        $feedback=Feedback::find($id);
        $feedback->delete();
        return redirect()->back();
    }

}
