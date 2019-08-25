@extends('layouts.master')
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
      @formBox([
        'title' => 'Edit Student',
        'route' => 'admin.student.store'
      ])
          @slot('include')
            @include('backend.student.form')
          @endslot
      @endformBox
    </div>
    @endsection