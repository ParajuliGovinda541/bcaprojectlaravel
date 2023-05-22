<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Category::join('products', 'products.category_id', '=', 'categories.id')
                    ->select('categories.name as category_name', 'products.*')
                    ->get();
          //dd($products);

        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories=Category::all();

        return view('product.create',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'stock'=>'required|numeric',
            'price'=>'required|numeric',
            'description'=>'required',
            'photopath'=>'required|image|mimes:jpeg,png,jpg',
            'category_id'=>'required'
        ]);

      //  dd($data); // printing the data 
      if($request->hasFile('photopath'))
      {
          $image=$request->file('photopath');
          $name= time().'.'.$image->getClientOriginalExtension();
          $destinationPath=public_path('/images/product');
          $image ->move($destinationPath,$name);
          $data['photopath']=$name;            
      }

        Product::create($data);
        return redirect(route('product.index'))->with('success','Product created sucessfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products=Product::find($id);
        $categories=Category::all();

        return view('product.edit',compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'name'=>'required',
            'stock'=>'required|numeric',
            'price'=>'required|numeric',
            'description'=>'required',
            'photopath'=>'required|image|mimes:jpeg,png,jpg',
            'category_id'=>'required'
        ]);
        $oldgallery=Product::find($id);
       
        if($request->hasFile('photopath')){
            $image=$request->file('photopath');
            $name= uniqid().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/product');
            $image ->move($destinationPath,$name);
            
            File::delete(public_path('images/product/'.$oldgallery->photopath));

         
            $data['photopath']=$name;            
        }

        $products= product::find($id);
        $products->update($data);
        File::delete(public_path('images/product/'.$oldgallery->photopath));

        return redirect(route('product.index'))->with('success','Product Deleted sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products= Product::find($id);
        $products->delete();
        return redirect(route('product.index'))->with('success','Product deleted sucessfully!');
    }
}
