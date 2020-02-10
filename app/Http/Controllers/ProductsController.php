<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('title','asc')->paginate(6);
        return view('pages.products')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.newprod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating form inputs
       $this->validate($request, [
            'title' => 'required',
            'descrip' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'imglink' => 'image|nullable|max:1999'
       ]);

       //To check if file is uploaded
        if($request->hasFile('imglink')){
            $fileName = $request->file('imglink')->getClientOriginalName();
            $request->imglink->storeAs('public/img',$fileName);
        }else{     
            $filename = 'empty.png';
        }

        $prod = new Product;
        $prod->title = $request->input('title');
        $prod->descrip = $request->input('descrip');
        $prod->quantity = $request->input('quantity');
        $prod->price = $request->input('price');
        $prod->imglink = $fileName;
        $prod->save();

        return redirect('/products')->with('success','Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('pages.single')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.editprod')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validating form inputs
       $this->validate($request, [
            'title' => 'required',
            'descrip' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'imglink' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('imglink')){
            $fileName = $request->file('imglink')->getClientOriginalName();
            $request->imglink->storeAs('public/img',$fileName);
        }else{     
            $fileName = 'empty.png';
        }

        $prod = Product::find($id);
        $prod->title = $request->input('title');
        $prod->descrip = $request->input('descrip');
        $prod->quantity = $request->input('quantity');
        $prod->price = $request->input('price');
        if($request->hasFile('imglink')){
            $prod->imglink = $fileName;
        }
        $prod->save();

        return redirect('/products')->with('success','Product edited successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod->delete();

        return redirect('/products')->with('success', 'Product deleted successfully');
    }
}
