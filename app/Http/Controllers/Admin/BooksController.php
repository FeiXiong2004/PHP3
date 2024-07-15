<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(){

        $books = DB::table('books')->get();
        return view('admin.products.read', compact('books'));
    }

    public function create(){
        $categories = DB::table('categories')->get();
        return view('admin.products.create',compact('categories'));
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'publication' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|integer'
        ]);
    
        // Sử dụng Query Builder để thêm dữ liệu vào bảng books
         DB::table('books')->insert($validatedData);
        return redirect()->route('admin.books.');
    }
    public function edit($id){
        $categories = DB::table('categories')->get();
        $book = DB::table('books')->where('id', $id)->first();
        // dd($book);
        return view('admin.products.update', compact('book', 'categories'));

       
        
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'publication' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|integer'
        ]);
    
        // Sử dụng Query Builder để thêm dữ liệu vào bảng books
         DB::table('books')->where('id',$id)->update($validatedData);
        return redirect()->route('admin.books.');
    }

    public function destroy($id){
       

       DB::table('books')->where('id', $id)->delete();
        return redirect()->route('admin.books.');
    }

}
