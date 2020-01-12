<!-- The Modal -->
    <div class="modal" id="pictureAdd">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add photo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="">
                
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTitle">Title</label>
                            <input type="text" class="form-control" name="title-picture" id="inputTitle" >
                            <p class="error-message">{{ $errors->first('title-picture') }}</p>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAlbum">Album</label>
                            <input type="text" class="form-control" name="album" id="inputAlbum">
                            <p class="error-message">{{ $errors->first('album') }}</p>
                        </div>


                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" >Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>

            </div>
        </div>
    </div>
