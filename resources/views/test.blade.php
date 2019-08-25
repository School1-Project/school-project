	@if($data['text'] === true)
		@textInput(['label' => 'Name' , 'placeholder' => 'Enter  Name' , 'name' =>'name'])
		@endtextInput
 	@endif
	@if($data['checkBox'] === true)
		@checkBoxInput(['label' => 'Check Box' , 'name' =>'name'])
		@endcheckBoxInput
 	@endif
