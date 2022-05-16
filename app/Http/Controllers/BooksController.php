<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Author;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use Illuminate\Http\Request;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=Books::all();
        return view('books.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create',['author'=>Author::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $authors=Author::find(request()->input('authors'));
          
        $book=Books::create(request(['name','description','isbn']));
       

       $book->authors()->attach($authors);

       return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books , $id)
    {
        $book=Books::find($id);
        $auth=Author::all();
        return view('books.edit',compact('book','auth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books,$id)
    {
        //__find_existing_book__//
        $book=Books::find($id);

        //__find_existing_author
        $authors=$book->authors;

        //__delect_author
        $book->authors()->detach($authors);

        //__update
        $book->update(request(['name','description','isbn']));
        
        //__attach_new_author_insert
        $authors=Author::find(request()->input('authors'));
        $book->authors()->attach($authors);
        return redirect('/books');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
}
