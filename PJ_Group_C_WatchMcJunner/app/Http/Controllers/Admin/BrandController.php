<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::latest()->paginate(5);


        return view('admin.brand', compact('brand'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.brand-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function generate(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|max:255'
        ]);

        $input = $request->all();

        Brand::create($input);

        return redirect()->route('admin/manu')
            ->with('success', 'Brand created successfully.');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand-edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'brand_name' => 'required|max:255'
        ]);

        $input = $request->all();

        $brand->update($input);

        return redirect()->route('admin/manu')
            ->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function del(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin/manu')
            ->with('success', 'Brand deleted successfully');
    }

}
