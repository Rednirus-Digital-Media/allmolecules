<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slug;
use App\Models\Type;
use App\Models\Division;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\visual;
use DB;
use Validator;
use App\Models\ProductOrder;
use App\Models\Mr;
use App\Models\Enquiry;
use Illuminate\Support\Facades\App;
class PublicPages extends Controller
{

   public function pharmaceuticals(){
    $product = Product::all();
    $unique = $product->unique(['composition']);
     return view('pharmaceuticals')->with('res' , $unique);
   }
     public function search(){
        $simple_text= $_GET['query'];
        if($simple_text){
        $products['products']=DB::table('products')->where('name','LIKE','%'. $simple_text.'%')->paginate(15);
         
        return view('search',$products)->with('vis',DB::table('visuals')->get());
        }else{
            return redirect('/');
        }
     }
    
   public function catcomposition($com){
      $composition = Product::where('composition',$com)->get();
     $data =  $composition->unique(['packing']);

     return view('catcomposition')->with('data' , $data);
   }  
 
  public function catproduct($com , $pac){
   $products = Product::where(['composition'=>$com,'packing'=>$pac])->get();
   return view('catproduct')->with('products' , $products);
    
   }



  public function tablets(){
     $products = Product::where('composition' , 'Tablets')->get();
    return view('tablets')
    ->with('product' ,  $products);
  }


    public function index($data='Home'){
        $slug=Slug::where('slug',$data)
            ->first();
        //dd($slug);
        if($slug != NULL){
            if($slug->type==1){
                //product
                $product=Product::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    ->first();
                
                if($product != NULL){
                    $products=Product::where('id','!=',$slug->slugid)
                        ->where('status',1)
                     
                        ->get();
                       
                    return view('PublicPages.product')
                       
                        ->with('product',$product)
                        ->with('products',$products);
                }
                return abort(404);
            }
            elseif($slug->type==2){
                //blog
                $blog=Blog::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    
                    ->first();
                //dd($blog);
                if($blog != NULL){
                    return view('PublicPages.blogdetails')
                        ->with('blog',$blog);
                }
                return abort(404);
            }
            elseif($slug->type==3){
                //page
                $page=Page::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    ->first();

                if($page != NULL){
                    return view('PublicPages.page')
                        ->with('page',$page);
                }
                return abort(404);
            }
            elseif($slug->type==4){
                $category=Category::where('slug',$data)
                ->where('id',$slug->slugid)
                ->where('status',1)
                ->first();
                
            if($category != NULL){
                //dd($category);
                if($category->type == 4){
                    $images=Gallery::where('category_id',$category->id)
                        ->whereStatus(1)
                        ->paginate(12);

                    return view('PublicPages.gallery')
                        ->with('category',$category)
                        ->with('images',$images);
                }
                elseif($category->type == 1){

                    $products=Product::whereHas('categories',function($q) use($category){
                            $q->where('category_id',$category->id);
                        })
                        ->where('status',1)
                        ->paginate(100000);
                    
                     $visual['vis']=DB::table('visuals')->get();
                        
                    return view('PublicPages.category',$visual)
                        ->with('category',$category)
                        ->with('products',$products)
                        ->with('categories',Category::where('status',1)->where('type',1)->orderBy('id','ASC')->get());
                    }
                    elseif($category->type == 2){
                        $blogs=Blog::whereHas('categories',function($q) use($category){
                            $q->where('category_id',$category->id);
                        })
                        ->where('status',1)
                        ->paginate(15);

                        return view('PublicPages.blogs')
                            ->with('category',$category)
                            ->with('blogs',$blogs)
                            ->with('categories',Category::where('status',1)->where('type',2)->get());
                    }
                }
                return abort(404);
            }
            elseif($slug->type==5){
                //division
                $division=Division::where('slug',$data)
                    ->where('id',$slug->slugid)
                    ->where('status',1)
                    ->first();
                if($division != NULL){
                    return view('PublicPages.division')
                        ->with('division',$division);
                }
                return abort(404);
            }
        }
        if($data == "contact-us"){
            return view('PublicPages.contactus');
        }

        return abort(404);
    }
}
