<!-- Modal -->


<div class="modal fade" id="createSeat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Seat</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <form action="{{ route('seatmap.update', $tables->T_Id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Seat Number:</label>
                                <input type="text" class="form-control" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" name="T_Id"
                                    Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Table Pax:</label>
                                <input type="text" class="form-control" id="validationCustomUsername"
                                   aria-describedby="inputGroupPrepend" name="T_Pax"
                                    Required>
                            </div>
                        </div>
                        @foreach ($seatmap as $seats)
                        <input type="hidden" value="{{ $seats->Shop_Id}}" name="Shop_Id">
                        @endforeach
                </div>

                <div class="modal-footer">
                    <button type="submit" style="float: right; margin-right: 10px" class="btn btn-success mb-3"
                            name="upload">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--endModal-->
