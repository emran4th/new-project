<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use RealRashid\SweetAlert\Facades\Alert;




class customController extends Controller
{

    public function home(){
        return view('user.home.home');
    }
    public function contact(){
        return view('user.home.contact');
    }
    public function post(){
        return view('user.post.writepost');
    }
    public function AddCategory(){
        return view('user.post.addcategory');
    }
    public function AllCategory(){
        $category=DB::table('categories')->get();
        return view('user.post.AllCategory',compact('category'));
//        return response()->json($category);
    }
    public function StoreCategory(Request $request)
    {
       $this->validate($request,[
        'catname'=>'required|min:6',
            'slugname'=>'required|min:3',

        ]);

        $data=array();
        $data['name']=$request->catname;
        $data['slug']=$request->slugname;
        $category=DB::table('categories')->insert($data);
//        return response()->json($data);

//        $request->session()->flash('','');


//        Session()->flash('success_done','successfully inserted');
//        $request->Session()->flash('notif', 'successfully added');
        Alert::success('Successfully Inserted', 'Category');
//        Alert::question('Question Title', 'Question Message');




        return redirect()->route('AddCategory');



    }
    public function ViewCategory($id)

    {
        $category=DB::table('categories')->where('id',$id)->first();
        return view('user.post.viewCategory')->with('emran',$category);
//        return response()->json($category);


    }



}
