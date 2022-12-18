<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        return view('product.index', [
            'title' => 'Product - Anisa Collection',
            'products' => Product::latest()->searching()->paginate(12)->withQueryString()
        ]);
    }

    public function show(Product $product) {
        return view('product.detail', [
            'title' => $product->name . ' - Anisa Collection',
            'product' => $product
        ]);
    }

    public function order(Request $request, $id) {
        $product = Product::where('id', $id)->first();
        $date = Carbon::now();

        // cek falidasi
        $cek_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(empty($cek_order)) {
            // masukan ke table order
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->date = $date;
            $order->status = 0;
            $order->price_order = 0;
            $order->save();
        }

        // masukan ke table order detail
        $order_new = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // cek order detail
        $cek_order_detail = Order_Detail::where('product_id', $product->id)->where('order_id', $order_new->id)->first();

        if(empty($cek_order_detail)) {
            $order_detail = new Order_Detail;
            $order_detail->product_id = $product->id;
            $order_detail->order_id = $order_new->id;
            $order_detail->total = $request->jumlah_order;
            $order_detail->total_price = $product->price * $request->jumlah_order;
            $order_detail->save();
        } else {
            $order_detail = Order_Detail::where('product_id', $product->id)->where('order_id', $order_new->id)->first();
            $order_detail->total = $order_detail->total + $request->jumlah_order;

            // harga sekarang
            $price_order_detail_new = $product->price * $request->jumlah_order;

            $order_detail->total_price = $order_detail->total_price + $price_order_detail_new;
            $order_detail->update();
        }

        // jumlah total
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->price_order = $order->price_order + $product->price * $request->jumlah_order;
        $order->update();

        return redirect('');
    }
}