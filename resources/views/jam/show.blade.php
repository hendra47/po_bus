@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            jam
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <!-- Id Field -->
<div class="form-group">
    {!! Form::label('jam', 'jam') !!}
    <p>{!! $jam->jam !!}</p>
</div>

<!-- Id Kategori Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'keterangan') !!}
    <p>{!! $jam->keterangan !!}</p>
</div>


                    <a href="{!! route('jam.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
