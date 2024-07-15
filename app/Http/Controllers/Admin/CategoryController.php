<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        // Retrieve all categories from the database
        $categories = DB::table('categories')->get();

        // Pass the retrieved categories to the view
        return view('admin.categories.read', compact('categories'));
    }

    public function create(){
        // Show the form to create a new category
        return view('admin.categories.create');
    }
    public function store(Request $request){
         $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        ]);

        DB::table('categories')->insert($validatedData);
        return redirect()->route('admin.categories.');
    }
    public function destroy($id){
        // Delete a category from the database
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('admin.categories.');
    }
}
