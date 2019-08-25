<div class="dropdown">
    <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"
       aria-expanded="false">
        <i class="la la-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
         style="position: absolute; transform: translate3d(-132px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
        @if (isset($route) && isset($id))

            @if (!empty($edit))
                <a class="dropdown-item" href="{{ route($route.'.edit',$id) }}">
                    <i class="la la-edit"></i> Edit Details
                </a>
            @endif

            @if (!empty($details))
                <a class="dropdown-item" href="{{ route($route.'.show',$id) }}">
                    <i class="flaticon flaticon-refresh"></i> More Details
                </a>
            @endif

            @if (!empty($delete))
                <a class="dropdown-item" href="javascript:;"
                   onclick="if(confirm('Are you sure you want to delete?')){document.getElementById('delete-{{$id}}').submit();}">
                    <i class="la la-trash"></i> Delete
                    {!! Form::open(['route' => [$route.'.destroy',$id], 'method' => 'delete', 'id'=>'delete-'.$id]) !!}
                    {!! Form::close() !!}
                </a>
            @endif
            @if (!empty($reset))
                <a class="dropdown-item" href="{{ route($route.'.reset',$id) }}">
                    <i class="flaticon flaticon-refresh"></i> Reset
                </a>
            @endif

        @endif
        {{ $slot ?? '' }}
        {!! $otherLinks ?? '' !!}
    </div>
</div>
