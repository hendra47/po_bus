<table class="table table-responsive" id="kategoris-table">
    <thead>

        <th>Id</th>
        <th>Nama</th>
        <th>Id Kota</th>
        <th>Id Jam</th>
        <th>Id Rute</th>
        <th>Id Harga</th>
        <th>Id Bus</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($kategoris as $kategori)
        <tr>

            <td>{!! $kategori->id !!}</td>
            <td>{!! $kategori->nama !!}</td>
            <td>{!! App\Helpers\spkHelper::kota($kategori->id_kota) !!}</td>
            <td>{!! App\Helpers\spkHelper::jam($kategori->id_jam) !!}</td>
            <td>{!! $kategori->id_rute !!}</td>
            <td>{!! $kategori->id_harga !!}</td>
            <td>{!! $kategori->id_bus !!}</td>
            <td>
                {!! Form::open(['route' => ['kategoris.destroy', $kategori->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('kategoris.show', [$kategori->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('kategoris.edit', [$kategori->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>