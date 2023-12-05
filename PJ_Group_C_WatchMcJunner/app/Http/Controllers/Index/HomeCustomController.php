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

    // public function getPopUpById()
    // {
    //     $id = 0;
    //     $product = Products::findOrFail($id);
    //     $pop = DB::table('Products')->where('product_id', $id)
    //         ->first();
    //     return view('index.index', ['pop' => $pop]);
    // }


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

    /*
|--------------------------------------------------------------------------
| DETAIL
|--------------------------------------------------------------------------
*/
    public function detail($id)
    {
        $data = Products::find($id);
        return view('index.product-detail', ['products' => $data]);
    }

    /*
|--------------------------------------------------------------------------
| POPUP (QuickView)
|--------------------------------------------------------------------------
*/
    public function show($id)
    {
        $product = Products::find($id);

        return response()->json($product);
    }



    //END FUNCTION

    /*
|--------------------------------------------------------------------------
| SEARCH
|--------------------------------------------------------------------------
*/
    public function search(Request $request)
    {
        $search = $request->search;

        $product = Products::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%")
                ->orWhere('type', 'like', "%$search%")
                ->orWhere('brand', 'like', "%$search%")
                ->orWhere('status', 'like', "%$search%");
        })
            ->get();

        return view('index.search-result', compact('product', 'search'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
