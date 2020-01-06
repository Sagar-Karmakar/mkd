<!-- The Modal -->
    <div class="modal" id="pictureChange">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('profile.picture.update',$user->user_name) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
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
