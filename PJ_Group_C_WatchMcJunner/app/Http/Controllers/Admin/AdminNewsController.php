<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Database\Factories\ProductsFactory;


class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(5);

        // Products::factory()->count(500)->create();
        return view('admin.admin-index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id',
            'type' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'required|max:255',
            'price' => 'required|max:9',
            'description' => 'required',
            'status' => 'required|max:100',
            'feature' => 'required'
        ]);

        $input = $request->all();

        // if ($request->fails()) {
        //     return redirect('register')
        //         ->withErrors($request)
        //         ->withInput();
        // }
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Products::create($input);
        return redirect()->route('admin')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        return view('admin.product-edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id',
            'type' => 'required|max:255',
            'brand' => 'required|max:255',
            'price' => 'required|max:9',
            'description' => 'required',
            'status' => 'required',
            'feature' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $products->update($input);

        return redirect()->route('admin')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        $products->delete();

        return redirect()->route('admin')
            ->with('success', 'Product deleted successfully');
    }


    /*
|--------------------------------------------------------------------------
| SEARCH
|--------------------------------------------------------------------------
*/
    public function search(Request $request)
    {
        $search = $request->search;

        $product = Products::where(function($query) use ($search){
            $query->where('name','like',"%$search%")
            ->orWhere('description','like',"%$search%")
            ->orWhere('type','like',"%$search%")
            ->orWhere('brand','like',"%$search%")
            ->orWhere('status','like',"%$search%");
        })
        ->get();

        return view('admin.admin-search', compact('product','search'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function search(Request $request)
    // {
    //     $search = $request->search;

    //     return view('admin.admin-search', compact('product','search'));
    // }
}
