@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">
               {{$post->title}}
                </div>

                <div class="card-body">

{{$post->body}}
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
