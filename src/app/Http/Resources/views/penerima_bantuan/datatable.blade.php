@extends('layouts.template')
@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">{{ $header }}</h3>
      <div class="box-tools pull-right">
          <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" title="Aksi">
                      <i class="fa fa-bars fa-lg tip" style="color: #3c8dbc"></i></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="" data-toggle="modal" data-target="#{{$idModalTambah}}" title="{{$headerModalTambah}}"><i class="fa fa-plus" aria-hidden="true"></i>Tambah</a></li>
                    </ul>
          </div>
      </div>
  </div>
<div class="row kotak">
  <div class="box-body">
    <div align="left">          
    <table width="100%" class="table table-hover table-striped" id="{{ $idDataTable }}">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th>No KTP</th>
          <th>No KK</th>
          <th>Nama Penerima</th>
          <th>Alamat</th>
          <th>Desa</th>
          <th>Kecamatan</th>
          <th>Jenis Bantuan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

      
    </tbody>
    </table>
    </div>
  </div>
</div>
<!-- MODAL TAMBAH & EDIT--> 
@include('modal.header.modal_create')
{{-- @include('penerima_bantuan.form') --}}
@include('modal.header.modal_edit')

<!-- DataTable -->
<script type="text/javascript">
  $(document).ready(function() {
    var   id_datatables = "{{ $idDataTable }}";
          id_modal_edit =  "{{ $idModalEdit }}";
          id_load_edit = "{{ $idLoadEdit }}";
          table = $('#'+id_datatables).DataTable({
          processing: true,
          serverSide: false,								
          info: true,
          responsive: true,
          ajax: "{{ url("{$url_datatables}") }}",
            language: {
            "loadingRecords": "Memuat...",
            "processing": "<div class='table-loader'>Memuat...<br><span class='loading'></span></div>",
            "lengthMenu": "Tampilkan _MENU_ Per Halaman",
            "zeroRecords": "Tidak ada data ditemukan",
            "info": "Menampilkan halaman _PAGE_ dari _PAGES_ total halaman",
            "infoEmpty": "Tidak ada data yang tersedia",
            "infoFiltered": "(Pencarian dari _MAX_ total data)",
            "search": "Pencarian",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Berikutnya"
              }
            },
          columns: [
              {
                  data: "id",
                  render: function (data, type, row, meta) {
                      return meta.row + meta.settings._iDisplayStart + 1;
                  }
              },
              { 
										data: "nomor_ktp", 
										render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "nomor_kkk", 
										render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "nama_penerima", 
                    render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "alamat", 
                    render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "desa_id", 
                    render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "kecamatan_id", 
                    render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "jenis_bantuan_id", 
                    render: function ( val, type, row ){
												return val
											}
							},
              { 
										data: "id",
										className: "text-center",
										orderable: false,
										render: function ( val, type, row ){
												var buttons = '<div class="btn-group" role="group">';
													buttons += '<a title=\"Ubah Data User\" data-toggle=\"modal\" data-target=\"#'+id_modal_edit+'\" data-id=\"'+val+'\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit</a>';
													buttons += "</div>";
												return buttons
											}
									},
          ]
      });
  

   // SHOW MODAL EDIT BARANG
   $(document).on('shown.bs.modal','#'+id_modal_edit, function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#'+id_load_edit).load('penerima_bantuan/'+id+'/edit');
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });
  } );
  </script>

@endsection
 
