<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Kota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_kota', 'Id Kota:') !!}
    {!! Form::text('id_kota', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Jam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jam', 'Id Jam:') !!}
    {!! Form::text('id_jam', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Rute Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_rute', 'Id Rute:') !!}
    {!! Form::text('id_rute', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_harga', 'Id Harga:') !!}
    {!! Form::text('id_harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Bus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_bus', 'Id Bus:') !!}
    {!! Form::text('id_bus', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kategoris.index') !!}" class="btn btn-default">Cancel</a>
</div>
