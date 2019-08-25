@table([
	'title' => 'Earlier Bonuses',
	'tableClass' => 'table table-striped table-hover',
])
	@slot('thead')
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Bonus Date</th>
				<th>Amount/Percentage</th>
				<th>Equivalent Amount</th>
				<th>Threshhold Days</th>
				<th>Duration</th>
				<th>Status</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($bonuses as $bonus)
				@if($bonus->date_to_receive < Carbon\Carbon::now() && $bonus->date_to_receive > $teacher->date_of_joining)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$bonus->name}}</td>
						<td>{{$bonus->date_to_receive}}</td>
						<td>{{$bonus->amount. ' ( '. $bonus->type .' ) ' }}</td>
						<td>
							@if($bonus->type === '%')
								{{ ($bonus->amount * $teacher->salary) / 100}}
							@else
								{{ $bonus->amount }}
							@endif
						</td>
						<td>
							@badge([ 'class' => 'kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
								@slot('data')
									{{$bonus->threshhold_duration}}
								@endslot
							@endbadge
						</td>
						<td>
							@if( ($duration = duration($teacher->date_of_joining,$bonus->date_to_receive,true)) < $bonus->threshhold_duration)
								@badge([ 'class' => 'kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
							@else
								@badge([ 'class' => 'kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
							@endif
								@slot('data')
									{{ $duration}}
								@endslot
							@endbadge
						</td>
						<td>
							@if( (duration($teacher->date_of_joining,$bonus->date_to_receive,true)) < $bonus->threshhold_duration)
								@badge([ 'class' => 'kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
									@slot('data')
										Not Eligible
									@endslot
								@endbadge
							@else
								@badge([ 'class' => 'kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
									@slot('data')
										Eligible
									@endslot
								@endbadge
							@endif
						</td>
					</tr>
				@endif
			@endforeach
		</tbody>
	@endslot
@endtable


@table([
	'title' => 'Upcoming Bonuses',
	'tableClass' => 'table table-striped table-hover',
])
	@slot('thead')
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Bonus Date</th>
				<th>Amount/Percentage</th>
				<th>Equivalent Amount</th>
				<th>Threshhold Days</th>
				<th>Duration</th>
				<th>Status</th>
			</tr>
		</thead>
	@endslot
	@slot('tbody')
		<tbody>
			@foreach($bonuses as $bonus)
				@if($bonus->date_to_receive >= Carbon\Carbon::now())
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$bonus->name}}</td>
						<td>{{$bonus->date_to_receive}}</td>
						<td>{{$bonus->amount. ' ( '. $bonus->type .' ) ' }}</td>
						<td>
							@if($bonus->type === '%')
								{{ ($bonus->amount * $teacher->salary) / 100}}
							@else
								{{ $bonus->amount }}
							@endif
						</td>
						<td>
							@badge([ 'class' => 'kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
								@slot('data')
									{{$bonus->threshhold_duration}}
								@endslot
							@endbadge
						</td>
						<td>
							@if( ($duration = duration($teacher->date_of_joining,$bonus->date_to_receive,true)) < $bonus->threshhold_duration)
								@badge([ 'class' => 'kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
							@else
								@badge([ 'class' => 'kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
							@endif
								@slot('data')
									{{ $duration}}
								@endslot
							@endbadge
						</td>
						<td>
							@if( (duration($teacher->date_of_joining,$bonus->date_to_receive,true)) < $bonus->threshhold_duration)
								@badge([ 'class' => 'kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
									@slot('data')
										Not Eligible
									@endslot
								@endbadge
							@else
								@badge([ 'class' => 'kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded kt-badge--lg'])
									@slot('data')
										Eligible
									@endslot
								@endbadge
							@endif
						</td>
					</tr>
				@endif
			@endforeach
		</tbody>
	@endslot
@endtable