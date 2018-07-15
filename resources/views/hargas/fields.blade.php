<!-- Nominal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nominal', 'Nominal:') !!}
    {!! Form::text('nominal', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Lama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga_lama', 'Harga Lama:') !!}
    {!! Form::text('harga_lama', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hargas.index') !!}" class="btn btn-default">Cancel</a>
</div>
