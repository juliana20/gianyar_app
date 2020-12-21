<form  method="POST" action="{{ url($submit_url) }}" enctype="multipart/form-data">
  {!! csrf_field() !!}
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Nama User</label>
    <div class="col-md-9">
      <input type="text" class="form-control" name="f[nama]" value="{{ @$item->nama }}" placeholder="Nama User" autofocus required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Jabatan</label>
      <div class="col-md-9">
        <?php $jabatan =   
          [
              ['id' => 'Bagian Keuangan','desc' => 'Bagian Keuangan'],
              ['id' => 'Pemilik','desc' => 'Pemilik'],
          ]; 
        ?>
        <select name="f[jabatan]" class="form-control" required="">
          <option value="" disabled="" selected="" hidden="">- Pilih Jabatan -</option>
          <?php foreach($jabatan as $dt): ?>
            <option value="<?php echo @$dt['id'] ?>" <?= @$dt['id'] == @$item->jabatan ? 'selected': null ?>><?php echo @$dt['desc'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Username</label>
    <div class="col-md-9">
      <input type="text" name="f[username]" class="form-control" placeholder="Username" value="{{ @$item->username }}" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label tengah2">Password</label>
    <div class="col-md-9">
      <input type="password" class="form-control" name="f[password]" value="{{ @$item->password }}" placeholder="Password" required="">
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