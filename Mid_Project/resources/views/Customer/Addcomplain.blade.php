<form action="{{ route('Addcomplain') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row ">
            <div class="form-group">
                <label for="">hotelname</label>
                    <input type="text" name="hotel" placeholder="hotelname" class="form-control">
                </div>
                <br>
                <div class="form-group">
                <label for="">complain</label>
                    <input type="text" name="complain" placeholder="complain" class="form-control">
                </div>          
                               
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>

            </div>
            </div>
</form>