<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index (){
        $categories= Category::all();
        return view('admin.Categories.allCategories',['categories'=> $categories]);
    }

    public function store (Request $request){

$request->validate([
    'name' => 'required',
    'image' => 'required'
]);
$imageName=md5(microtime()).$request->image->getClientOriginalName();
$request->image->storeAs("public/imgs",$imageName);
Category::create([
    'name' => $request->name,
    'image' => $imageName,

]);
        return back();
    }

    public function edit(Category $id){
        $categories= Category::all();
        return view('admin.Categories.allCategories',['category'=>$id , 'categories'=>$categories]);

    }
    public function update(Request $request, Category $id){
        $categories= Category::all();

        if($request->image ){

            $imageName=md5(microtime()).$request->image->getClientOriginalName();
            $request->image->storeAs("public/imgs",$imageName);
            Category::where('id',$id->id)->update(
                [ 'name'=> $request->name,
                'image'=> $imageName,

            ]);
        }else{
            Category::where('id',$id->id)->update(
                [ 'name'=> $request->name,

            ]);
        }
        return redirect(route('categories.index' ,[ 'categories'=>$categories]));

    }

    public function destroy(Category $id){

        Category::where('id',$id->id)->delete();

        return back();

    }

}
