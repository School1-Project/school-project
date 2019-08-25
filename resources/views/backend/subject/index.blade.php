@extends('layouts.master')
@section('content')
					
@dataTable([
	'title' => 'Subject Table',
	'tableClass' => 'table table-striped table-hover',
	'id' => 'kt_table_1',
	'route' => 'menu-list'
])
	@slot('thead')
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Class</th>
				<th>Author</th>
				<th>Publisher</th>
				<th>Action</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($subjects as $key=>$subject)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $subject->name }}</td>
					<td>{{ $subject->grade->name ?? '' }}</td>
					<td>{{ $subject->author }}</td>
					<td>{{ $subject->publication }}</td>
					<td>
						@action(['route' => 'subject','id' => $subject->id, 'edit' => true , 'delete' => true, 'details' => false])
                        @endaction
					</td>
					
				</tr>
			@endforeach
		</tbody>
	@endslot
@enddataTable
@endsection