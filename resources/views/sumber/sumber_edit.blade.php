@extends('layouts.master')

@section('content')

<form action="{{ url('sumber-pemasukan/' .$data->id)}}" method="post">
 {{ csrf_field()  }}
 {{ method_field('put')  }}
    <div class="row">
        <div class="col-md-6">
             <div class="form-group">
                {{-- <label for="example-text-input" name="nama" class="form-control">Nama Sumber</label> --}}
             <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$data->nama}}" placeholder="Nama Sumber">
             </div>
        <div class="form-group">
            <button class="btn btn-info" type="submit">Edit Sumber</button>
        </div>
        </div>
    </div>
</form>
    
@endsection