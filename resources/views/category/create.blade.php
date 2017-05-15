@extends('layouts.dashboard')

@section('content')
<div class="col-sm-12 D_header">
    <div class="title">
          <h2>Categories</h2>
    </div>
</div>
<div class="portlet  col-sm-12">
    <div class="portlet-title">
      <ul class="page-breadcrumb">
            <li>
              <i class="fa fa-home"></i>
              Dashboard
              <i class="fa fa-angle-right"></i>
            </li>
            <li>
              <a href="{{ url('category') }}">Categories</a>
              <i class="fa fa-angle-right"></i>
            </li>
            <li>
                create category
            </li>
          </ul>
          <div class="pull-right">
              <a href="{{ url('category')}}" class="btn_add"><i class="fa fa-arrow-left"></i></a>
          </div>
    </div>
    <div class="portlet-content">
        {!! Form::open(array('url'=> 'category','method'=>'POST', 'class' => 'form-horizontal article_form')) !!}
            @include('errors.form_error')
            @include('category.form', ['submitTextButton' => 'Save'])
        {!! Form::close() !!}
    </div>
</div>

@endsection
