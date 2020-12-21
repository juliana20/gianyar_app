@extends('layouts.template')

 <?php 
 $title="Dashboard | ";
 ?>
@section('content')
    <div class="preloader">
      <div class="loading">
        <img src="{{url('public/image/loading.gif')}}" width="80">
        <p>Harap Tunggu</p>
      </div>
    </div>
    <!-- Main content -->
      <!-- Small boxes (Stat box) -->
      <div class="row rowEdit">
          <div class="box-header with-border boxHeaderDashboard">
            <h2 class="box-title" align="center" id="titleDashboard">DINAS KOMUNIKASI DAN INFORMATIKA
            </h2><br>
          </div>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">DATA</span>
              <span class="info-box-number">100</span>
            </div>
          <a href="" class="small-box-footer" style="padding-left: 10px">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">DATA</span>
              <span class="info-box-number">100</span>
            </div>
            <a href="" class="small-box-footer" style="padding-left: 10px">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- /.col -->
       </div>

       <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Rekapitulasi Penerima Bantuan</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <!-- Main content -->
                <section class="content" >
                  <div class="row">
                    <div class="col-md-12">                  
                      <div class="box-body chart-responsive">
                        <div class="col-md-2 pull-right">
                          <select name="year" id="select_year" class="form-control">
                            <option value="2018">2016</option>
                            <option value="2019">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020" selected>2020</option>
                          </select>
                        </div>
                        <div class="graph">
                          <div class="chart" id="bar-chart"></div>
                        </div>

                      </div>
                    </div>

                  </div>
                </section>
<!-- /.content -->
                <!-- /.chart-responsive -->
              </div>

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <div class="box-footer">
            
            <!-- /.row -->
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    <!-- /.row -->
    <script>
    $(function () {
      $.fn.extend({
        functionGraph: { 
          init:function(){
                var post_data = {};
                    post_data.header = {
                      'year':$('#select_year').val()
                    }
                $.post( "{{url('dashboard/chart')}}", post_data, function( response, status, xhr ){
                    if ( response.status == 'error')
                    {
                      return false;
                    }
                    $.fn.functionGraph.chart(response.data);    
                  });												
              $('#select_year').on( "change",  function(e){
                $('#bar-chart').remove();
                var post_data = {};
                    post_data.header = {
                      'year':$('#select_year').val()
                    }
                $.post( "{{url('dashboard/chart')}}", post_data, function( response, status, xhr ){
                    if ( response.status == 'error')
                    {
                      return false;
                    }

                    $( ".graph" ).append( " <div class=\"chart\" id=\"bar-chart\"></div>" );
                    $.fn.functionGraph.chart(response.data);    
                  });												
              });
          },
        chart: function(data)
            {
              var bar = new Morris.Bar({
                  element: 'bar-chart',
                  resize: true,
                  data: data,
                  barColors: ['#55ce63', '#03a9f3'],
                  xkey: 'Bulan',
                  ykeys: ['Pemasukan', 'Pengeluaran'],
                  labels: ['PEMASUKAN', 'PENGELUARAN'],
                  hideHover: 'auto',
                  xLabelAngle: 20,
              });

            },
          }
      });

      $(document).ready(function(){
        $.fn.functionGraph.init();
      })
    }); 
    </script>

    @endsection