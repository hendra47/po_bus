@extends('/website/layouts.app')

@section('contentdata')
    <section class="download bg-primary text-center" style="height:100%">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2 class="section-heading">No Perjalanan - {{ $no_perjalanan }}</h2>
            <h3>Nama Pemesan : {{ App\Helpers\spkHelper::member($detail[0]->id_member) }}</h3>
          </div>
          <div class="col-md-12 mx-auto">
                <table class="table">
                  <thead>
                      <th>No Kursi</th>
                      <th>Tanggal / Jam </th>
                      <th>Status</th>
                      <th>Harga</th>
                  </thead>
                  <tbody>
                  @foreach($detail as $bus)
                      <tr>
                          <td>{!! $bus->no_kursi !!}</td>
                          <td>{!! $bus->tanggal !!}/{!! App\Helpers\spkHelper::jam($bus->jam) !!}</td>
                          <td>{!! $bus->status !!}</td>
                          <td>Rp.{!! $bus->bayar !!}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>

          <div class="col-md-12">
          <h3>Segera Transfer Ke rekening BCA 000989283 A/N : PO.Dewi sri</h3>

          </div>
        </div>
      </div>
    </section>
@endsection
