@extends('layouts.dashboard')

@section('content')
<div class="col-sm-12 D_header">
    <div class="title">
          <h2>Questions</h2>
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
              <a href="{{ url('question') }}">Questions</a>
              <i class="fa fa-angle-right"></i>
            </li>
            <li>
                edit question
            </li>
          </ul>
          <div class="pull-right">
              <a href="{{ url('question')}}" class="btn_add"><i class="fa fa-arrow-left"></i></a>
          </div>
    </div>
    <div class="portlet-content">
      <p>
         * set a correct answer by click on radio button of which answer you think it's the right answer
      </p>
      {!! Form::model($question, ['class' => 'form-horizontal article_form', 'method' => 'PATCH', 'action' => ['QuestionController@update', $question->id] ]) !!}
          @include('errors.form_error')
          @include('question.editform', ['submitTextButton' => 'Save'])
      {!! Form::close() !!}
    </div>
</div>

@endsection
