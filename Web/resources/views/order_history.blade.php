@extends('master')
@section('content')

<!-- Customer Order History Start -->
<div class="container bootdey">
    <div class="panel panel-default panel-order">
        <div class="panel-heading">
            <strong>Order history</strong>
            <div class="btn-group pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Filter history <i class="fa fa-filter"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Approved orders</a></li>
                        <li><a href="#">Pending orders</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="panel-body">
        @foreach($order as $item)
            <div class="row">
                <div class="col-md-1">
                    <a href="history_detail/{{$item->id}}"><span><strong>{{$item->Tracking_No}}</strong></span><br /></a>
                </div>
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right"><label class="label label-success">success</label></div>
                            Total Price: RM{{$item->O_Total_Price}} <br />
                        </div>
                        <div class="col-md-12">Order made on: {{$item->created_at}}</div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection