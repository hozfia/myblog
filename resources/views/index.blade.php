@extends('layouts.app')
@section('content')
<div class = "container">
<h2>list of articals : </h2>
@foreach($artecls as $art)
<div class="card" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">{{$art->title}}</h5>
    <a href= /show/{{$art->id}} class="btn btn-primary">See More ... </a>
  </div>
</div>
@endforeach
</div>
{{ $artecls->links() }}
@endsection('content') 