<!-- Modal -->

<form action="{{ route('order.update', $Order->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="modal fade" id="editModal{{$Order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order {{$Order->Tracking_No}}</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="header-title">Order Details</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-light">
                                <tr class>
                                    <th scope="col">Name</th>
                                    <th scope="col">Notes</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            @foreach ($Order->orderitems as $barang)
                            <tbody>
                                <tr>
                                    <td>{{ $barang->items->P_Name }}</td>
                                    <td></td>
                                    <td>{{$barang->Order_Quantity}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Reject</button>
                <button type="button" class="btn btn-success">Accept</button>
            </div>
        </div>
    </div>
</div>
</form>
<!--endModal-->