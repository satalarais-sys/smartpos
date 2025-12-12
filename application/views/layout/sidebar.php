<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?= base_url() ?>" class="brand-link">
    <span class="brand-text font-weight-light">SmartPOS</span>
  </a>

  <div class="sidebar">

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

        <li class="nav-item">
          <a href="<?= base_url('dashboard') ?>" class="nav-link <?= active_menu('dashboard') ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('pos') ?>" class="nav-link <?= active_menu('pos') ?>">
            <i class="nav-icon fas fa-cash-register"></i>
            <p>POS Kasir</p>
          </a>
        </li>

        <li class="nav-header">MASTER DATA</li>

        <li class="nav-item">
          <a href="<?= base_url('products') ?>" class="nav-link <?= active_menu('products') ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>Produk</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('categories') ?>" class="nav-link <?= active_menu('categories') ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>Kategori</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('customers') ?>" class="nav-link <?= active_menu('customers') ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>Pelanggan</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('suppliers') ?>" class="nav-link <?= active_menu('suppliers') ?>">
            <i class="nav-icon fas fa-truck"></i>
            <p>Supplier</p>
          </a>
        </li>

        <li class="nav-header">LAPORAN</li>

        <li class="nav-item">
          <a href="<?= base_url('report/sales') ?>" class="nav-link <?= active_menu('report') ?>">
            <i class="nav-icon fas fa-file-invoice"></i>
            <p>Laporan Penjualan</p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>
