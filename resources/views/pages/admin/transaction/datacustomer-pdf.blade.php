<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #c22c3b;
  color: white;
}
</style>
</head>
<body>

<h1>Data Customer Candradimuka Production</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Paket</th>
    <th>Nama Customer</th>
    <th>No Whatsapp</th>
    <th>Tanggal Pesan</th>
    <th>Status Pesan</th>
  </tr>
  @php
      $no=1
  @endphp
  @foreach ($items as $item)
   <tr>
    <td scope="row">{{ $no++ }}</td>
    <td>{{ $item->reservation->title ?? null}}</td>
    @foreach ($item->details as $detail)
    <td>{{ $detail->username ?? null}}</td>
    <td>{{ $detail->phone ?? null}}</td>
    <td>{{ date('d-m-Y H:i', strtotime($detail->datetime ?? null)) }}</td>
    @endforeach
    <td>{{ $item->transaction_status }}</td>
  </tr>   
  @endforeach
  
</table>

</body>
</html>