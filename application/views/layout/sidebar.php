<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="<?= base_url('dashboard') ?>" class="brand-link">
        <span class="brand-text font-weight-light">SmartPOS</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('products') ?>" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Products</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('pos') ?>" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>POS (Kasir)</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('sales') ?>" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>Sales History</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('users') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
