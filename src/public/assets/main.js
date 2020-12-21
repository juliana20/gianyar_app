$(document).ready(function(){
var get = [];
        location.search.replace('?','').split('&').forEach(function(val){
            split = val.split("=",2);
            get[split[0]] = split[1];
        });

    jQuery.each( [ "put", "delete" ], function( i, method ) {
        jQuery[ method ] = function( url, data, callback, type ) {
            if ( jQuery.isFunction( data ) ) {
                type = type || callback;
                callback = data;
                data = undefined;
            }

            return jQuery.ajax({
                url: url,
                type: method,
                dataType: type,
                data: data,
                success: callback
            });
        };
    });


    // -----------------REGISTER PASIEN-------------

     // KOSONGKAN DATA
    $(document).on('shown.bs.modal','#modalKosongkanData', function (e) {
        $('.overlay').css('display','block');
        var status = $(e.relatedTarget).data('status');
        $('#loadKosongkanData').load('register-pasien/delete/'+status);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });

    $(document).on('submit','#formKosongkanData',function(){
        var formKosongkanData=$("#formKosongkanData");
        var data= new FormData($(this)[0]);
        var status=$("#status").val();
       
        $.ajax({
            url:'register-pasien/delete/'+status,
            type:'POST',
            data:data,
            success:function(data){
                    $('#formKosongkanData').trigger('reset');
                    tbRegisterPasien.api().ajax.reload(); 
                    $('#modalformKosongkanData').modal('hide');
                    
                }

            
        });
        return false;
    });


// DETAIL REGISTER PASIEN
    $(document).on('shown.bs.modal','#modalDetailRegisterPasien', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadDetailRegisterPasien').load('register-pasien/'+id+'/detail');
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


     // -----------------KRITERIA--------------

    // EDIT KRITERIA
    $(document).on('shown.bs.modal','#modalEditKriteria', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadEditKriteria').load('kriteria/'+id+'/edit');
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


    // HAPUS KRITERIA
     $(document).on('shown.bs.modal','#modalHapusKriteria', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadDeleteKriteria').load('kriteria/delete/'+id);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


    // TAMBAH SUB KRITERIA
    $(document).on('shown.bs.modal','#modalTambahSubKriteria', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadTambahSubKriteria').load('sub-kriteria/'+id+'/tambah');
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


    // EDIT SUB KRITERIA
    $(document).on('shown.bs.modal','#modalEditSubKriteria', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadEditSubKriteria').load('sub-kriteria/'+id+'/edit');
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


    // HAPUS SUB KRITERIA
     $(document).on('shown.bs.modal','#modalHapusSubKriteria', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadDeleteSubKriteria').load('sub-kriteria/delete/'+id);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });

   
         // -----------------USER--------------




    // HAPUS ATURAN
     $(document).on('shown.bs.modal','#modalHapusAturan', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadDeleteAturan').load('data-aturan/delete/'+id);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });

    // HAPUS ATURAN ALL
     $(document).on('shown.bs.modal','#modalKosongkanDataAturan', function (e) {
        $('.overlay').css('display','block');
        var status = $(e.relatedTarget).data('status');
        $('#loadKosongkanDataAturan').load('data-aturan/delete_all/'+status);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });

      // HAPUS ALTERNATIF LOKASI
     $(document).on('shown.bs.modal','#modalHapusAlternatifLokasi', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadDeleteAlternatifLokasi').load('alternatif-lokasi/delete/'+id);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });

     // EDIT ALTERNATIF LOKASI
    $(document).on('shown.bs.modal','#modalEditAlternatifLokasi', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadEditAlternatifLokasi').load('alternatif-lokasi/'+id+'/edit');
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


    // HAPUS USER
     $(document).on('shown.bs.modal','#modalHapusUser', function (e) {
        $('.overlay').css('display','block');
        var id = $(e.relatedTarget).data('id');
        $('#loadDeleteUser').load('user/delete/'+id);
        setTimeout(function() {
                $('.overlay').css('display','none');
        }, 1500);
    });


});

