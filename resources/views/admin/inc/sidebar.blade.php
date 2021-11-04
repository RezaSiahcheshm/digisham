{{--@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')--}}
<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image"></figure>
            <div class="user-info">
                <img src="{{asset(Auth::user()->image ?? 'images/90x90.jpg' ?? 'images/profile.png')}}" alt="avatar">
                <h6>{{getFullName(Auth::user())}}</h6>
                <p>{{getAccessLevel(Auth::user())}}</p>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu {{ isActive('admin.') }}">
                <a href="{{route('admin.')}}" aria-expanded="{{ isActive('admin.','true','false')}}" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>داشبورد</span>
                    </div>
                </a>
            </li>
            {{--------------------------------------------------- لیست کاربران ---------------------------------------------------}}
            {{--<li class="menu  md-visible menu-heading">--}}
            {{--    <div class="heading">--}}
            {{--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>--}}
            {{--        <span>لیست کاربری</span>--}}
            {{--    </div>--}}
            {{--</li>--}}
            <li class="menu {{isActive(['admin.users.index','admin.users.create','admin.users.edit'])}}">
                <a href="#users" data-toggle="collapse" aria-expanded="{{isActive(['admin.users.index','admin.users.create','admin.users.edit'],'true','false')}}" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>کاربران</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ isActive(['admin.users.index','admin.users.create','admin.users.edit'] , 'show') }}" id="users" data-parent="#accordionExample">
                    <li class="{{ isActive('admin.users.index') }}">
                        <a href="{{route('admin.users.index')}}"> لیست کاربران</a>
                    </li>
                    @can('create-user')
                        <li class="{{ isActive('admin.users.create') }}">
                            <a href="{{route('admin.users.create')}}"> افزودن کاربر</a>
                        </li>
                    @endcan
                </ul>
            </li>
            {{--------------------------------------------------- لیست رستوران ---------------------------------------------------}}

            <li class="menu {{isActive(['admin.cafe.index','admin.cafe.create','admin.cafe.edit'])}}">
                <a href="#cafe" data-toggle="collapse" aria-expanded="{{isActive(['admin.cafe.index','admin.cafe.create','admin.cafe.edit'],'true','false')}}" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        <span>رستوران</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ isActive(['admin.cafe.index','admin.cafe.create','admin.cafe.edit'] , 'show') }}" id="cafe" data-parent="#accordionExample">
                    <li class="{{ isActive('admin.cafe.index') }}">
                        <a href="{{route('admin.cafe.index')}}"> لیست رستوران</a>
                    </li>
                    <li class="{{ isActive('admin.cafe.create') }}">
                        <a href="{{route('admin.cafe.create')}}"> افزودن رستوران</a>
                    </li>
                </ul>
            </li>
            {{--------------------------------------------------- لیست محصولات ---------------------------------------------------}}

            <li class="menu {{isActive(['admin.products.index','admin.products.create','admin.products.edit'])}}">
                <a href="#product" data-toggle="collapse" aria-expanded="{{isActive(['admin.products.index','admin.products.create','admin.products.edit'],'true','false')}}" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                        <span>محصولات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ isActive(['admin.products.index','admin.products.create','admin.products.edit'] , 'show') }}" id="product" data-parent="#accordionExample">
                    <li class="{{ isActive('admin.products.index') }}">
                        <a href="{{route('admin.products.index')}}"> لیست محصولات</a>
                    </li>
                    <li class="{{ isActive('admin.products.create') }}">
                        <a href="{{route('admin.products.create')}}"> افزودن محصول</a>
                    </li>
                </ul>
            </li>

            {{--------------------------------------------------- لیست دسترسی‌ها ---------------------------------------------------}}
            @can('create-permissions-roles')

                <li class="menu {{isActive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit','admin.roles.index','admin.roles.create','admin.roles.edit'])}}">
                    <a href="#permission" data-toggle="collapse" aria-expanded="{{isActive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit','admin.roles.index','admin.roles.create','admin.roles.edit'],'true','false')}}" class="dropdown-toggle">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                            <span>اجازه دسترسی‌ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ isActive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit','admin.roles.index','admin.roles.create','admin.roles.edit'] , 'show') }}" id="permission" data-parent="#accordionExample">
                        <li class="{{ isActive('admin.permissions.index') }}">
                            <a href="{{route('admin.permissions.index')}}"> لیست دسترسی‌ها</a>
                        </li>
                        <li class="{{ isActive('admin.permissions.create') }}">
                            <a href="{{route('admin.permissions.create')}}"> افزودن دسترسی</a>
                        </li>
                        <li class="{{ isActive('admin.roles.index') }}">
                            <a href="{{route('admin.roles.index')}}"> لیست نقش‌ها</a>
                        </li>
                        <li class="{{ isActive('admin.roles.create') }}">
                            <a href="{{route('admin.roles.create')}}"> افزودن نقش</a>
                        </li>
                    </ul>
                </li>
            @endcan
            {{--------------------------------------------------- داینامیک منو ---------------------------------------------------}}
            {{--                    @php--}}
            {{--                        $categorys = DB::table('admin_category')->get();--}}
            {{--                        $pages = DB::table('admin_page')->get();--}}
            {{--                    @endphp--}}
            {{--                    @foreach($categorys as $category)--}}
            {{--                        @if(!is_null($category->headName))--}}
            {{--                            <li class="menu menu-heading">--}}
            {{--                                <div class="heading">--}}
            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>--}}
            {{--                                    <span>{{$category->headName}}</span></div>--}}
            {{--                            </li>--}}
            {{--                        @endif--}}
            {{--                        <li class="menu {{ ($category_name === $category->name) ? 'active' : '' }}">--}}
            {{--                            <a href="#{{$category->name}}" data-toggle="collapse" aria-expanded="{{ ($category_name === $category->name) ? 'true' : 'false' }}" class="dropdown-toggle">--}}
            {{--                                <div class="">--}}
            {{--                                    <i class="fas fa-utensils"></i>--}}
            {{--                                    {!! $category->svg !!}--}}
            {{--                                    <span>{{ $category->title }}</span>--}}
            {{--                                </div>--}}
            {{--                                <div>--}}
            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <ul class="collapse submenu list-unstyled {{ ($category_name === $category->name) ? 'show' : '' }}" id="{{$category->name}}" data-parent="#accordionExample">--}}
            {{--                                @foreach($pages as $page)--}}
            {{--                                    @if($page->category_name == $category->name)--}}
            {{--                                        <li class="{{ ($page_name === $page->name ) ? 'active' : '' }}">--}}
            {{--                                            <a href="{{$page->link}}"> {{$page->title}}  </a>--}}
            {{--                                        </li>--}}
            {{--                                    @endif--}}
            {{--                                @endforeach--}}
            {{--                            </ul>--}}
            {{--                        </li>--}}
            {{--                    @endforeach--}}
            {{------------------------------------------------------- تمام -------------------------------------------------------}}
        </ul>
    </nav>
</div>
<!--  END SIDEBAR  -->
{{--@endif--}}
