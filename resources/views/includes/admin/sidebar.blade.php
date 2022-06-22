<div class="d-flex" id="wrapper" data-aos="fade-right">
<!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="{{ url('Backend/images/dashboard-store-logo.png') }}" alt="" class="my-4" />
        </div>
        <div class="list-group list-group-flush">
          <ul class="list-unstyled">
            <li data-aos="fade-up" data-aos-delay="100">
              <a href="{{ route('dashboard')}}" class="list-group-item {{ request()->is('admin') ? 'active' : ''}}">
                <img src="{{ url('Backend/images/dash.png') }}" alt="" class="image mr-2">
                Dashboard
              </a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a href="{{ route('reservation.index')}}" class="list-group-item {{ request()->is('admin/reservation','admin/reservation/create', 'admin/reservation/{id}/edit') ? 'active' : ''}}">
                <img src="{{ url('Backend/images/paket.png') }}" alt="" class="image mr-2">
                Paket Jasa
              </a>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <a href="{{ route('gallery.index')}}" class="list-group-item {{ request()->is('admin/gallery','admin/gallery/create') ? 'active' : ''}}">
                <img src="{{ url('Backend/images/galery.png') }}" alt="" class="image mr-2">
                Galery Jasa
              </a>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
              <a href="{{ route('transaction.index')}}" class="list-group-item {{ request()->is('admin/transaction') ? 'active' : ''}}">
                <img src="{{ url('Backend/images/transaksi.png')}}" alt="" class="image mr-2">
                Transaksi
              </a>
            </li>
            <li data-aos="fade-up" data-aos-delay="400" class="list-group-item mt-100">
              <p>
                &copy;2020 - <script>document.write(new Date().getFullYear())</script> <br>
                All rights reserved
              </p>
            </li>
          </ul>
        </div>
      </div>
<!-- sidebar-wrapper -->