@extends('layouts.master')
@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  @formBox([
	  	'title' => 'Edit Teacher',
	  	'route' => 'admin.teacher.store',
	  	'model' => $teacher,
	  ])
		  @slot('include')
		    @include('backend.teacher.form')
		  @endslot
	  @endformBox
	</div>
	@endsection