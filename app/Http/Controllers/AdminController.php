<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Flasher\Laravel\Facade\Flasher;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }
    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->closeButton()->timeout(5000)->success('Category added successfully!');
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->closeButton()->timeout(5000)->success('Category deleted successfully!');
        return redirect()->back();
    }
    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }
    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();

        toastr()->closeButton()->timeout(5000)->success('Category Updated successfully!');
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }


    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $data->image = $imagename;
        }
          toastr()->closeButton()->timeout(5000)->success('Product Added successfully!');
        $data->save();

        return redirect()->back();
    }



    public function view_product()
    {
        $product = Product::paginate(4);

        return view('admin.view_product', compact('product'));
    }

    public function delete_product($id)
    
    {
        $data = Product::find($id);
        $image_path = public_path('products/' .$data->image);
        if(file_exists($image_path))
        {

            unlink($image_path);
        }

        $data->delete();

        toastr()->closeButton()->timeout(5000)->success('Product deleted successfully!');

        return redirect()->back();

    }
    public function update_product($id){

        $data = Product::find($id);
        $category = Category::all();

        return view('admin.update_product', compact('data', 'category'));

    }
    public function edit_product(Request $request, $id)  {

        $data = Product::find($id);
        $data->title = $request->title;
        $data->Description = $request->Description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $imagename);

            $data->image = $imagename;
        }
        $data->save();
        toastr()->closeButton()->timeout(5000)->success('Product Updated successfully!');
        return redirect('/view_product');
    }
    public function product_search(Request $request){
        $search= $request->search;
        $product = Product::where('title', 'LIKE', '%'.$search.'%')-> 
        orWhere('category', 'LIKE', '%'.$search.'%')->
        paginate(3);
        return view('admin.view_product', compact('product'));


    }
    public function view_order(){


        $data = Order::all();
        return view('admin.order', compact('data'));
    }
    public function on_the_way($id) {
        
        $data = Order::find($id);
        $data->status = 'on the way';
        $data->save();
        return redirect('view_order');
    }

    public function delivered($id) {
        
        $data = Order::find($id);
        $data->status = 'delivered';
        $data->save();
        return redirect('view_order');
    }
    
}
