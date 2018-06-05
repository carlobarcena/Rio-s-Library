<!-- addBooks.blade.php -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header grey">Add Book</div>

                <div class="card-body">
                    <form method="POST" action="catalogue">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-sm-4 col-form-label text-md-right">Author</label>
                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-sm-4 col-form-label text-md-right">Genre</label>
                            <div class="col-md-6">
                                <select name="genre" id="genre" class="form-control">
                                    <option value="Horror">Horror</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Thriller">Thriller</option>
                                    <option value="Action">Action</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="section" class="col-sm-4 col-form-label text-md-right">Library Section</label>
                            <div class="col-md-6">
                                <select name="section" id="section" class="form-control">
                                    <option value="Circulation">Circulation</option>
                                    <option value="Periodical Section">Periodical Section</option>
                                    <option value="General Reference">General Reference</option>
                                    <option value="Children's Section">Children's Section</option>
                                    <option value="Fiction">Fiction</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




