<form  method="POST" action="{{ url($submit_url) }}" enctype="multipart/form-data">
  {!! csrf_field() !!}
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Nomor KTP</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[nomor_ktp]" value="{{ @$item->nomor_ktp }}" placeholder="No KTP" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Nomor KK</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[nomor_kk]" value="{{ @$item->nomor_kk }}" placeholder="Nomor KK" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Nama Penerima</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[nama_penerima]" value="{{ @$item->nama_penerima }}" placeholder="Nama Penerima" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Alamat Penerima</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[alamat]" value="{{ @$item->alamat }}" placeholder="Alamat" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Kecamatan</label>
      <div class="col-md-9">
        <select name="f[kecamatan_id]" class="form-control" required="">
          <?php foreach($kecamatan as $dt): ?>
            <option value="<?php echo @$dt->id ?>" <?= @$dt->id == @$item->kecamatan_id ? 'selected': null ?>><?php echo @$dt->nama ?></option>
          <?php endforeach; ?>
        </select>
      </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Desa</label>
      <div class="col-md-9">
        <select name="f[desa_id]" class="form-control" required="">
          <?php foreach($desa as $dt): ?>
            <option value="<?php echo @$dt->desa_id ?>" <?= @$dt->desa_id == @$item->desa_id ? 'selected': null ?>><?php echo @$dt->desa_nama ?></option>
          <?php endforeach; ?>
        </select>
      </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Jenis Bantuan</label>
      <div class="col-md-9">
        <select name="f[jenis_bantuan_id]" class="form-control" required="">
          <option value="" disabled="" selected="" hidden="">- Pilih Jenis Bantuan -</option>
          <?php foreach($jenis_bantuan as $dt): ?>
            <option value="<?php echo @$dt->id ?>" <?= @$dt->id == @$item->jenis_bantuan_id ? 'selected': null ?>><?php echo @$dt->nama ?></option>
          <?php endforeach; ?>
        </select>
      </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Lintang</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[lintang]" value="{{ @$item->lintang }}" placeholder="Lintang" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Bujur</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[bujur]" value="{{ @$item->bujur }}" placeholder="Bujur" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Keterangan</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[keterangan]" value="{{ @$item->keterangan }}" placeholder="Keterangan" autofocus required="">
    </div>
  </div>
  <div class="modal-footer" style="border-top: 0px;">
    <button type="button" class="btn btn-danger tombolform" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Batal</button>
    <button type="submit" class="btn btn-success tombolform"><i class="fa fa-check" aria-hidden="true"></i> @if($is_edit) Perbarui @else Simpan @endif</button> 
 </div>
</form>
      
</div>
</div>
</div>
</div>
