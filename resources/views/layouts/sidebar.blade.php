<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">User</li> 
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#data-pengguna" aria-expanded="false"
                aria-controls="data-pengguna">
                <i class="menu-icon mdi mdi-account text-outline"></i>
                <span class="menu-title">Data Pengguna</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data-pengguna">
                <ul class="nav flex-column sub-menu">
                    <a class="nav-link" href="/pengguna">Pengguna</a>
                    <a class="nav-link" href="/role">Role</a>
                    <a class="nav-link" href="/supir">Supir</a>
                </ul>
            </div>
        </li> 

        <li class="nav-item nav-category">Buah</li> 
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#data-buah" aria-expanded="false"
                aria-controls="data-buah">
                <i class="menu-icon mdi mdi-apps text-outline"></i>
                <span class="menu-title">Data Buah</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data-buah">
                <ul class="nav flex-column sub-menu">
                    <a class="nav-link" href="/buah">Buah</a>
                    <a class="nav-link" href="/kategori">Kategori Buah</a>
                </ul>
            </div>
        </li>       

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#data-pesanan" aria-expanded="false"
                aria-controls="data-pesanan">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Data Pemesanan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data-pesanan">
                <ul class="nav flex-column sub-menu">
                    <a class="nav-link" href="/pemesanan">Pemesanan</a>
                    <a class="nav-link" href="/outlet">Outlet</a>
                </ul>
            </div>
        </li>         

        <li class="nav-item nav-category">Pengiriman</li> 
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#data-pengiriman" aria-expanded="false"
                aria-controls="data-pesanan">
                <i class="menu-icon mdi mdi-apple-keyboard-option"></i>
                <span class="menu-title">Pengiriman</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data-pengiriman">
                <ul class="nav flex-column sub-menu">
                    <a class="nav-link" href="/jadwal">Jadwal Pengiriman</a>
                    <a class="nav-link" href="/pengiriman">Pengiriman</a>
                    <a class="nav-link" href="/rute">Rute</a>
                    <a class="nav-link" href="/truk">Truk</a>
                </ul>
            </div>
        </li>         
    </ul>
</nav>