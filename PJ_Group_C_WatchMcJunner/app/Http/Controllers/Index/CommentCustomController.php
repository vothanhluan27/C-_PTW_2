<?php

namespace App\Http\Controllers\index;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentCustomController extends Controller
{


    public function index()
    {
        $brand = Comment::latest()->paginate(5);


        return view('index.product-detail', compact('comment'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function create_comment()
    // {
    //     return view('index.product-detail');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function generate_comment(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'comment' => 'required',
            'email' => 'required|email',
        ]);


        $input = $request->all();

        Comment::create($input);

        return redirect()->route('product-detail')
            ->with('success', 'Thêm bình luận thành công');
    }
}
