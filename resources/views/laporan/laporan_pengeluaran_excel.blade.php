<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <h3>Laporan Pengeluaran</h3>
    <table id="table-pemasukan" class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col" >#</th>
            <th scope="col" >Tanggal</th>
            <th scope="col" >Nominal</th>
            <th scope="col" >Keterangan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pengeluaran as $e=>$pl)
            <tr>
            <td>{{ $e+1 }}</td>
            <td>{{ date('d M Y', strtotime($pl->tanggal)) }}</td>
            <td>Rp. {{ number_format($pl->nominal,0) }}</td>
            <td>{{ $pl->keterangan}}</td>
            </tr>
            @endforeach
            <tr>
            <td></td>
            <td>Total Pengeluaran : </td>
            <td><b><i>Rp. {{ number_format($total_pengeluaran,0) }}</i></b></td>
            </tr>
        </tbody>
      </table>
</body>
</html>