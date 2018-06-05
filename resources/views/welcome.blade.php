@extends('layouts.app')

@section('content')
<div class="container center">
<h1>Rio's Library Catalogue</h1>
<button class="btn btn-secondary" id="browse">Browse</button>
<button class="btn btn-success" id="borrow">Borrowed Books</button>
<button class="btn btn-primary" id="addBooks">Add Books</button>
</div>

<hr>

<span id="content">
	<div class="container center">
	<h1><a href="initialize">Click me to initialize database</a></h1>
	</div>
</span>


@endsection
