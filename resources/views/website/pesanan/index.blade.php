@extends('/website/layouts.app')

@section('contentdata')
    <section class="download bg-primary text-center" style="height:100%">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2 class="section-heading">Pesanan Anda</h2>
            @include('flash::message')

          </div>
          <div class="col-md-12 mx-auto">
                <table class="table">
                  <thead>
                      <th>No Perjalanan</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>No Kursi</th>
                      <th>Rute</th>
                      <th>Status</th>
                      <th>Harga</th>
                      <th>Upload Bukti Transfer</th>
                  </thead>
                  <tbody>

                  @foreach($detail as $bus)
                      <tr>
                          <td>{!! $bus->no_perjalanan !!}</td>
                          <td>{!! $bus->tanggal !!}</td>
                          <td>{!! App\Helpers\spkHelper::jam($bus->jam) !!}</td>
                          <td>{!! $bus->no_kursi !!}</td>
                          <td>{!! App\Helpers\spkHelper::kota(App\Helpers\spkHelper::kelas_asal(App\Helpers\spkHelper::transaksi($bus->no_perjalanan))) !!} - 
                          {!! App\Helpers\spkHelper::kota(App\Helpers\spkHelper::kelas_tujuan(App\Helpers\spkHelper::transaksi($bus->no_perjalanan))) !!}</td>
                          <td>{!! $bus->status !!}</td>
                          <td>Rp.{!! $bus->bayar !!}</td>
                          @if(empty($bus->bukti_transfer))
                            <td><a href="{{ url('website/upload',[$bus->id]) }}" class="btn" style="background-color:#960a0a">Upload</a></td>
                          @else
                             <td>{{ $bus->bukti_transfer }}</td>
                          @endif

                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>
@endsection
