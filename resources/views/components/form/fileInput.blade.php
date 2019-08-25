<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{!! Form::file( $name , null, array('class' => 'form-control' , 'placeholder' => $placeholder)) !!}
  <span class="form-text text-muted"></span>
</div>