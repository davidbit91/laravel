<?php

namespace App\Http\Controllers;

Use App\Models\Product;
Use App\Models\Category;
Use App\Models\Order;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Show all the products
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProducts()
    {
        $products = Product::all();
        $categories = Category::all();

        $arrayProducts = json_decode($products);
        $arrayCategories = json_decode($categories);

        for($x=0;$x<count($arrayProducts);$x++){
            for($y=0;$y<count($arrayCategories);$y++){
                if($arrayProducts[$x]->category_id == $arrayCategories[$y]->id){
                    $arrayProducts[$x]->category_id = $arrayCategories[$y]->type;
                }
            }
        }

        return response()->json($arrayProducts,200);
    }

    /**
     * Show all the products
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchProduct(Request $request)
    {
        $allProducts = Product::all();

        $products = $allProducts->where('type','like',$request->input('name'));


        return response()->json($products,200);

    }

    /**
     * setOrder API
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setOrder(Request $request)
    {
        $order = Order::create($request->all());

        return response()->json(['Order created succesfully' => $order], 201);
    }

    /**
     * Show all the orders
     *
     * @return \Illuminate\Http\Response
     */
    public function seeAllOrders()
    {
        $orders = Order::all();

        return response()->json($orders,200);


    }

}
