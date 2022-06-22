@extends('layouts.admin')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        @foreach ($item->details as $detail)
        <h1 class="dashboard-title">Edit Transaksi {{ $detail->username ?? null}}</h1>
        @endforeach
        <p class="dashboard-subtitle">
          Look what you have made today!
        </p>
      </div>

      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <a href="{{route('transaction.index')}}" class="btn btn-add">Back</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('transaction.update', $item->id)}}" method="POST">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                    <label for="transaction_status">Status</label>
                    <select name="transaction_status" required class="form-control">
                      <option value="{{ $item->transaction_status }}">
                        {{ $item->transaction_status }}
                      </option>
                      <option value="IN_CART">In Cart</option>
                      <option value="PENDING">Pending</option>
                      <option value="ACTIVE">Active</option>
                      <option value="SUCCESS">Success</option>
                      <option value="CANCEL">Cancel</option>
                      <option value="FAILED">Failed</option>
                    </select>
                  </div>
                  <button class="btn btn-add col-md-12 mb-3" type="submit">Ubah</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>
@endsection