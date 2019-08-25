@extends('layouts.master')
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
      @formBox([
        'title' => 'Edit Subject',
        'route' => ['admin.subject.update', $subjects->id],
        'model' =>$subjects,
        'content'=> [
          'view' => 'backend.subject.form',
          'data' => [ 
            'grades' => $grades
          ]
        ]
      ])
      @endformBox
    </div>
@endsection