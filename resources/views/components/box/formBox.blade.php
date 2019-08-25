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
    @if (isset($model))
      {!! Form::model($model, ['route' => $route,'class'=>'kt-form','method' => 'PATCH']) !!}
    @else
      {!! Form::open(['route' => $route,'class' => 'kt-form']) !!}
    @endif
        {!! Form::token() !!}
        <div class="kt-portlet__body">
          <!--begin::Section-->
            <div class="kt-section">
              @if(isset($info))
                <span class="kt-section__info">
                    {{ $info }}
                </span>
              @endif
              <div class="kt-section__content">
                @if (isset($content))
                    @include($content['view'], $content['data'])
                @else
                    {{ $include }}
                @endif
              </div>
            </div>
          <!--end::Section-->
        </div>

        <div class="kt-portlet__foot">
          <div class="kt-form__actions kt-form__actions--right">
            <button type="submit" class="btn btn-brand">Submit</button>
            <button type="button" class="btn btn-secondary">Cancel</button>
          </div>
        </div>
    {!! Form::close() !!}
  </div>
<!--end::Portlet-->
