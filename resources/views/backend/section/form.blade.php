@textInput([
	'name' => 'name' ,
	'label' => 'Name' ,
	'placeholder' => 'Enter Section Name',
])
@endtextInput

@selectInput([
	'name' => 'class_id',
	'label' => 'Class',
	'value' => $grades,
	'placeholder' => 'Select Class',
])
@endselectInput

@selectInput([
	'name' => 'class_teacher_id',
	'label' => 'Class Teacher',
	'value' => $teachers,
	'placeholder' => 'Select Class Teacher',
])
@endselectInput