<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProId;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all product
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //add product
        //validate data
        $this->validate($request,[
            'name' => 'requires',
            'price' => 'requires',
            'product_category' => 'required'
        ]);
        $pid = ProId::latest()->first();
        $cat = ProductCategory::find($request->product_category);
        if($pid = null){
            $val = '0001';
            $pp = new ProId();
            $pp->create([
                'pid' => 1
            ]);
        }
        else{
            $rec = $pid->pid;
            $pp = new ProId();
            $rec = $rec + 1;
            $pp->create([
                'pid' => $rec
            ]);
            if($rec < 10){
                $val = '000'.$rec;
            }
            elseif ($rec > 9 && $rec < 100){
                $val = '00'.$rec;
            }
            else{
                $val = '0'.$rec;
            }
        }
        $pro_srn = 'PPT-'.$cat->id.'-'.$val;
        $data = $request->all();
        $data['product_srn'] = $pro_srn;
        $product = new Product();
        $product->create($data);

        return response('success');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        //update product
        //validate data
        $this->validate($request,[
            'name' => 'requires',
            'price' => 'requires',
            'product_category' => 'required'
        ]);
        $product = Product::find($id);
        $product->update($request->all());

        return response('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response('success');
    }
}
