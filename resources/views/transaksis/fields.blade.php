<!-- Id Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_kategori', 'Id Kategori:') !!}
    {!! Form::text('id_kategori', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Berangkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_berangkat', 'Tgl Berangkat:') !!}
    {!! Form::text('tgl_berangkat', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_member', 'Id Member:') !!}
    {!! Form::text('id_member', null, ['class' => 'form-control']) !!}
</div>

<!-- Jml Penumpang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jml_penumpang', 'Jml Penumpang:') !!}
    {!! Form::text('jml_penumpang', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_harga', 'Total Harga:') !!}
    {!! Form::text('total_harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Bukti Transfer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bukti_transfer', 'Bukti Transfer:') !!}
    {!! Form::text('bukti_transfer', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('transaksis.index') !!}" class="btn btn-default">Cancel</a>
</div>
