<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('demo.show')->with('members', $members);
    }

    public function getMembers()
    {
        $members = Member::all();

        return view('demo.show')->with('members', $members);
    }

    public function save(Request $request)
    {
        $member = new Member;
        $member->firstname = $request->input('firstname');
        $member->lastname = $request->input('lastname');
        $member->save();

        return redirect('/demo');
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $input = $request->all();
        $member->fill($input)->save();

        return redirect('/demo');
    }

    public function delete($id)
    {
        $members = Member::find($id);
        $members->delete();

        return redirect('/demo');
    }
}
