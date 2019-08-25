@extends('layouts.master')
@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  @formBox([
	  	'title' => 'Create Class',
	  	'route' => 'admin.grade.store'
	  ])
		  @slot('include')
		    @include('backend.grade.form')
		  @endslot
	  @endformBox
	</div>
@endsection