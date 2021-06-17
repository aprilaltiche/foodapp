<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
       $product = DB::table('products')
       ->join('categories', 'products.cat_id', '=', 'categories.id')
       ->select('products.*', 'categories.*')
       ->paginate(2);
       
       return $product;
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
