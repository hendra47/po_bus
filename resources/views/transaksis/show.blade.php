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
                    <th>Nama Penumpang</th>
                    <th>No kursi</th>
                    <th>Harga</th>
                    <th>Bukti Transfer</th>
                    <th>Status</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transaksis as $transaksi)
                    <tr>

                        <td>{!! $transaksi->id !!}</td>
                        <td>{!! App\Helpers\spkHelper::member($transaksi->id_member) !!}</td>
                        <td>{!! $transaksi->no_kursi !!}</td>
                        <td>Rp.{!! $transaksi->bayar !!}</td>
                        <td><img src="{{ URL::to('/photos/'.$transaksi->bukti_transfer) }}" style="height:60px;width:80px;border:1px solid gray;"></td>
                        <td>{!! $transaksi->status !!}</td>
                        <td>
                            <a href="{!! route('transaksiDetails.edit', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
