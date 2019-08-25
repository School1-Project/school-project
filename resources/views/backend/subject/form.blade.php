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

@textInput([
	'name' => 'publication' ,
	'label' => 'Publication' ,
	'placeholder' => 'Enter Publisher',
])
@endtextInput

@textInput([
	'name' => 'author' ,
	'label' => 'Author' ,
	'placeholder' => 'Enter Author',
])
@endtextInput

