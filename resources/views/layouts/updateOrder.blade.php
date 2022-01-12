<!-- Modal -->
<form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
    {{ method_field('patch') }}
    {{ csrf_field() }}
<div class="modal fade" id="updateModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/catalogue" method="POST" id="editProgress" >
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
                                    <th scope="col">Notes</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $order->created_at }}</td>
                                    <td>No anchovies</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Delivered</button>
            </div>
            </form>
        </div>
    </div>
</div>
</form>
<!--endModal-->