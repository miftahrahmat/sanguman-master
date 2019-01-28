@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-10">
            <div class="card">
               
                <div class="card-header">
                 Data Yang Sering Makan Priode {{ $time }} - {{ $endtime }}
                </div>
                @if(!empty($cek))
                <div class="card-body">
                <table class="table table-hover table-striped table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Name</th>
                                 <th>Total Portion</th>
                                 <th>Tanggal</th>
                                
                            </tr>
                        </thead>
                          @foreach ($portions as  $portion)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $portion->name }}</td>

                                <td>{{ $portion->total }} PORSI</td>

                                <td>{{ $portion->created_at }}</td>

                            </tr>
                        </tbody>
                        
                        @endforeach
                    </table>
                    @endif
                     @if(empty($cek))    
                        <div class="alert alert-info">
                            <center><strong>Riwayat Orders Masih Kosong</strong></center>
                        </div>
                    @endif
                    {!! $portions->links(); !!}
                   
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data Mubadzir makanan Priode {{ $time }} - {{ $endtime }}
                    
                </div>
                @if(!empty($cek))
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Name</th>
                                 <th>Sisa Portion</th>
                                 <th>Tanggal</th>
                            </tr>
                        </thead>
                        @foreach ($mubadzir as $portion)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $portion->name }}</td>

                                <td>{{ $portion->sisa }} PORSI</td>

                                <td>{{ $portion->created_at }}</td>


                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    @endif
                    @if(empty($cek))
                            <div class="alert alert-info">
                                <center><strong>Riwayat Pesanan Masih Kosong</strong></center>
                            </div>
                        @endif
                    {!! $mubadzir->links(); !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection