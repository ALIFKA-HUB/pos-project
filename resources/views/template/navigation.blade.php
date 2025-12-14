<nav class="mt-2">
    <!--begin::Sidebar Menu-->
    <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation">
        <li class="nav-item menu-open">
            <a href="{{ url('/') }}" class="nav-link active">
                <i class="bi bi-house-fill"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="{{ route('category.index') }}" class="nav-link active">
                <i class="bi bi-tags"></i>
                <p>
                    Category
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="" class="nav-link active">
                <i class="bi bi-egg-fried"></i>
                <p>
                    Product
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="{{ url('order') }}" class="nav-link active">
                <i class="bi bi-envelope-paper"></i>
                <p>
                    Order
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="{{ route('order_detail.index') }}" class="nav-link active">
                <i class="bi bi-envelope-paper"></i>
                <p>
                    Order Detail
                </p>
            </a>
        </li>
    </ul>
    <!--end::Sidebar Menu-->
</nav>