@extends('layouts.frontend')

@section('content')
<div class="container clearfix">
  <div class="list-category col-md-12">
      @foreach ($categories as $c)
          <div class="col-md-4 col-xs-12">
              <span> <a href="{{url('/')}}/type/<?php echo strtolower($c->name);?>">{{$c->name}}</a></span>
          </div>
      @endforeach
  </div>
</div>
@endsection
