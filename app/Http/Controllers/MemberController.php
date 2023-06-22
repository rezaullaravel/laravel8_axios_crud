<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        $members=Member::orderBy('id','desc')->get();
        return view('member.index',compact('members'));
    }//end method


    //add member
    public function addMember(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
           ],[
            'name.required'=>'Name is required',
            'phone.required'=>'Phone number is required',
           ]
        );


        $member=new Member();
        $member->name=$request->name;
        $member->phone=$request->phone;
        $member->save();

        return response()->json([
            'status'=>'Member added successfully',
        ]);


       
    }//end method



    //edit member
    public function editMember($id){
        $member=Member::find($id);

        return response()->json([
            'member'=>$member,
        ]);
    }//end method



    //update member
    public function updateMember(Request $request,$id){
         $request->validate([
            'name'=>'required',
            'phone'=>'required',
           ],[
            'name.required'=>'Name is required',
            'phone.required'=>'Phone number is required',
           ]
        );


        $member=Member::find($id);
        $member->name=$request->name;
        $member->phone=$request->phone;
        $member->save();

        return response()->json([
            'status'=>'Member updated successfully',
        ]);

    }//end method


    //delete member
    public function deleteMember($id){
        $member=Member::find($id)->delete();

        return response()->json([
            'status'=>'Member deleted successfully',
        ]);
    }//end method
    
}//end class
