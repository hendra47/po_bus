<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- No Ktp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_ktp', 'No Ktp:') !!}
    {!! Form::text('no_ktp', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_lahir', 'Tgl Lahir:') !!}
    {!! Form::text('tgl_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Jk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jk', 'Jk:') !!}
    <label class="radio-inline">
        {!! Form::radio('jk', "L", null) !!} Laki-Laki
    </label>

    <label class="radio-inline">
        {!! Form::radio('jk', "P", null) !!} Perempuan
    </label>

</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('members.index') !!}" class="btn btn-default">Cancel</a>
</div>
