<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{{ Form::text( $name , null , ['class' => 'form-control' , 'placeholder' => $placeholder]) }}
  <span class="form-text text-muted"></span>
</div>