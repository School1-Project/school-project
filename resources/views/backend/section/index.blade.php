@extends('layouts.master')
@section('content')
					
@dataTable([
	'title' => 'Section Table',
	'tableClass' => 'table table-striped table-hover',
	'id' => 'kt_table_1',
	'route' => 'menu-list'
])
	@slot('thead')
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Class</th>
				<th>Action</th>
				<th>Action1</th>
				<th>Action2</th>
				<th>Action3</th>
				<th>Action4</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($sections as $section)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $section->name }}</td>
					<td>{{ $section->class->name }}</td>
					<td>{{ $section->name }}</td>
					<td>{{ $section->name }}</td>
					<td>{{ $section->name }}</td>
					<td>{{ $section->name }}</td>	
					<td>{{ $section->name }}</td>				
				</tr>
			@endforeach
		</tbody>
	@endslot
@enddataTable
@endsection