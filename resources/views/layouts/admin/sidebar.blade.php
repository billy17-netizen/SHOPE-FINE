<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard.admin')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="{{route('product.index')}}" class="waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Products</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('product-gallery.index')}}" class="waves-effect">
                        <i class="bx bx-photo-album"></i>
                        <span>Products Galleries</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('category.index')}}" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('transaction.index')}}" class="waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span>Transactions</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>Users</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
