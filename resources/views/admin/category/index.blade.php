@extends('admin.layout.main')

@section('page_title',trans('labels.categories'))

@section('content')

	<section id="contenxtual">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h4 class="card-title">{{trans('labels.categories')}}
	                    	@if(Auth::user()->type == 1)
		                        <a href="{{ URL::to('/admin/categories/add')}}" class="btn btn-primary btn-sm float-right">{{ trans("labels.add_new") }}</a>
		                    @endif
	                  </h4>
	                </div>
	                <div class="card-body">

	                    <div class="card-block">

	                    	@include('admin.category.category_table')
	                        
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

@endsection
@section('scripts')
	<script src="{{asset('resources/views/admin/category/category.js')}}" type="text/javascript"></script>
@endsection