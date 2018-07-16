<!-- No Bus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_bus', 'No Bus:') !!}
    {!! Form::text('no_bus', null, ['class' => 'form-control']) !!}
</div>

<!-- Kapasitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kapasitas', 'Kapasitas:') !!}
    {!! Form::text('kapasitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Fasilitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fasilitas', 'Fasilitas:') !!}
    {!! Form::text('fasilitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('buses.index') !!}" class="btn btn-default">Cancel</a>
</div>
