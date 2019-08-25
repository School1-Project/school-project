@extends('layouts.master')
@section('content')
					
@dataTable([
	'title' => 'Teacher Table',
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
				<th>Action</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($teachers as $teacher)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $teacher->user->name }}</td>
					<td>{{ $teacher->user->email }}</td>
					<td>{{ $teacher->address }}</td>
					<td>{{ $teacher->gender }}</td>
					<td>
						<ul>
							@foreach($teacher->sections as $section)
								<li>
									{{ $section->grade->name .'('. $section->name .')' }}
								</li>
							@endforeach
						</ul>
					</td>
					<td>
						@action(['route' => 'teacher','id' => $teacher->id, 'edit' => true , 'details' => true])
                        @endaction
					</td>
					
				</tr>
			@endforeach
		</tbody>
	@endslot
@enddataTable
@endsection