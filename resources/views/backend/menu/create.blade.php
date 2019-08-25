@extends('layouts.master')
@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  @formBox([
	  	'title' => 'Create Menu',
	  	'route' => 'store'
	  ])
		  @slot('include')
		    @include('backend.menu.form')
		  @endslot
	  @endformBox
	</div>
	@endsection