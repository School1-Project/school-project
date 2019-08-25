<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{!! Form::select($name,$value,null,['class'=>'form-control','placeholder'=>$placeholder]) !!}
  <span class="form-text text-muted"></span>
</div>