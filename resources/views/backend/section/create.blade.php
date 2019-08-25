@extends('layouts.master')
@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  @formBox([
	  	'title' => 'Create Section',
	  	'route' => 'admin.section.store'
	  ])
		  @slot('include')
		    @include('backend.section.form')
		  @endslot
	  @endformBox
	</div>
@endsection