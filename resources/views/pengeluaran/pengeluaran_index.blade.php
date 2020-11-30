@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col">
      <div class="card shadow">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Data Pengeluaran</h3>
        <a href="{{url('pengeluaran/add')}}" class="btn btn-info">Tambah Pengeluaran</a>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table id="table-pemasukan" class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" >#</th>
                <th scope="col" >Nominal</th>
                <th scope="col" >Tanggal</th>
                <th scope="col" >Keterangan</th>
                <th scope="col"><center>Action</center></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $e=>$dt)
                <tr>
                <td>{{ $e+1 }}</td>
                <td>Rp. {{ number_format($dt->nominal,0) }}</td>
                <td>{{ date('d M Y',strtotime($dt->tanggal ))}}</td> 
                <td>{{ $dt->keterangan }}</td>
                <td>
                <center>
                <a href="{{ url('pengeluaran/' 
                .$dt->pengeluaran_id)}}" class="btn btn-warning">Edit</a>
                <a href="{{ url('pengeluaran/' 
                .$dt->pengeluaran_id)}}" class="btn btn-danger btn-hapus">Hapus</a>
                </center>
                </td>
                </tr> 
                @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
          
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
              
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Apakah kamu yakin ingin menghapus ?</h4>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <form action="" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-white">Ok, Got it</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
  </div>

@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){


    $('body').on('click','.btn-hapus',function(e){
      e.preventDefault();
      var url = $(this).attr('href');
      $('#modal-notification').find('form').attr('action',url);
      $('#modal-notification').modal();
    })

    })

</script>
    
@endsection