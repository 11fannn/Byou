<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\models\Category;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();
        return view('books', ['books' =>$books]);
    }

    public function add()
    {
        $categories = Category::all();
        return view ('book-add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
        'book_code' => 'required|unique:books|max:255 ',
        'title' => 'required|max:255'
         ]);
         $newName = '';
         if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->move(public_path('cover'),$newName);

         }
         $request['cover'] = $newName;
         $book = Book::create($request->all());
         $book->categories()->sync($request->categories);
         return redirect('books')->with('status','Book Added Susccessfully ');



    }

    public function edit($slug)
    {
        $book = Book::where('slug',$slug)->first();
        $categories = Category::all();
        return view('book-edit',['categories'=> $categories, 'book'=>$book]);
    }

    public function update(Request $request, $slug)
    {
        $newName = '';

        if($request->file('image')) {
           $extension = $request->file('image')->getClientOriginalExtension();
           $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
           $request->file('image')->move(public_path('cover'),$newName);

        }

        if($request->categories){
            $book->categories()->sync($request->categories);


        }


        $newName['cover'] = $newName;

        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());

    }

}

