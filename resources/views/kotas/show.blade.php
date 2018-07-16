@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            kotas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <!-- Id Field -->
<div class="form-group">
    {!! Form::label('nama', 'nama') !!}
    <p>{!! $data_kota->nama !!}</p>
</div>

<!-- Id Kategori Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'keterangan') !!}
    <p>{!! $data_kota->keterangan !!}</p>
</div>


                    <a href="{!! route('kota_url.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
