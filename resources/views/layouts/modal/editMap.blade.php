<!-- Modal -->
<div class="modal fade" id="editSeatMap" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Seat Map</h5>
            <button type="button" class="btn-close" data-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form action="{{ route('seatmap.update', $seat->Shop_Id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <label for="validationCustomUsername">Image:</label><br>
                <input type="file" name="S_Table" /><br>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-success mb-3">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
<!--endModal-->