@extends('layouts.dashboard')
@section('content')
<div class="col-sm-12 D_header">
    <div class="title">
          <h2>Import / Export</h2>

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
              Import/Export
            </li>
          </ul>
    </div>
    <div class="portlet-content">
        <div class="col-sm-6">
            <a class="btn btn-primary col-sm-12" href="#">Import</a>
        </div>
        <div class="col-sm-6">
            <div class = "btn-group col-sm-12">
                <button type = "button" class = "btn btn-primary dropdown-toggle col-sm-12" data-toggle = "dropdown">
                    Export
                    <span class = "caret"></span>
                </button>
                <ul class = "dropdown-menu" role = "menu">
                    <li><a href = "#">By Category</a></li>
                    <li class = "divider"></li>
                    <li><a href = "#">By Date</a></li>
                </ul>
          </div>
    </div>
</div>

@endsection
