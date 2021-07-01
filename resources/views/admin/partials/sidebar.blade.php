<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::guard('admin')->user()->name }}</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.sliders' ? 'active' : '' }}" href="{{ route('admin.sliders') }}"><i class="app-menu__icon fa fa-sliders"></i>
                <span class="app-menu__label">Slider</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.pages' ? 'active' : '' }}" href="{{ route('admin.pages') }}"><i class="app-menu__icon fa fa-file"></i>
                <span class="app-menu__label">Pages</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.testimonials' ? 'active' : '' }}" href="{{ route('admin.testimonials') }}"><i class="app-menu__icon fa fa-quote-left"></i>
                <span class="app-menu__label">Testimonials</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.clienteles' ? 'active' : '' }}" href="{{ route('admin.clienteles') }}"><i class="app-menu__icon fa fa-user"></i>
                <span class="app-menu__label">Clienteles</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.newsletters' ? 'active' : '' }}" href="{{ route('admin.newsletters') }}"><i class="app-menu__icon fa fa-newspaper-o"></i>
                <span class="app-menu__label">Newstter</span>
            </a>
        </li>        
        <!-- <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-certificate"></i>
                <span class="app-menu__label">Certificate</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="#"><i class="icon fa fa-certificate"></i>Certificate</a>
                </li>
                <li>
                    <a class="treeview-item" href="#" target="_blank" rel="noopener noreferrer"><i class="icon fa fa-list-alt"></i> Category</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-product-hunt"></i>
                <span class="app-menu__label">Products</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="#"><i class="icon fa fa-product-hunt"></i>Products</a>
                </li>
                <li>
                    <a class="treeview-item" href="#" target="_blank" rel="noopener noreferrer"><i class="icon fa fa-list-alt"></i> Category</a>
                </li>
                <li>
                    <a class="treeview-item" href="#"><i class="icon fa fa-500px"></i> Brands</a>
                </li>
            </ul>
        </li> -->               
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('admin.logout') }}"><i class="app-menu__icon fa fa-sign-out"></i>
                <span class="app-menu__label">Logout</span>
            </a>
        </li>
    </ul>
</aside>