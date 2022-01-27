<!-- Modal -->


<div class="modal fade" id="viewBooking{{ $Booking->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/updateBooking/{{ $Booking->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <h4 class="header-title">Order Details</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-light">
                                    <tr class>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>
                                @foreach ($Booking->orderitems as $OrderProduct)
                                    <tbody>
                                        <tr>
                                            <td>{{ $OrderProduct->items->P_Name }}</td>
                                            <td>{{ $OrderProduct->Order_Quantity }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                
                            </table>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Notes:</label>
                                <input class="form-control" type="text"
                                    value="{{ $Booking->O_Notes }}" id="example-text-input" readonly>
                            </div>
                            <input type="hidden" value="{{ $Booking->O_Status + 1 }}" name="O_Status">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Start Preparing</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--endModal-->
