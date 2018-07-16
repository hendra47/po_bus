
<li>
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Menu Utama</span></a>
</li>

@if(App\Helpers\spkHelper::akses('user')==='true')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Data Users</span></a>
</li>
@endif

@if(App\Helpers\spkHelper::akses('akses')==='true')
<!-- <li class="{{ Request::is('hakAkses*') ? 'active' : '' }}">
    <a href="{!! route('hakAkses.index') !!}"><i class="fa fa-wrench"></i><span>Hak Akses</span></a>
</li>  -->
@endif

<!--
@if(App\Helpers\spkHelper::akses('laporan')==='true')
<li class="{{ Request::is('laporan*') ? 'active treeview' : 'treeview' }}">
    <a href="#">
    <i class="fa fa-bar-chart"></i>
    <span>Laporan Penilaian </span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    <li class="{{ Request::segment(2)==1 ? 'active' : '' }}"><a href="{!! URL::route('lap',1) !!}"><i class="fa fa-circle-o"></i>Data Nilai siswa</a></li>
    <li class="{{ Request::segment(2)==2 ? 'active' : '' }}"><a href="{!! URL::route('lap',2) !!}"><i class="fa fa-circle-o"></i>Hasil Analisa</a></li>
    <li class="{{ Request::segment(2)==3 ? 'active' : '' }}"><a href="{!! URL::route('lap',3) !!}"><i class="fa fa-circle-o"></i>Hasil Normalisasi</a></li>
    <li class="{{ Request::segment(2)==4 ? 'active' : '' }}"><a href="{!! URL::route('lap',4) !!}"><i class="fa fa-circle-o"></i>Hasil Perangkingan</a></li>
    <li class="{{ Request::segment(2)==5 ? 'active' : '' }}"><a href="{!! URL::route('lap',5) !!}"><i class="fa fa-circle-o"></i>Hasil Keputusan</a></li>    
    </ul>
</li>
@endif-->











<li class="{{ Request::is('hargas*') ? 'active' : '' }}">
    <a href="{!! route('hargas.index') !!}"><i class="fa fa-edit"></i><span>Harga</span></a>
</li>



<li class="{{ Request::is('members*') ? 'active' : '' }}">
    <a href="{!! route('members.index') !!}"><i class="fa fa-edit"></i><span>Member</span></a>
</li>


<li class="{{ Request::is('buses*') ? 'active' : '' }}">
    <a href="{!! route('buses.index') !!}"><i class="fa fa-edit"></i><span>Bus</span></a>
</li>

<li class="{{ Request::is('kategoris*') ? 'active' : '' }}">
    <a href="{!! route('kategoris.index') !!}"><i class="fa fa-edit"></i><span>Kategori</span></a>
</li>

<li class="{{ Request::is('transaksis*') ? 'active' : '' }}">
    <a href="{!! route('transaksis.index') !!}"><i class="fa fa-edit"></i><span>Transaksi</span></a>
</li>

<li class="{{ Request::is('kota*') ? 'active' : '' }}">
    <a href="{!! route('kota_url.index') !!}"><i class="fa fa-edit"></i><span>Kota</span></a>
</li>
<li class="{{ Request::is('kota*') ? 'active' : '' }}">
    <a href="{!! route('jam.index') !!}"><i class="fa fa-edit"></i><span>Jam</span></a>
</li>
<li class="{{ Request::is('kota*') ? 'active' : '' }}">
    <a href="{!! route('rute.index') !!}"><i class="fa fa-edit"></i><span>Rute</span></a>
</li>


<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
</li>







