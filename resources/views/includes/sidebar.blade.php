<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
      <ul class="kt-menu__nav ">
        <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" >
          <a  href="" class="kt-menu__link ">
            <span class="kt-menu__link-text">Dashboard</span>
          </a>
        </li>
        @foreach($menus as $menu)
          <li class="kt-menu__section ">
            <h4 class="kt-menu__section-text">{{ $menu->name }}</h4>
              <i class="kt-menu__section-icon flaticon-more-v2"></i>
          </li>
          @if($menu->childrens)
            @foreach($menu->childrens as $children1)
              @if($children1->childrens->count())
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                  <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                    <span class="kt-menu__link-text">{{ $children1->name }}</span>
                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                  </a>
                  <div class="kt-menu__submenu ">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                      @foreach($children1->childrens as $children2)
                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" >
                          <span class="kt-menu__link">
                            <span class="kt-menu__link-text">{{ $children1->name }}</span>
                          </span>
                        </li>
                        @if($children2->childrens->count())
                          <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                              <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                                <span></span>
                              </i>
                              <span class="kt-menu__link-text">{{ $children2->name }}</span>
                              <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="kt-menu__submenu ">
                              <span class="kt-menu__arrow">
                              </span>
                              <ul class="kt-menu__subnav">
                                @foreach($children2->childrens as $children3)
                                  <li class="kt-menu__item " aria-haspopup="true" >
                                    <a  href="/metronic/preview/demo1/custom/apps/user/list-default.html" class="kt-menu__link ">
                                      <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                      </i>
                                      <span class="kt-menu__link-text">{{ $children3->name }}</span>
                                    </a>
                                  </li>
                                @endforeach
                              </ul>
                            </div>
                          </li>
                        @else
                          <li class="kt-menu__item " aria-haspopup="true" >
                            <a  href="{{ $children2->routes ? route($children2->routes) : ''}} " class="kt-menu__link ">
                              <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                                <span></span>
                              </i>
                              <span class="kt-menu__link-text">{{ $children2->name }}</span>
                            </a>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </li>
              @else
                 <li class="kt-menu__item " aria-haspopup="true" >
                    <a  href="{{ $children1->routes ? route($children1->routes ) : '' }}" class="kt-menu__link ">
                      <span class="kt-menu__link-text">{{ $children1->name }}</span>
                    </a>
                  </li>
              @endif
            @endforeach
          @endif
        @endforeach
      </ul>
    </div>
  </div>