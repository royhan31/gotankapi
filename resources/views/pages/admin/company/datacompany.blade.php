@extends('templates.admin.default')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Company
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data company</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">       
            <div class="box">
              <div class="box-header">
                <a href="{{ url('admin/company/create') }}" class="btn btn-success fa fa-plus-square-o"> Tambah </a>
                <a href="#" class="btn btn-success fa fa-print"> Print </a>                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th style="width: 15%">Nama</th>
                    <th style="width: 25%">Email</th>
                    <th style="width: 10%">Photo</th>
                    <th style="width: 15%">No HP</th>
                    <th style="width: 15%">Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp

                    {{-- cek data di database --}}
                    @if(sizeof($data_company)>0)
                      @foreach($data_company as $companies)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $companies->name }}</td>
                          <td>{{ $companies->email }}</td>
                          <td>{{ $companies->avatar }}</td>
                          <td>{{ $companies->phone }}</td>
                          <td>{{ $companies->address }}</td>
                          <td>
                              <form action="{{url('admin/company/'.$companies->id) }}" method="POST" class="text-center">
                                @csrf
                                @method('DELETE')
                                <a href="{{url('admin/company/'.$companies->id.'/edit') }}" class="fa fa-edit btn btn-primary"></a>
                                <button type="submit" class="fa fa-trash btn btn-danger"></button>
                              </form>                       
                          </td>
                        </tr>
                      @endforeach

                    @else
                      <tr>
                        <td class="text-center" colspan="6"><i>Tidak ada data</i></td>
                      </tr>
                    @endif

                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>

@endsection

@push('scripts')

@endpush