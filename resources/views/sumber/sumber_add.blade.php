@extends('layouts.master')

@section('content')

<form action="{{ url('sumber-pemasukan/add')}}" method="post">
 {{ csrf_field()  }}
    <div class="row">
        <div class="col-md-6">
             <div class="form-group">
                {{-- <label for="example-text-input" name="nama" class="form-control">Nama Sumber</label> --}}
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sumber">
             </div>
        <div class="form-group">
            <button class="btn btn-info" type="submit">Tambah Sumber</button>
        </div>
        </div>
    </div>
</form>
    
@endsection