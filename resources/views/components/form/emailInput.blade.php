<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{!! Form::email( $name , null , array('class' => 'form-control' , 'placeholder' => $placeholder)) !!}
  <span class="form-text text-muted"></span>
</div>