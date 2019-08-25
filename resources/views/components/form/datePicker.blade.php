<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{{ Form::text($name, null, ['class' => 'form-control', 'id'=>'kt_datepicker_2' , 'placeholder' => "Select date",'readonly' => 'readonly']) }}
  <span class="form-text text-muted"></span>
</div>