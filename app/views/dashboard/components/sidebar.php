<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-4">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?= $data['title'] === 'Dashboard' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/dashboard/"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $data['title'] === 'Product' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/dashboard/show"><i class="bi bi-inboxes me-2"></i>Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $data['title'] === 'Order' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/dashboard/orders"><i class="bi bi-bag me-2"></i>Orders</a>
      </li>
    </ul>      
  </div>
</nav>