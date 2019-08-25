@extends('layouts.master')
@section('content')
					
@dataTable([
	'title' => 'Student Table',
	'tableClass' => 'table table-striped table-hover',
	'id' => 'kt_table_1',
	'route' => 'menu-list'
])
	@slot('thead')
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Class</th>
				<th>Section</th>
				<th>Action</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $student->user->name }}</td>
					<td>{{ $student->user->email }}</td>
					<td>{{ $student->address }}</td>
					<td>{{ $student->gender }}</td>
					<td>{{ $student->class }}</td>
					<td>{{ $student->section }}</td>
					<td>{{ $student->address }}</td>
					
				</tr>
			@endforeach
		</tbody>
	@endslot
@enddataTable
@endsection