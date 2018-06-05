<!-- deleteModal.blade.php -->
<!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Are You Sure?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form method="POST" action="deleteBook">
      @csrf
      <div class="modal-body">
      	You are about to delete this book:<br>
      	<input type="text" name="id" value="{{$id}}" hidden>
        Id: {{$id}} <br>
        Title: {{$title}} <br>
        Author: {{$author}} <br>
        Genre: {{$genre}} <br>
        Library Section: {{$section}} <br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="submit" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  	</form>