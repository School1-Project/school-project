@extends('layouts.master')
@section('content')
					
@dataTable([
	'title' => 'Grade Table',
	'tableClass' => 'table table-striped table-hover',
	'id' => 'kt_table_1',
	'route' => 'menu-list'
])
	@slot('thead')
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($grades as $key=>$grade)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $grade->name }}</td>
					<td>
						@action(['route' => 'grade','id' => $grade->id, 'edit' => true , 'delete' => true, 'details' => false])
                        @endaction
					</td>
					
				</tr>
			@endforeach
		</tbody>
	@endslot
@enddataTable
@endsection