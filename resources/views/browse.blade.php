<!-- browse.blade.php -->
<div class="container">
<div class="row justify-content-center">
	<table id="catalogTable" class="table display back1" style="width:100%">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Title</th>
				<th scope="col">Author</th>
				<th scope="col">Genre</th>
				<th scope="col">Library Section</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($book_list as $book)
			<tr>
				<td>{{$book->id}}</td>
				<td>{{$book->title}}</td>
				<td>{{$book->author}}</td>
				<td>{{$book->genre}}</td>
				<td>{{$book->section}}</td>
				<td><a onclick='Borrow("{{$book->id}}","{{$book->title}}","{{$book->author}}","{{$book->genre}}","{{$book->section}}")' data-toggle="modal" data-target="#editBookModal" style="color:green;"><i class="fas fa-book-open"></i></a> <a onclick='Edit("{{$book->id}}","{{$book->title}}","{{$book->author}}","{{$book->genre}}","{{$book->section}}")' data-toggle="modal" data-target="#editBookModal" style="color:blue;"><i class="fas fa-pencil-alt"></i></a> <a onclick='Delete2("{{$book->id}}","{{$book->title}}","{{$book->author}}","{{$book->genre}}","{{$book->section}}")' data-toggle="modal" data-target="#editBookModal" style="color: darkred"><i class="fas fa-trash-alt"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>

<!-- The Modal -->
<div class="modal" id="editBookModal">
  <div class="modal-dialog">
    <div class="modal-content" id="modal-ajax">

    </div>
  </div>
</div>



<script>

$(document).ready(function(){
	 $('#catalogTable').DataTable();
});
</script>