@extends('layouts.master')
@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  @box([
	  	'title' => 'Teacher Details',
	  ])
		  @slot('include')
		    @include('backend.teacher.detail.basicInfo')
		  @endslot
	  @endbox

	  @box([
	  	'title' => 'Bonus Details',
	  ])
		  @slot('include')
		    @include('backend.teacher.detail.bonusDetail')
		  @endslot
	  @endbox

	  @box([
	  	'title' => 'Class Details',
	  ])
		  @slot('include')
		    @include('backend.teacher.detail.classDetail')
		  @endslot
	  @endbox

	  @box([
	  	'title' => 'Salary Details',
	  ])
		  @slot('include')
		    @include('backend.teacher.detail.bonusDetail')
		  @endslot
	  @endbox

	</div>
	@endsection