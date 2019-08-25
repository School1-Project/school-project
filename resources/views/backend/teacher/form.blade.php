@textInput([
	'name' => 'name' ,
	'label' => 'Name' ,
	'placeholder' => 'Enter Teacher Name',
])
@endtextInput

@emailInput([
	'name' => 'email' ,
	'label' => 'Email' ,
	'placeholder' => 'Enter Teacher Email',
])
@endemailInput

@selectInput([
	'name' => 'gender',
	'label' => 'Gender',
	'value' => ['a','b'],
	'placeholder' => 'Enter Gender',
])
@endselectInput

@textInput([
	'name' => 'salary' ,
	'label' => 'Salary' ,
	'placeholder' => 'Enter Salary',
])
@endtextInput

@textInput([
	'name' => 'contact' ,
	'label' => 'Contact' ,
	'placeholder' => 'Enter Contact',
])
@endtextInput

@multiSelectInput([
	'name' => 'bonus_id',
	'label' => 'Bonus',
	'value' => ['a','b'],
	'placeholder' => 'Enter Bonus',
	'id' => 'bonus',
	'multiple' => true,
])
@endmultiSelectInput

@datePicker([
	'name' => 'date_of_joining' ,
	'label' => 'Date of Joining' ,
	'placeholder' => 'Select Date',
])
@enddatePicker

@textInput([
	'name' => 'address' ,
	'label' => 'Address' ,
	'placeholder' => 'Enter Teacher Address',
])
@endtextInput

@multiSelectInput([
	'name' => 'section_id[]',
	'label' => 'Section',
	'value' => $sections,
	'placeholder' => 'Enter Section',
	'multiple' => true,
	'id' =>'section'
])
@endmultiSelectInput

@multiSelectInput([
	'name' => 'subject_id',
	'label' => 'Subject',
	'value' => ['a','b'],
	'placeholder' => 'Enter Subject',
	'multiple' => true,
	'id' =>'subject'
])
@endmultiSelectInput

