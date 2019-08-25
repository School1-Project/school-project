@textInput([
	'name' => 'name' ,
	'label' => 'Name' ,
	'placeholder' => 'Enter Student Name',
])
@endtextInput

@emailInput([
	'name' => 'email' ,
	'label' => 'Email' ,
	'placeholder' => 'Enter Student Email',
])
@endemailInput

@selectInput([
	'name' => 'gender',
	'label' => 'Gender',
	'value' => ['Male','Female','Others'],
	'placeholder' => 'Enter Gender',
])
@endselectInput

@textInput([
	'name' => 'address' ,
	'label' => 'Address' ,
	'placeholder' => 'Enter Student Address',
])
@endtextInput
 
@numberInput([
	'name' => 'rank',
	'label' => 'Rank',
	'placeholder' => 'Enter Student Rank',
	'id' => 'rank'
])
@endnumberInput

@selectInput([
	'name' => 'scholarship_criteria_id',
	'label' => 'Scholarship Criteria',
	'value' => ['a','b'],
	'placeholder' => 'Enter Scholarship Criteria',
])
@endselectInput

@selectInput([
	'name' => 'class_id',
	'label' => 'Class',
	'value' => ['a','b'],
	'placeholder' => 'Enter Class',
])
@endselectInput

@selectInput([
	'name' => 'section_id',
	'label' => 'Section',
	'value' => ['a','b'],
	'placeholder' => 'Enter Section',
])
@endselectInput

@multiSelectInput([
	'name' => 'parent_id',
	'label' => 'Parent',
	'value' => ['a','b'],
	'placeholder' => 'Enter Your Parent',
	'id' => 'parent',
	'multiple' => false,
])
@endmultiSelectInput

@checkBoxInput([
	'name' => 'is_bus',
	'label' => 'Is Bus',
])
@endcheckBoxInput

@checkBoxInput([
	'name' => 'is_hostel',
	'label' => 'Is Hostel',
])
@endcheckBoxInput