@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comment</div>
                <div class="card-body chat-card">
                  @foreach($comments as $item)
                    @include('components.comment',['item'=>$item])
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{route('add')}}" method="post">
  @csrf
  <div class="comment-container row justify-content-center">
    <div class="input-group comment-area">
      <textarea class="form-control" id="comment" name="comment" placeholder="input message" aria-label="With textarea"></textarea>
      <button type="submit" class="btn btn-outline-primary comment-btn">送信</button>
    </div>
  </div>
</form>
@endsection
