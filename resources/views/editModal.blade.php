<!-- editModal.blade.php -->
<!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Book Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form method="POST" action="edited">
      @csrf
      <div class="modal-body">
      	<div class="container"> 
		        <input class="form-control" id="bookid" type="text" name="bookid" value="{{$id}}" hidden required>
		    	
	    	</div>
	        <div class="row form-group">
		        <label for="title" class="col-form-label col-md-2">Title: </label>
		        <div class="col-md-6">
		        <input class="form-control" id="title" type="text" name="title" value="{{$title}}" required>
		    	</div>
	    	</div>
	    	<div class="row form-group">
		        <label for="author" class="col-form-label col-md-2">Author: </label>
		        <div class="col-md-6">
		        <input class="form-control" id="author" type="text" name="author" value="{{$author}}" required>
		    	</div>
	    	</div>
	    	<div class="row form-group">
		        <label for="genre" class="col-form-label col-md-2">Genre: </label>
		        <div class="col-md-6">
		        <select name="genre" id="genre" class="form-control">
                    <option value="Horror" 
                    @if($genre == "Horror")
                    selected 
                    @else
                    @endif
                    >Horror</option>
                    <option value="Romance"
                    @if($genre == "Romance")
                    selected 
                    @else
                    @endif
                    >Romance</option>
                    <option value="Thriller"
                    @if($genre == "Thriller")
                    selected 
                    @else
                    @endif
                    >Thriller</option>
                    <option value="Action"
                    @if($genre == "Action")
                    selected 
                    @else
                    @endif
                    >Action</option>
                </select>
            	</div>
		    </div>

		    <div class="row form-group">
		        <label for="section" class="col-form-label col-md-2">Section: </label>
		        <div class="col-md-6">
		        <select name="section" id="section" class="form-control">
                    <option value="Circulation"
                    @if($section == "Circulation")
                    selected 
                    @else
                    @endif
                    >Circulation</option>
                    <option value="Periodical Section"
                    @if($section == "Periodical Section")
                    selected 
                    @else
                    @endif
                    >Periodical Section</option>
                    <option value="General Reference"
                    @if($section == "General Reference")
                    selected 
                    @else
                    @endif
                    >General Reference</option>
                    <option value="Children's Section"
                    @if($section == "Children's Section")
                    selected 
                    @else
                    @endif
                    >Children's Section</option>
                    <option value="Fiction"
                    @if($section == "Fiction")
                    selected 
                    @else
                    @endif
                    >Fiction</option>
                </select>
            	</div>
		    </div>
	       
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
  	</form>