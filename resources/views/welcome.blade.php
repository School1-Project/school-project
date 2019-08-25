@extends('layouts.master')
@section('content')
	@box([
	  	'title' => 'Class Routine',
	  ])
		  @slot('include')
		   	<div id ="example-component">
			</div>
		  @endslot
	  @endbox
        <script src="{{ asset('js/app.js') }}" defer></script>
@endsection


