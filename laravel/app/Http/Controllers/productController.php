<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\cart;
use App\Models\wishlist;
use Hash;
use Alert;




class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();	  
       return view('backend.add_product',['category'=>$category]);
    }

    

    public function viewall()
    {      
	   $product=product::paginate(12);	 
       $category=category::all();
       $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count();
       $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
       $total_wish = $wish_data->count();
       return view('frontend.shop',['data'=>$product, 'cate'=>$category, 'total_cart'=>$total_cart, 'total_wish'=>$total_wish]); 
    }

    public function random_product() 
    {
       $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count();
       $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
       $total_wish = $wish_data->count();
	   $data=product::inRandomOrder()->limit(8)->get();	
       return view('frontend.index',['data'=>$data,'total_cart'=>$total_cart, 'total_wish'=>$total_wish]);
       return view('frontend./',['data'=>$data]);
    }

    public function random_single($id)
    {
            $data=product::where("id",'=',$id)->first();
            $fetch=product::inRandomOrder()->limit(4)->get();	
            return view('frontend.detail_product',['fetch'=>$data,'data'=>$fetch]);
    }

    public function product_category($cid)
    {     
       $category=category::all();
       $data=product::where("cate_id",'=',$cid)->get();
       $product=product::paginate(12);
       return view('frontend.product_category',['fetch'=>$data, 'cate'=>$category, 'prod'=>$product]);
       
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function add_product(Request $request)
    {
        $data=new product;
		$data->prod_name=$request->prod_name;
        $data->short_desc=$request->short_desc;
        $data->long_desc=$request->long_desc;
        $data->main_price=$request->main_price;
        $data->dis_price=$request->dis_price;
        $data->cate_id=$request->cate_id;
        
				
		// img upload
		$prod_image=$request->file('prod_image');		
		$prod_imagename=time().'_img.'.$request->file('prod_image')->getClientOriginalExtension();
		$prod_image->move('backend/assets/img/upload/product',$prod_imagename);  // use move for move image in public/images
		$data->prod_image=$prod_imagename; // name store in db

        $multi_imgarr = [];
        if($request->hasfile('multi_img'))
         {
            foreach($request->file('multi_img') as $multi_img)
            {
                $name = time().rand(1000,9999).'_img.'.$multi_img->extension();
                $multi_img->move('backend/assets/img/upload/product/',$name);  
                $multi_imgarr[] = $name;  
            }
	        $data->multi_img=implode(',',$multi_imgarr);
         }


		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit_product($id)
    {
        $category=category::all();
        $data=product::where("id",'=',$id)->first();
		return view('backend.edit_product',['category'=>$category,'fetch'=>$data]);
    }

    public function detail_product($id)
    {
        $category=category::all();
        $data=product::where("id",'=',$id)->first();
		return view('frontend.detail_product',['category'=>$category,'fetch'=>$data]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_product(Request $request, $id)
    {
        $data=product::find($id);
        $data->prod_name=$request->prod_name;
        $data->short_desc=$request->short_desc;
        $data->long_desc=$request->long_desc;
        $data->main_price=$request->main_price;
        $data->dis_price=$request->dis_price;
        $data->cate_id=$request->cate_id;

        $old_file=$data->prod_image;
		if($request->hasFile('prod_image'))
        {
            $prod_image=$request->file('prod_image');		
            $prod_imagename=time().'_img.'.$request->file('prod_image')->getClientOriginalExtension();
            $prod_image->move('backend/assets/img/upload/product/',$prod_imagename);  // use move for move image in public/images
            $data->prod_image=$prod_imagename; // name store in db
            unlink('backend/assets/img/upload/product/'.$old_file);
        }

        $old_multifile=$data->multi_img;
		if($request->hasFile('multi_img'))
        {
            $multi_imgarr = [];
            if($request->hasfile('multi_img'))
            {
                foreach($request->file('multi_img') as $multi_img)
                {
                    $name = time().rand(1000,9999).'_img.'.$multi_img->extension();
                    $multi_img->move('backend/assets/img/upload/product/',$name);  
                    $multi_imgarr[] = $name;  
                }
                $data->multi_img=implode(',',$multi_imgarr);
            }
         
        }


        $data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_product');

    }
    function manage_product()
	{
		$product=product::join('categories','products.cate_id','=','categories.id')
		->get(['products.*','categories.cate_name']);

        return view('backend.manage_product',['fetch'=>$product]);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_product($id)
    {
        $data=product::find($id);
        // $old_file=$data->prod_image;
        // $old_multifile=$data->multi_img;
		$data->delete();
        // unlink('backend/assets/img/upload/product/'.$old_file);
        // unlink('backend/assets/img/upload/product/'.$old_multifile);
		Alert::success('success', 'Delete Success');
		return back();
    }

    public function product_status($id)
    {
		$data=product::find($id);
		$status=$data->status;
		if($status=="Out of Stock")
		{
			$data->status="Stock";
			$data->update();
			Alert::success('In Stock');
			return back();	
			
		}
		else
		{
			$data->status="Out of Stock";
			$data->update();
			Alert::warning('Out of Stock');
			return back();	
		}
    }
}
