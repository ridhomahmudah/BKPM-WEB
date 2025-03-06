<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('dashboard.index') ? '' : 'collapsed' }}"
                href="{{ route('dashboard.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Product -->
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('product.index') ? '' : 'collapsed' }}"
                href="{{ route('product.index') }}">
                <i class="bi bi-box"></i>
                <span>Product</span>
            </a>
        </li>

        <!-- Riwayat Hidup (Dengan Submenu) -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#riwayat-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i>
                <span>Riwayat Hidup</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="riwayat-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('pendidikan') }}">
                        <i class="bi bi-circle"></i><span>Pendidikan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('pengalaman_kerja') }}">
                        <i class="bi bi-circle"></i><span>Pengalaman Kerja</span>
                    </a>
                </li>
    </ul>

</aside><!-- End Sidebar-->