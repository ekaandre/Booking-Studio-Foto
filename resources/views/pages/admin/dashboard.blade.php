@extends('layouts.admin')

@section('content')
    <!-- Page Content -->
<div id="page-content-wrapper">
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h1 class="dashboard-title">Dashboard</h1>
        <p class="dashboard-subtitle">
          Look what you have made today!
        </p>
      </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-2">
                <div class="card-body">
                  <div class="dashboard-card-title">
                    Paket Jasa
                  </div>
                  <div class="dashboard-card-subtitle">
                    {{ $reservation }}
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Transaksi
                </div>
                <div class="dashboard-card-subtitle">
                  {{ $transaction }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Active
                </div>
                <div class="dashboard-card-subtitle">
                  {{ $transaction_active }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Success
                </div>
                <div class="dashboard-card-subtitle">
                  {{ $transaction_success }}
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection