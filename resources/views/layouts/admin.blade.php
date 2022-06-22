<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Candradimuka Production - Admin</title>

  @include('includes.admin.style')
</head>

<body>
  <div class="page-dashboard">
        @include('includes.admin.sidebar')
        <div id="page-content-wrapper">
        @include('includes.admin.navbar')
        @yield('content')

      </div>
    </div>
  </div>

  @include('includes.admin.script')
  @include('sweetalert::alert')
</body>
@stack('addon-script')
</html>