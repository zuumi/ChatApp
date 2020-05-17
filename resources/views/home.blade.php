@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comment</div>
                <div class="card-body chat-card">
                    <div id="comment-data"></div>
                  <!-- @foreach($comments as $item)
                    @include('components.comment',['item'=>$item])
                  @endforeach -->
                </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{route('add')}}">
    @csrf
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" id="comment" name="comment" placeholder="input massage"
                aria-label="With textarea"></textarea>
            <button type="submit" class="btn btn-outline-primary comment-btn">Submit</button>
        </div>
    </div>
</form>
@endsection

@section('js')
<script src="{{ asset('js/comment.js') }}"></script>
@endsection
