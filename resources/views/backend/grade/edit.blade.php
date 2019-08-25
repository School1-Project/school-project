@extends('layouts.master')
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
      @formBox([
        'title' => 'Edit Class',
        'route' => ['admin.grade.update', $grade->id],
        'model' =>$grade,
        'content'=> [
          'view' => 'backend.grade.form',
          'data' => []
        ]
      ])
      @endformBox
    </div>
@endsection