@extends('layouts.master')
@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  @formBox([
	  	'title' => 'Create Subject',
	  	'route' => 'admin.subject.store'
	  ])
		  @slot('include')
		    @include('backend.subject.form')
		  @endslot
	  @endformBox
	</div>
@endsection