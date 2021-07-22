<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{{ request()->is('dashboard') ? 'active' : '' }}}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item  ">
            <a href="{{ route('menu.kategori') }}" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Kategori</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="{{ route('menu.produk') }}" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Input Produk</span>
            </a>
        </li>

        <li class="sidebar-item  ">
            <a href="{{ route('menu.kontak') }}" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Data Pesan</span>
            </a>
        </li>

        <li class="sidebar-item  ">
            <a href="{{ route('menu.slider') }}" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Foto Slider</span>
            </a>
        </li>    

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Setting Aplikasi</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{ route('menu.about') }}">About</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{ route('menu.profil') }}">Profil Web</a>
                </li>
            </ul>
        </li>
    

    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>
