@extends('layouts.dashboard')
@section('content')
<div class="col-sm-12 D_header">
    <div class="title">
          <h2>List Categories</h2>

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
              Categories
            </li>
          </ul>
          <div class="pull-right">
              <a href="{{ url('category/create')}}" class="btn_add"><i class="fa fa-plus"></i></a>
          </div>
    </div>
    <div class="portlet-content">
      @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
      @endif
        <table width="100%" id="category-table" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $categories as $category )
                    <tr class="{{ $category->id }}" >
                        <td class="{{ $category->id }}"><a href="{{ url('category')}}/{{ $category->id}}/edit">{{ $category->id }}</a></td>
                        <td class="{{ $category->id }}"><a href="{{ url('category')}}/{{ $category->id}}/edit">{{ $category->name }}</a></td>
                        <td>
                            <a href="{{ url('category') }}/{{ $category->id }}/edit"  class="btn btn-xs btn-primary">
                                <i class="fa fa-pencil"></i> edit
                            </a>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#deleteModal" class="btn btn-xs btn-danger open-cat-delete" value="{{ $category->id }}">
                                <i class="fa fa-trash-o"></i> delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal"   data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class='close-modal'>&times;</span></button>
                    <h4 class="modal-title">Delete Category</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class='row'>
                            <div class="col-md-4">
                                Are you sure to delete this?
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close-modal" >Close</button>
                    <button type="button" class="btn btn-primary delete_cat" data-token="{{ csrf_token() }}">Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@endsection
