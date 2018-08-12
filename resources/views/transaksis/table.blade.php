<table class="table table-responsive" id="transaksis-table">
    <thead>
    <tr>
        <th>Id</th>
        <th>No Perjalanan</th>
        <th>Tgl Berangkat</th>
        <th>Jam</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaksis as $transaksi)
        <tr>

            <td>{!! $transaksi->id !!}</td>
            <td>{!! $transaksi->no_perjalanan !!}</td>
            <td>{!! $transaksi->tanggal !!}</td>
            <td>{!! App\Helpers\spkHelper::jam(App\Helpers\spkHelper::kelas_jam($transaksi->id_kelas)) !!}</td>
            <td>{!! App\Helpers\spkHelper::kota(App\Helpers\spkHelper::kelas_asal($transaksi->id_kelas)) !!}</td>
            <td>{!! App\Helpers\spkHelper::kota(App\Helpers\spkHelper::kelas_tujuan($transaksi->id_kelas)) !!}</td>
            <td></td>
            <td>
                {!! Form::open(['route' => ['transaksis.destroy', $transaksi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transaksis.show', [$transaksi->no_perjalanan]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-list  "></i></a>
                    <!-- <a href="#" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-print"></i></a> -->

                    <!-- <a href="{!! route('transaksis.edit', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                    <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
 -->                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>