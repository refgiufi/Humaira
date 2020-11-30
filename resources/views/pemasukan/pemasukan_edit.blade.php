@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<form action="{{ url ('pemasukan/'.$data->pemasukan_id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="exampleInputEmail1" style="color: white">Sumber Pemasukan</label>
      <select class="form-control" name="sumber_pemasukan">
          <option selected="" disabled="">Pilih Sumber Pemasukan</option>
          @foreach ($sumber as $sb)
          <option value="{{$sb->id}}" {{ ($data->sumber_pemasukan == $sb->id) ? 'selected' : '' }} >{{$sb->nama}}</option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" style="color: white">Nominal</label>
    <input type="number" name="nominal" class="form-control" id="exampleInputPassword1" placeholder="Nominal" value="{{ $data->nominal}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Tanggal</label>
    <input type="text" name="tanggal" class="form-control datepicker" id="exampleInputPassword1" placeholder="Tanggal" autocomplete="off" value="{{ date( 'm/d/Y',strtotime($data->tanggal))}}">
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