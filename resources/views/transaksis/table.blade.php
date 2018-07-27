<table class="table table-responsive" id="transaksis-table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Id Class</th>
        <th>Tgl Berangkat</th>
        <th>Jml Penumpang</th>
        <th>Total Harga</th>
        <th>No Bus</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaksis as $transaksi)
        <tr>

            <td>{!! $transaksi->id !!}</td>
            <td>{!! $transaksi->id_kategori !!}</td>
            <td>{!! $transaksi->tgl_berangkat !!}</td>
            <td>{!! $transaksi->jml_penumpang !!}</td>
            <td>{!! $transaksi->total_harga !!}</td>
            <td></td>
            <td>
                {!! Form::open(['route' => ['transaksis.destroy', $transaksi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transaksis.show', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-list  "></i></a>
                    <a href="#" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-print"></i></a>

                    <!-- <a href="{!! route('transaksis.edit', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                    <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
 -->                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>