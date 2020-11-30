@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<form action="{{ url ('pengeluaran/'.$data->pengeluaran_id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('put')}}
    <div class="form-group">
      <label for="exampleInputPassword1" style="color: white">Nominal</label>
    <input type="number" name="nominal" class="form-control" id="exampleInputPassword1" value="{{ $data->nominal}}" placeholder="Nominal">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Tanggal</label>
        <input type="text" name="tanggal" class="form-control datepicker" id="exampleInputPassword1"  value="{{ date('d-m-Y',strtotime($data->tanggal))}}" placeholder="Tanggal" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Keterangan</label>
        <textarea class="form-control" rows="10" name="keterangan">{{ $data->keterangan}}</textarea>
      </div>
    <button type="submit" class="btn btn-default">Update</button>
</form>
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $(".datepicker").datepicker();
    })
</script>
@endsection