<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index()
    {
        $type = Type::latest()->paginate(5);


        return view('admin.type', compact('type'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.type-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function generate(Request $request)
    {
        $request->validate([
            'type_name' => 'required|max:255'
        ]);

        $input = $request->all();

        Type::create($input);

        return redirect()->route('admin/type')
            ->with('success', 'Type created successfully.');
    }

    public function edit(Type $type)
    {
        return view('admin.type-edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'type_name' => 'required|max:255'
        ]);

        $input = $request->all();

        $type->update($input);

        return redirect()->route('admin/type')
            ->with('success', 'Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delType(Type $type)
    {
        $type->delete();

        return redirect()->route('admin/type')
            ->with('success', 'Type deleted successfully');
    }

}
