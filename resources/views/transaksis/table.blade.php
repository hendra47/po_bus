<table class="table table-responsive" id="transaksis-table">
    <thead>
        <th>Id Kategori</th>
        <th>Tgl Berangkat</th>
        <th>Id Member</th>
        <th>Jml Penumpang</th>
        <th>Total Harga</th>
        <th>Bukti Transfer</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($transaksis as $transaksi)
        <tr>
            <td>{!! $transaksi->id_kategori !!}</td>
            <td>{!! $transaksi->tgl_berangkat !!}</td>
            <td>{!! $transaksi->id_member !!}</td>
            <td>{!! $transaksi->jml_penumpang !!}</td>
            <td>{!! $transaksi->total_harga !!}</td>
            <td>{!! $transaksi->bukti_transfer !!}</td>
            <td>{!! $transaksi->status !!}</td>
            <td>
                {!! Form::open(['route' => ['transaksis.destroy', $transaksi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transaksis.show', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('transaksis.edit', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
 -->                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>