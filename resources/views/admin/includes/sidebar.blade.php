<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    <div class="c-sidebar-brand d-lg-down-none">
        <div class="c-sidebar-brand-full"><img src="{{ asset('public/admin/assets/img/admin/logo.png') }}" width="150"
                height="46"></div>
        <div class="c-sidebar-brand-minimized">SD</div>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.dashboard') }}">
                <i class="c-sidebar-nav-icon fa fa-tachometer"></i>Dashboard</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.slider') }}">
                <i class="c-sidebar-nav-icon fa fa-tachometer"></i>Slider Setting</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.services') }}">
                <i class="c-sidebar-nav-icon fa fa-tachometer"></i>services</a>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon fa fa-list-alt"></i>Product Management</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.category') }}"><span
                            class="c-sidebar-nav-icon"></span> Category</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.product') }}"><span
                            class="c-sidebar-nav-icon"></span>Product</a></li>

            </ul>
        </li>

        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.homepage') }}">
                <i class="c-sidebar-nav-icon fa fa-tachometer"></i>Front Setting</a>
        </li>

    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>