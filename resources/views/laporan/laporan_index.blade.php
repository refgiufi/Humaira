@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<form action="{{ url ('cari-laporan') }}" method="get">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Dari</label>
        <input type="text" name="dari" class="form-control datepicker" id="exampleInputPassword1" placeholder="Tanggal" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Sampai</label>
        <input type="text" name="sampai" class="form-control datepicker" id="exampleInputPassword1" placeholder="Tanggal" autocomplete="off">
      </div>
    <button type="submit" class="btn btn-default">Cari</button>
</form>

@if (isset($pemasukan))

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Pemasukan</h3>
              <a href="{{url('export-pemasukan/'.$dari.'/'.$sampai)}}" class="btn btn-success">Export To Excel</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id="table-pemasukan" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" >#</th>
                    <th scope="col" >Tanggal</th>
                    <th scope="col" >Nominal</th>
                    <th scope="col" >Sumber</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pemasukan as $e=>$ps)
                    <tr>
                    <td>{{ $e+1 }}</td>
                    <td>{{ date('d M Y', strtotime($ps->tanggal)) }}</td>
                    <td>Rp. {{ number_format($ps->nominal,0) }}</td>
                    <td>{{ $ps->nama}}</td>
                    </tr>
                    @endforeach
                    <tr>
                    <td></td>
                    <td>Total Pemasukan : </td>
                    <td><b><i>Rp. {{ number_format($total_pemasukan,0) }}</i></b></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>    
@endif

@if (isset($pengeluaran))

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Pengeluaran</h3>
              <a href="{{url('export-pengeluaran/'.$dari.'/'.$sampai)}}" class="btn btn-warning">Export To Excel</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
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
            </div>
          </div>
    </div>
</div>    
@endif

@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $(".datepicker").datepicker();
    })
</script>
@endsection