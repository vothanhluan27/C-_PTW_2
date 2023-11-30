<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeCustomController extends Controller
{
    public function index()
    {
        $data = DB::table('Products')
            ->get();
        return view('index.index', ['data' => $data]);
    }

    /*
|--------------------------------------------------------------------------
| CART
|--------------------------------------------------------------------------
*/
    public function cart()
    {
        return view('index.cart');
    }

    public function addToCart($id)
    {
        $product = Products::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                'category_id',
                'type' => $product->type,
                'image' => $product->image,
                'brand' => $product->brand,
                'price' => $product->price,
                'description' => $product->description,
                'status' => $product->status,
                'feature' => $product->feature,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Thêm vào giỏ hàng thành công!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cập nhật giỏ hàng thành công');
        }
    }

    public function removeProduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Đã xóa sản phẩm!');
        }
    }

/*
|--------------------------------------------------------------------------
| WISHLIST
|--------------------------------------------------------------------------
*/
    public function wish()
    {
        return view('index.wish-list');
    }

    public function addToWishList($id)
    {
        $product = Products::findOrFail($id);

        $wish = session()->get('wish', []);

        if (isset($wish[$id])) {
            $wish[$id]['quantity']++;
        } else {
            $wish[$id] = [
                "name" => $product->name,
                'category_id',
                'type' => $product->type,
                'image' => $product->image,
                'brand' => $product->brand,
                'price' => $product->price,
                'description' => $product->description,
                'status' => $product->status,
                'feature' => $product->feature,
                "quantity" => 1
            ];
        }

        session()->put('wish', $wish);
        return redirect()->back()->with('success', 'Thêm vào danh sách mong ước thành công!');
    }

    public function updateWishList(Request $request)
    {
        if ($request->id && $request->quantity) {
            $wish = session()->get('wish');
            $wish[$request->id]["quantity"] = $request->quantity;
            session()->put('wish', $wish);
            session()->flash('success', 'Cập nhật thành công!');
        }
    }

    public function removeWishList(Request $request)
    {
        if ($request->id) {
            $wish = session()->get('wish');
            if (isset($wish[$request->id])) {
                unset($wish[$request->id]);
                session()->put('wish', $wish);
            }
            session()->flash('success', 'Đã xóa sản phẩm!');
        }
    }

/*
|--------------------------------------------------------------------------
| CHECKOUT
|--------------------------------------------------------------------------
*/
public function check_out_index()
    {
        return view('index.check-out');
    }

}
