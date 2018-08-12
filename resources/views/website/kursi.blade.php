{!! Form::open(['action' => 'WebsiteController@pilih_kursi']) !!}
<input type="hidden" name="kursi" value="{{ $kursi }}">
<input type="hidden" name="id_kelas" value="{{ $id_kelas }}">
<input type="hidden" name="tanggal" value="{{ $tanggal }}">
<div class="col-md-12 mx-auto">
    <table>
    <?php $urut=0;$spasi=0;$l=0?>
    @for ($i = 1; $i <= $kursi; $i++)
         @if($urut==0)
        <tr>
        @endif
               @if(isset($detail[$urut])) 
                    @if($detail[$urut]->no_kursi==$i)
                            <td class="duduk" width="60px">{{ $i }}<br><input type="checkbox" checked="checked" disabled="disabled" name="no[]" value="{{ $i }}"></td>
                    @else
                            <td class="duduk" width="60px">{{ $i }}<br><input type="checkbox" name="no[]" value="{{ $i }}"></td>
                    @endif
                @else
                    <td class="duduk" width="60px">{{ $i }}<br><input type="checkbox" name="no[]" value="{{ $i }}"></td>
                @endif
        @if($urut==1)
            <td width="60px" style="border:0px"></td>
            @endif
        <?php $urut++;?>
        @if($urut==5)
         <?php $urut=0;$l=0?>
        </tr>
        @endif
    @endfor
    
    </table>
</div>


<div class="form-group col-xs-10 col-md-10" style="margin-top:30px;text-align:center">
    <input type="submit" class="btn btn-outline btn-xl btn-block" value="PROSES">
</div>

{!! Form::close() !!}
