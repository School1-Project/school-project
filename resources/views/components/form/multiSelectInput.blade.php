<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{!! Form::select($name,$value,null,['class'=>'form-control kt-select2','placeholder'=>$placeholder,'id'=>$id , 'multiple' => $multiple]) !!}
  <span class="form-text text-muted"></span>
</div>

@push('scripts')
    <script>
    	var id = {!! json_encode($id) !!};
    	$("#"+id).select2({placeholder:"Select a state"})
    </script>
@endpush