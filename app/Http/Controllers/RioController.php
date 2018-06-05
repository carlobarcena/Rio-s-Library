<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class RioController extends Controller
{
    function addBook(Request $request){
    	$title = $request->title;
    	$author = $request->author;
    	$genre = $request->genre;
    	$section = $request->section;

    	$book_obj = new Book;
    	$book_obj->title = $title;
    	$book_obj->author = $author;
    	$book_obj->genre = $genre;
    	$book_obj->section = $section;
    	$book_obj->save();
    	session(['success' => 1]);
    	return redirect('/');
    }

    function showBook(){
    	$book_list = Book::where('borrowed',0)->get();
    	//dd($book_list);
    	return view('browse',compact('book_list'));
    }
    function showBorrow(){
    	$book_list = Book::where('borrowed',1)->get();
    	//dd($book_list);
    	return view('borrow',compact('book_list'));
    }

    function editBook(Request $request){
    	$id = $request->id;
    	$title = $request->title;
    	$author = $request->author;
    	$genre = $request->genre;
    	$section = $request->section;

    	return view('bookModal',compact('id','title','author','genre','section'));
    }

    function returnBook(Request $request){
    	$id = $request->id;
    	$title = $request->title;
    	$author = $request->author;
    	$genre = $request->genre;
    	$section = $request->section;

    	return view('bookreturnModal',compact('id','title','author','genre','section'));
    }

    function setBorrow(Request $request){
    	$id = $request->id;
    	$book = Book::find($id);
    	$book->borrowed = 1;
    	$book->save();

    	session(['successBorrow' => 1]);
    	return redirect('/');
    }

    function setReturn(Request $request){
    	$id = $request->id;
    	$book = Book::find($id);
    	$book->borrowed = 0;
    	$book->save();

    	session(['successReturn' => 1]);
    	return redirect('/');
    }

    function editDetails(Request $request){
    	$id = $request->id;
    	$title = $request->title;
    	$author = $request->author;
    	$genre = $request->genre;
    	$section = $request->section;

    	return view('editModal',compact('id','title','author','genre','section'));
    }
    function editDetails2(Request $request){
    	$id = $request->bookid;
    	$title = $request->title;
    	$author = $request->author;
    	$genre = $request->genre;
    	$section = $request->section;
    	
    	$book = Book::find($id);
    	$book->title = $title;
    	$book->author = $author;
    	$book->genre = $genre;
    	$book->section = $section;
    	$book->save();
    	
    	session(['successBorrow' => 1]);
    	return redirect('/');
    }

    function deleteBook(Request $request){
    	$id = $request->id;
    	$title = $request->title;
    	$author = $request->author;
    	$genre = $request->genre;
    	$section = $request->section;

    	return view('deleteModal',compact('id','title','author','genre','section'));
    }

    function deleteBook2(Request $request){
    	$id = $request->id;
    	$book = Book::find($id);
		$book->delete();

		session(['successBorrow' => 1]);
    	return redirect('/');
    }
}
