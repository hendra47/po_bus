@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Laporan Order</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            {!! Form::open(['action' => 'LaporanController@cari','method'=>'POST']) !!}
            <div class="box-body">
                <div class="form-group col-sm-12">
                        @include('flash::message')
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('tanggal', 'Dari :') !!}
                    {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('tanggal2', 'Sampai :') !!}
                    {!! Form::date('tanggal2', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-4" style="margin-top:24px;">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                <?php
                    if(isset($trans) && count($trans)>0 ){
                ?>
                <div id='printarea' class="form-group col-sm-12">
                    <table class="table table-responsive" id="absens-table">
                        <thead>
                            <th>No</th>
                            <th>No Perjalanan</th>
                            <th>Tanggal</th>
                            <th>Rute</th>
                            <th>Total Penumpang</th>
                        </thead>
                        <tbody>
                        <?php 
                            $no=1;
                            $total=0;
                         ?>
                        @foreach($trans as $item)
                            <tr>
                                <td>{!! $no !!}</td>
                                <td>{!! $item->no_perjalanan !!}</td>
                                <td>{!! $item->tanggal !!}</td>
                                <td>{!! App\Helpers\spkHelper::kota(App\Helpers\spkHelper::kelas_asal($item->id_kelas)) !!} - 
                                {!! App\Helpers\spkHelper::kota(App\Helpers\spkHelper::kelas_tujuan($item->id_kelas)) !!}</td>
                                <td>{!! App\Helpers\spkHelper::total_penumpang($item->no_perjalanan) !!}</td>
                            </tr>
                        <?php $no++ ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-sm-12">
                    <a   id='print' class="btn btn-warning pull-right" href="">
                    <i class="fa fa-print"></i> <span> Print</span>
                    </a>                
                </div>
                <?php
                }
                ?>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
    
@endsection

