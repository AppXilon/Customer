@extends('master')
@section('content')

<!-- Page Header Start -->
<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Frequently Asked Questions</h2>
            </div>    
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="panel panel-primary mt-5 ml-10 mr-10">

            <table class="table table-hover">

               
                <tr>
                    <th>Question</th>
                    <th>Anwer</th>
                </tr>
                @foreach ($list as $item)

                <tr>
                    <th>{{$item->Faq_Question }}</th>
                    <td>{{$item->Faq_Answer }}</td>
                </tr>

                @endforeach
                </table>
                </div>

@endsection