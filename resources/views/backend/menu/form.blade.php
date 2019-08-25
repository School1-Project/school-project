@textInput([
	'name' => 'name' ,
	'label' => 'Name' ,
	'placeholder' => 'Enter Menu Name',
])
@endtextInput

@textInput([
	'name' => 'routes' ,
	'label' => 'Route' ,
	'placeholder' => 'Enter Menu Route',
])
@endtextInput


@selectInput([
	'name' => 'parent_id',
	'label' => 'Parent',
	'value' => $menu,
	'placeholder' => 'Enter Parent',
])
@endselectInput

@textInput([
	'name' => 'icon' ,
	'label' => 'Menu Icon' ,
	'placeholder' => 'Enter Menu Icon',
])
@endtextInput
 
@numberInput([
	'name' => 'order',
	'label' => 'Order',
	'placeholder' => 'Enter Menu Order',
	'id' => 'order'
])
@endnumberInput

{{-- @checkBoxInput([
	'name' => 'is_active',
	'label' => 'Is Active',
])
@endcheckBoxInput --}}