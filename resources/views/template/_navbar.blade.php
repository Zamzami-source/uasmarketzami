<div class="az-header">
    <div class="container">
        <div class="az-header-left">
            <a href="/produk" class="az-logo"><span></span> UasMarket</a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="/produk" class="az-logo"><span></span> UasMarket</a>
                <a href="" class="close">&times;</a>
            </div><!-- az-header-menu-header -->
            <ul class="nav">
                <li class="nav-item  {{ Request::is('produk*') ? 'active show' : '' }}">
                    <a href="/produk" class="nav-link">
                        <i class="typcn typcn-th-large"></i>Produk
                    </a>
                </li>
                <li class="nav-item {{ Request::is('sales*') ? 'active show' : '' }}">
                    <a href="/sales" class="nav-link">
                        <i class="typcn typcn-shopping-cart"></i>Pembelian
                    </a>
                </li>
            </ul>
        </div><!-- az-header-menu -->
    </div>
</div>


<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
        <div class="az-content-left az-content-left-components">
            <div class="component-item">
                <label>Produk</label>
                <nav class="nav flex-column">
                    <a href="/produk" class="nav-link {{ Request::is('produk*') ? 'active show' : '' }}">Data
                        Produk</a>
                </nav>
                <label>Belanja</label>
                <nav class="nav flex-column">
                    <a href="/sales" class="nav-link {{ Request::is('sales*') ? 'active show' : '' }}">Pembelian</a>
                </nav>
            </div><!-- component-item -->
        </div>
