<table class="table table-responsive" id="class-table">
    <thead>
        <th>Id</th>
        <th>Jumlah Seat</th>
        <th>Kota Asal</th>
        <th>Jam</th>
        <th>Kota Tujuan</th>
        <th>Harga</th>
        <th>Class</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($kelas as $ggg)
        <tr>

            <td>{!! $ggg->id !!}</td>
            <td>{!! $ggg->seat !!}</td>
            <td>{!! App\Helpers\spkHelper::kota($ggg->kota_asal) !!}</td>
            <td>{!! App\Helpers\spkHelper::jam($ggg->id_jam) !!}</td>
            <td>{!! App\Helpers\spkHelper::kota($ggg->kota_tujuan) !!}</td>
            <td>{!! $ggg->id_harga !!}</td>
            <td>Bisnis</td>
            <td>
                {!! Form::open(['route' => ['kelas.destroy', $ggg->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!-- <a href="{!! route('kelas.show', [$ggg->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="{!! route('kelas.edit', [$ggg->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>