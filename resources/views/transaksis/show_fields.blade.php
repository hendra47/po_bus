<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $transaksi->id !!}</p>
</div>

<!-- Id Kategori Field -->
<div class="form-group">
    {!! Form::label('id_kategori', 'Id Kategori:') !!}
    <p>{!! $transaksi->id_kategori !!}</p>
</div>

<!-- Tgl Berangkat Field -->
<div class="form-group">
    {!! Form::label('tgl_berangkat', 'Tgl Berangkat:') !!}
    <p>{!! $transaksi->tgl_berangkat !!}</p>
</div>

<!-- Id Member Field -->
<div class="form-group">
    {!! Form::label('id_member', 'Id Member:') !!}
    <p>{!! $transaksi->id_member !!}</p>
</div>

<!-- Jml Penumpang Field -->
<div class="form-group">
    {!! Form::label('jml_penumpang', 'Jml Penumpang:') !!}
    <p>{!! $transaksi->jml_penumpang !!}</p>
</div>

<!-- Total Harga Field -->
<div class="form-group">
    {!! Form::label('total_harga', 'Total Harga:') !!}
    <p>{!! $transaksi->total_harga !!}</p>
</div>

<!-- Bukti Transfer Field -->
<div class="form-group">
    {!! Form::label('bukti_transfer', 'Bukti Transfer:') !!}
    <p>{!! $transaksi->bukti_transfer !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $transaksi->status !!}</p>
</div>

