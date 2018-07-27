@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detail Orders
        </h1>
        <a href="{!! route('transaksis.index') !!}" class="btn btn-primary">Back</a>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
            <table class="table table-responsive" id="transaksis-table">
                <thead>
                <tr>
                    <th>Detail Id</th>
                    <th>Transaksi Id</th>
                    <th>Nama Penumpang</th>
                    <th>No kursi</th>
                    <th>Bayar</th>
                    <th>Bukti Trasnfer</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>Joko Widodo</td>
                        <td>1</td>                        
                        <td>500</td>                        
                        <td></td>                        
                        <td>Done</td>                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>Prabowo</td>
                        <td>2</td>                        
                        <td>500</td>                        
                        <td></td>                        
                        <td>Done</td>                        
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
