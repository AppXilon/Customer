@extends('master')
@section('content')

<!-- Search Display Product Start -->

<h2 class="widget-title">Product Search Result</h2>
<div class="recent-post">
    <div class="post-item">
        @foreach($product as $item)
        <div class="post-img">
            <img src="{{$item['P_Image']}}" />
        </div>
        <div class="post-text">
            <a href="detail/{{$item['id']}}">{{$item['P_Name']}}</a>
    </div>
        @endforeach
    </div>
</div>

<!-- Search Display Product End -->
@endsection
