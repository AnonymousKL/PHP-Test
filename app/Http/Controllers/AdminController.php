<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = DB::table('categories')->get();
        $products = DB::table('products')
                    ->limit(10)
                    ->get();
        
        return view('admin.dashboard',compact(['categories','products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $prd_title = $request->title;
       $prd_price = $request->price;
       $prd_cat = $request->cat;
       $prd_des = $request->description;
       $image_name = $request->file('image')->getClientOriginalName();
        $image_path = 'img/'.$image_name;
        if ($request->file('image')->isValid()) {
            // Lưu file vào thư mục upload
            $request->file('image')->move('img',$image_name);
        }
        $result = DB::table('products')->insert([
            ['prd_title'=>$prd_title, 'prd_price'=>$prd_price, 'category'=>$prd_cat, 'prd_des'=>$prd_des, 'prd_img'=>$image_path]
        ]);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        
       return view('admin.edit', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
       $prd_title = $request->title;
       $prd_price = $request->price;
       $prd_cat = $request->cat;
       $prd_des = $request->description;
       $image_name = $request->file('image')->getClientOriginalName();
        $image_path = 'img/'.$image_name;
        if ($request->file('image')->isValid()) {
            // Lưu file vào thư mục upload
            $request->file('image')->move('img',$image_name);
        }
        $update = DB::table('products')
                                    ->where('id',$id)
                                    ->update(['prd_title' => $prd_title,
                                            'prd_price' => $prd_price,
                                            'category' => $prd_cat,
                                            'prd_des' => $prd_des,
                                            'prd_img' => $image_path
                                    ]);
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('products')->where('id', $id)->delete();
        return redirect('admin');
    }
}
