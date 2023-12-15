<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ViewMembersController extends Controller
{
    public function members() {
        $data = member::all();
        return view('members',compact('data'));
    }


}
