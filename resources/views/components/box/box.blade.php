<!--begin::Portlet-->
  <div class="kt-portlet">
    <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
        @if(isset($title))
          <h3 class="kt-portlet__head-title">
            {{ $title }}
          </h3>
        @endif
      </div>
    </div>
    <div class="kt-portlet__body">
      <!--begin::Section-->
        <div class="kt-section">
          @if(isset($info))
            <span class="kt-section__info">
                {{ $info }}
            </span>
          @endif
          <div class="kt-section__content">
            {{ $include }}
          </div>
        </div>
      <!--end::Section-->
    </div>
  </div>
<!--end::Portlet-->
