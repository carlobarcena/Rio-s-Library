<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Book;

class Magic extends Controller
{
	function initial(){

	// Refresh Database
    Artisan::call('migrate:refresh');
    	
	$genre = ['Horror','Action','Romance','Thriller'];
	$section = ['Circulation','Periodical Section','General Reference',"Children's Section",'Fiction'];
    //Create 100 Books
    for($i=1;$i<101;$i++){
    $title[$i]='BookTitle' . $i;
	$book = new Book();
	$book->title = $title[$i];
	$book->author = 'Carlo';
	$book->genre = $genre[rand(0,3)];
	$book->section = $section[rand(0,4)];
	$book->save();
	}

	// Faker Mechanics
	Artisan::call('db:seed', [
         '--class' => 'AuthorTableSeeder'
    ]);

	session(['successBorrow' => 1]);
	return redirect('/');
	}
}
