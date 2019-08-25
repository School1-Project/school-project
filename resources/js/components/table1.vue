-- <template>
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div v-if="title" class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					{{ this.title }}
				</h3>
			</div>
		</div>
	<div class="kt-portlet__body">
		<!--begin::Section-->
		<div class="kt-section">
				<div v-if="info" class="kt-section__info">
					{{ this.info }}
				</div>
			<div class="kt-section__content">
				<div class="table-responsive">
					<table class="table table-bordered">
						<slot name = "thead">
					    </slot>
					    <slot name="tbody">
					    </slot>	
				  	</table>
				</div>
			</div>
		</div>
		<!--end::Section-->
	</div>
	<!--end::Form-->
</div>
</template>

<script>
	export default {
		mounted() {
			// alert(this.title);

		},
		props: {
			title : {
				type : String
			},
			info: {
				type : String
			}

		}
	}
</script> --> -->