<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Validation\Validator;

class DashboardController extends Controller
{
    public function index(){

        $data = member::all();
        return view('dashboard',compact('data'));
    }


    public function addmember() {
        return view('addmember');
    }

    public function insertdata(Request $request) {
        $this-> validate($request,[
            'npm' => 'required|min:8|max:8',
            'member_name' => 'required|min:4|max:40',
            'jenis_kelamin' => 'required',
        ]);
        member::create($request->all());
        return redirect()->route('dashboard')->with('success','Data Added Successfully');
    }

    public function viewdata($npm)  {
        $data = member::find($npm);
        // dd($data);
        return view('editmember',compact('data'));
    }

    public function updatedata(Request $request, $npm) {
        $this-> validate($request,[
            'npm' => 'required|min:8|max:8',
            'member_name' => 'required|min:4|max:40',
            'jenis_kelamin' => 'required',
        ]);
        $data = member::find($npm);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('editsuccess','Data Updated Successfully');
    }

    public function deletedata($npm) {
        $data = member::find($npm);
        $data->delete();
        return redirect()->route('dashboard')->with('deletedsuccess','Data Deleted Successfully');

    }



}
