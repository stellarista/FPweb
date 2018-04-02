<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class productController extends Controller
{
    public function __construct(Product $product){
        $this->product = $product;
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $newProduct=[
            'artist_id'=>$request->artist_id,
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'tracklist'=>$request->tracklist,
            'release_date'=>$request->release_date,
            'product_image'=>$request->product_image,
        ];

        // $newProduct = $this->product->create($newProduct);

        // if($newProduct!=null){
        //     var_dump($newProduct);
        // }
        // else{
        //     echo "failed";
        // }

        if($newProduct!=null)
        {
            $data = $this->product->create($newProduct);
            return response()->json($data,200);
        } else {
            return response()->json(['error' => 'Product is not added'], 404);
        }
    }

    public function getByID($id)
    {
        // $id = $request->input('id');
        // $product=Product::find($id);
        // return $product;

        $productId=Product::find($id)->value('id');
        $data=Product::find($id);

        return $data;
    }

    // public function show()
    // {
    //     $product = DB::select('SELECT artist_id, price, description, tracklist, release_date, product_image,product_name');
        
    //     return response()->json($product, 200);
    // }

    
    public function show()
    {
        $product = Product::all();
        $array =  Array();
        $array['data'] = $product;
        return response()->json($array, 200);
    }

    public function update(Request $request)
    {
        $updateProduct=Product::where('id', $request->id)->update([
            'artist_id'=>$request->artist_id,
            'price'=>$request->price,
            'description'=>$request->description,
            'tracklist'=>$request->tracklist,
            'release_date'=>$request->release_date,
            'product_image'=>$request->product_image,
            'product_name'=>$request->product_name
        ]);

        return $updateProduct;
    }

    public function destroy(Request $request, $id)
    {
        Product::where('id', $id)->delete();
    }
}
