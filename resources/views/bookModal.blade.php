<!-- bookModal.blade.php -->
 <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Book Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form method="POST" action="setBorrow">
      @csrf
      <div class="modal-body">
      	<input type="text" name="id" value="{{$id}}" hidden>
        Id: {{$id}} <br>
        Title: {{$title}} <br>
        Author: {{$author}} <br>
        Genre: {{$genre}} <br>
        Library Section: {{$section}} <br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Set as Borrowed</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
  	</form>