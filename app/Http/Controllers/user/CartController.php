<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartController extends Controller
{
    //
    public function show()
    {
        return view("page.cart");
    }
    public function addCart(Request $request)
    {

        $product = DB::table('product')
            ->where('idproduct', '=', $request->id)->first();
        $color = DB::table('colorproduct')
            ->where('colorproduct.idcolorproduct', '=', $request->color)->first();

        $image = DB::table("image")
            ->where('colorproductid', '=', $color->idcolorproduct)->first();

        $size = DB::table('sizeproduct')
            ->where('colorproductid', '=', $color->idcolorproduct)
            ->where('title', '=', $request->size)
            ->first();

        $name = $product->title . ' / ' . $color->title . ' / ' . $size->title;
        $key =  Str::slug($name);
        $cart = [
            "idproduct" => $product->idproduct,
            'url' => $product->url,
            "Titleproduct" => $name,
            "Amount" => $request->soluong,
            "price" => $product->price,
            "image" => $image->url ?? NULL
        ];
        $request->session()->put("Cart.$key", $cart);
        return view('ajax.cart');
    }

    public function update(Request $request)
    {
        $request->validate(
            ['soluong.*'=>'numeric|min:1']
        );
        $data = $request->except("_token");
        $cart = Session("Cart");
        $i = 0;
        foreach ($cart as $key => $value) {
            $cartnew = [
                "idproduct" => $value['idproduct'],
                'url' => $value['url'],
                "Titleproduct" =>  $value['Titleproduct'],
                "Amount" => $data["soluong"][$i++],
                "price" => $value['price'],
                "image" => $value['image'] ?? NULL
            ];
            $request->session()->put("Cart.$key", $cartnew);
        }
    }
    public function remove(Request $request)
    {
        $request->session()->forget("Cart.$request->key");
        return redirect("cart");
    }
    public function reset(Request $request)
    {
        $request->session()->forget('Cart');
        return redirect('/');
    }
}
