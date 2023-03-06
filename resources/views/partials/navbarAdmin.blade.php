<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-weight: bold;">Codeva Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{$title === 'Data Clothing - XII SIJA 1' ? 'active': ''}}">
          <a class="nav-link" href="/admin/clothing">Manajemen Produk</a>
        </li>
        <li class="nav-item {{$title === 'Manajemen Order - XII SIJA 1' ? 'active': ''}}">
          <a class="nav-link" href="/admin/clothing/order">Manajemen Order</a>
        </li>
      </ul>
      <span class="navbar-text">
        Hello Admin
      </span>
    </div>
</nav>