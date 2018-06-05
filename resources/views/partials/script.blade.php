<!-- script.blade.php -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>



<script>

$(document).ready(function(){
    $("#addBooks").click(function(){
        $("#content").load("addBooks");
    });

    $("#browse").click(function(){
        $("#content").load("browse");
    });

    $("#borrow").click(function(){
        $("#content").load("borrow");
    });

    @if(session('success')==1)
        $("#content").load("addBooks");
        $("#successModal").modal('show');
        {{session(['success' => 0])}};
    @endif

    @if(session('successBorrow')==1)
        $("#content").load("browse");
        $("#successModal").modal('show');
        {{session(['successBorrow' => 0])}};
    @endif

    @if(session('successReturn')==1)
        $("#content").load("borrow");
        $("#successModal").modal('show');
        {{session(['successReturn' => 0])}};
    @endif

    $('#catalogTable').DataTable();

});

function Borrow(id,title,author,genre,section) {
    
    $.post("/bookmodal", {
        id:id,
        title:title,
        author:author,
        genre:genre,
        section:section,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
    	});
}

function Return(id,title,author,genre,section) {
    
    $.post("/bookreturnmodal", {
        id:id,
        title:title,
        author:author,
        genre:genre,
        section:section,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
    	});
}

function Edit(id,title,author,genre,section) {
    
    $.post("/editmodal", {
        id:id,
        title:title,
        author:author,
        genre:genre,
        section:section,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
    	});
}

function Delete2(id,title,author,genre,section) {
    
    $.post("/deletemodal", {
        id:id,
        title:title,
        author:author,
        genre:genre,
        section:section,
        _token: $('meta[name="csrf-token"]').attr('content')},
        function(data,status){
            $('#modal-ajax').html(data)   
    	});
}

</script>