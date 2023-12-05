<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListUserController extends Controller
{
    public function index()
    {
        $users = User::simplePaginate(5);

        return view('admin.user', compact('users'));
    }

    public function show($id)
    {
        $users = User::find($id);

        return response()->json($users);
    }

    public function edit(User $users)
    {
        return view('admin.brand-edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $users)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $input = $request->all();

        $users->update($input);

        return redirect()->route('/admin/list-user')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function del_user(User $users)
    {
        $users->delete();

        return redirect()->route('list-user')
            ->with('success', 'User deleted successfully');
    }
}
