<div class="form-group">
	{!!Form::label( $name , $label) !!}
	{!! Form::number( $name , null , array('class' => 'form-control' , 'placeholder' => $placeholder , 'id' => $id )) !!}
  <span class="form-text text-muted"></span>
</div>

@push('scripts')
    <script>
    	var id = {!! json_encode($id) !!};
    	$("#"+id).TouchSpin({buttondown_class:"btn btn-secondary",buttonup_class:"btn btn-secondary",min:0,max:100,step:1,boostat:5,maxboostedstep:10})
    </script>
@endpush