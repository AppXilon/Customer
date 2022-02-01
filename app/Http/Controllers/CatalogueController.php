<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

        $products = DB::table('product')->get();
        $category = Product_Category::all();

        return view('layouts.catalogue')->with('products', $products)->with('category', $category);

    }

    public function search(Request $request)
    {
        $category = DB::table('product_category')->get();
        if($request->has('search')){
            $product = \App\Models\Product::where('P_Name', 'LIKE', '%' .$request->search.'%')->get();
         
     }else {
            $product = \App\Models\Product::all();
     }
        return view('layouts.catalogue', ['products' => $product])->with('category', $category);
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
    // public function add()
    // {
    //     //
    //     $product_category = Product_Category::all();
    //     return view('layouts.createProduct', ['product_category' => $product_category]);
    // }

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
        $product = new Product();
        if ($request->hasFile('P_Image')) {
            $file = $request->file('P_Image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
            $product->P_Image = $filename;
        }
        $product->Cat_Id = $request->input('Cat_Id');
        $product->P_Name = $request->input('P_Name');
        $product->P_Price = $request->input('P_Price');
        $product->P_Disc_Price = $request->input('P_Disc_Price');
        $product->S_Description = $request->input('S_Description');
        $product->L_Description = $request->input('L_Description');
        $product->P_Duration = $request->input('P_Duration');
        $product->P_Quantity = $request->input('P_Quantity');
        $product->P_Status = $request->input('P_Status');
        // Add features
        $product->features = $request->input('features');

        $product->save();
        // Product::create([
        //     'Cat_Id' => $request->input('Cat_Id'),
        //     'P_Name' => $request->input('P_Name'),
        //     'P_Price' => $request->input('P_Price'),
        //     'P_Disc_Price' => $request->input('P_Disc_Price'),
        //     'S_Description' => $request->input('S_Description'),
        //     'L_Description' => $request->input('L_Description'),
        //     'P_Duration' => $request->input('P_Duration'),
        //     'P_Image' => $newImageName,
        //     'P_Quantity' => $request->input('P_Quantity'),
        //     'P_Status' => $request->input('P_Status'),

        // ]);

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
        $categories = DB::table('product_category')->get();


        return view('layouts.editProduct')->with('product', $product)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $catalogue)
    {
        //
        $product = Product::find($catalogue);
        if ($request->hasFile('P_Image')) {
            $path = 'images' . $product->P_Image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('P_Image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
            $product->P_Image = $filename;
        }

        $product->Cat_Id = $request->input('Cat_Id');
        $product->P_Name = $request->input('P_Name');
        $product->P_Price = $request->input('P_Price');
        $product->P_Disc_Price = $request->input('P_Disc_Price');
        $product->S_Description = $request->input('S_Description');
        $product->L_Description = $request->input('L_Description');
        $product->P_Duration = $request->input('P_Duration');
        $product->P_Quantity = $request->input('P_Quantity');
        $product->P_Status = $request->input('P_Status');
        // Add features
        $product->features = $request->input('features');

        $product->update();

        return redirect()->route('catalogues.index')->with('status', "Category Updated Successfully");
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
