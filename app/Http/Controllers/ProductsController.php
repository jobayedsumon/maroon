<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductVariation;
use App\Category;
use App\SubCategory;
use App\SubSlaveCategory;
use App\Media;
use App\Cart;
use App\Size;
use App\Color;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Carbon;
use Illuminate\Support\Facades\Storage;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::get();
        return  view('backend.ecommerce.product_list')
                    ->with(compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category   =   Category::get();
        $sub_category   =   SubCategory::with('categories')
                                            ->get();
        $sub_slave_category = SubSlaveCategory::with('sub_categories')
                                ->with('categories')->get();
        $images = Media::get();
        

        return view('backend.ecommerce.add_product')->with(compact('category', 'sub_category','sub_slave_category','images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->validate($request, [
            'sku' => 'required|distinct',
        ]);

        $file = $request->file('thumbnail_image');

        Storage::disk('public')->put($file->getClientOriginalName(), file_get_contents($file));
        
        
        $sku                        = $request->sku;
        $category_id                = $request->category_id;
        $sub_category_id            = $request->sub_category_id;
        $sub_slave_category_id      = $request->sub_slave_category_id;
        $product_title              = $request->product_title;
        $product_description        = $request->product_description;
        $price                      = $request->price;
        $image_url                  = '/storage/'.$file->getClientOriginalName();
        $slug                       = $request->slug;
        
        

        
        $product = Products::create([
            'sku'                       =>  $sku,
            'categories_id'             =>  $category_id,
            'sub_categories_id'         =>  $sub_category_id       ,
            'sub_slave_categories_id'   =>  $sub_slave_category_id ,
            'product_title'             =>  $product_title,
            'product_description'       =>  $product_description ,
            'price'                     =>  $price ,
            'image_url'                 =>  $image_url,
            'slug '                     =>  $slug ,
            //'created_at '               =>  Carbon::now()
        ]);
        
        
        return redirect('/admin/product/'.$product->id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return view('backend.ecommerce.edit_product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products,Request $request )
    {
        
        $id = $request->product;
        $product_infos = Products::where('id',$id)->get();
        $product_variations = ProductVariation::where('products_id',$id)->get();
        return view('backend.ecommerce.edit_product')->with(compact('product_variations','id','product_infos'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
    
    
    
    /*
    |---
    |--- PRODUCT SHOWCASE CONTROLLERS 
    |---                     
    */
    
    public function singleproductview(Request $request){

        $product_id = \Hashids::connection('main')->decode($request->id);
        
        $product_info = Products::where('id',$product_id)->with(['categories','sub_categories','sub_slave_categories'])->get();
        
        $product_variations = ProductVariation::where('products_id',$product_id)->with(['colors','sizes'])->get();
        
        $sub_slave_id =  $product_info[0]->sub_slave_categories_id;

        $related_products = Products::where('sub_slave_categories_id',$sub_slave_id)->with(['categories','sub_categories','sub_slave_categories'])->get();;
        
        return view('frontend.pages.single_product')->with(compact('product_variations','product_info','related_products','product_id'));
        
    }
    
    public function productsview(Request $request){
        
        $sizes = Size::all();
        $colors = Color::all();
        
        
        $category = str_replace('_', ' ', $request->category);
        $categories_id = Category::where('name',$category)->value('id');

        $sub_category = str_replace('_', ' ', $request->sub_category);
        $sub_categories_id = SubCategory::where('name',$sub_category)->value('id');
        
        $sub_slave_category = str_replace('_', ' ', $request->sub_slave_category);
        $sub_slave_categories_id = SubSlaveCategory::where('name',$sub_slave_category)->value('id');
        

        
        $minamount = $request->minamount;
        $maxamount = $request->maxamount;

        $color_id = Color::where('color_name', $request->color)->value('id');
        $size_id = Size::where('size_name', $request->size)->value('id');

        
        $perPage = $request->perPage;
        

        
        // Building search query
        $query = Products::select('products.*');

        if($categories_id != NULL){
            $query->where('categories_id',$categories_id);
        }
            
        if($sub_categories_id != NULL){
            $query->where('sub_categories_id',$sub_categories_id);
        }
            
        if($sub_slave_categories_id != NULL){
            $query->where('sub_slave_categories_id',$sub_slave_categories_id);
        }
            
        /*    
        if($selling_status != NULL){
            $query->where('selling_status',$selling_status);
        }
            
        if($warehouse_id != NULL){
            $query->where('warehouse_id',$warehouse_id);
        }

        $query->whereBetween('created_at', array($from,$to));
        */

        if($minamount != null && $maxamount != null) {
            $query->whereBetween('price', [$minamount, $maxamount]);
        }

        if($request->color != null) {
            $product_ids = ProductVariation::where('colors_id', $color_id)->pluck('products_id');
            $query->whereIn('id', $product_ids);
        }

        if($request->size != null) {
            $product_ids = ProductVariation::where('sizes_id', $size_id)->pluck('products_id');
            $query->whereIn('id', $product_ids);
        }


        
        $allproducts = $query->paginate($perPage);

//        $allproducts = $query->get();
//
//
//
//
//        dd($allproducts);

        
        return view('frontend.pages.products')->with(compact('sizes','colors','category','allproducts'));
    }
    
    
    
    /*
    |
    |--- Update product informations
    |--- Product Description
    |
    */
    
    public function update_product_description(Request $request){
        
        $id = $request->product_id;
        $update_product = Products::find($id);
        $update_product->product_description = $request->product_description;
        $update_product->save();
        
        return back();
        
    }
    
    /*
    |
    |--- CART ITEMS IN THE MENU BAR
    |
    */
    
    public function cart_items_in_menu(){
        $invoices_id = Session::get('invoices_id');
        $cart_items = Cart::where('invoices_id',$invoices_id)->get();
    }
}
