<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Whoops\Run;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=DB::table('product')->get();
        $category=Product_Category::all();

        return view('layouts.catalogue')->with('products',$products)->with('category',$category);
    }

    public function search(Request $request) 
    {
        $search = $request->get('search');
        $category=DB::table('product_category')->get();
        $posts = DB::table('product')->where('P_Name', 'like', '%'.$search.'%')->get();
        return view('layouts.catalogue',['products' => $posts])->with('category',$category);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product_category = Product_Category::all();
        return view('layouts.createProduct', ['product_category' => $product_category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'P_Image' => 'required|mimes:kpg,png,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . 
        $request->P_Image->extension();
        $request->P_Image->move(public_path('images'), $newImageName);
        
        Product::create([
            'Cat_Id' => $request->input('Cat_Id'),
            'P_Name' => $request->input('P_Name'),
            'P_Price' => $request->input('P_Price'),
            'P_Disc_Price' => $request->input('P_Disc_Price'),
            'S_Description' => $request->input('S_Description'),
            'L_Description' => $request->input('L_Description'),
            'P_Duration' => $request->input('P_Duration'),
            'P_Image' => $newImageName,
            'P_Quantity' => $request->input('P_Quantity'),
            'P_Status' => $request->input('P_Status'),

        ]);
     
        return redirect()->route('catalogues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);

        // show the view and pass the shark to it
        return view('layouts.viewDetail', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($catalogue)
    {
        //
        $product = Product::find($catalogue);
        // dd($product->category());
        // $product=DB::table('product')->where('P_Id',$catalogue)->first();
        $categories=DB::table('product_category')->get();

     
        return view('layouts.editProduct')->with('product', $product)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $catalogue)
    {
        //
        $newImageName = time() . '-' . $request->name . '.' . 
        $request->P_Image->extension();
        $request->P_Image->move(public_path('images'), $newImageName);
  
        
        $catalogue->update([
        'Cat_Id' => $request->input('Cat_Id'),
        'P_Name' => $request->input('P_Name'),
        'P_Price' => $request->input('P_Price'),
        'P_Disc_Price' => $request->input('P_Disc_Price'),
        'S_Description' => $request->input('S_Description'),
        'L_Description' => $request->input('L_Description'),
        'P_Duration' => $request->input('P_Duration'),
        'P_Image' => $newImageName,
        'P_Quantity' => $request->input('P_Quantity'),
        'P_Status' => $request->input('P_Status'),]);
    
        return redirect()->route('catalogues.index')->with('success','Product updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $catalogue)
    {
        //
        $catalogue->delete();
    
        return redirect()->back();
    }
}
