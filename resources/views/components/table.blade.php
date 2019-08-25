<div class="kt-portlet">
	@if(isset($title))
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					{{ $title }}
				</h3>
			</div>
		</div>
	@endif
	<div class="kt-portlet__body">
		<!--begin::Section-->
		<div class="kt-section">
			@if(isset($info))
				<div class="kt-section__info">
					{{ $info }}
				</div>
			@endif
			<div class="kt-section__content">
				<div class="table-responsive">
					<table class="table table-bordered">
					    @if (isset($thead))
				      		{!! $thead !!}
					    @endif
					    @if (isset($tbody))
					      {!! $tbody !!}
					    @endif
				  	</table>
				</div>
			</div>
		</div>
		<!--end::Section-->
	</div>
	<!--end::Form-->
</div>