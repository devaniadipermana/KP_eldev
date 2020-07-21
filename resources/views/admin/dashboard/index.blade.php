@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
              <!--start Modal Isi Saldo-->
              <div class="modal fade" id="isiSaldoModal" tabindex="-1" role="dialog" aria-labelledby="isiSaldoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="isiSaldoModalLabel">Saldo yang akan diisi</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="text" class="form-control" placeholder="Nominal Saldo">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Oke</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--end Modal -->

            <!--start Modal Refund -->
              <div class="modal fade" id="refundModal" tabindex="-1" role="dialog" aria-labelledby="refundModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="refundModalLabel">Refund Sejumlah</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="text" class="form-control" placeholder="Nominal Refund">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Oke</button>
                    </div>
                  </div>
                </div>
              </div>
            <!--end Modal -->


             <!--start Modal Isi Saldo-->
             <div class="modal fade" id="tiketModal" tabindex="-1" role="dialog" aria-labelledby="tiketModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title" id="tiketModalLabel">Saldo yang akan diisi</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                    <div class="form-group">
                      <label for="qtyTiketForm">Jumlah Tiket</label>
                      <input type="qtyTiket" class="form-control" id="qtyTiketForm" aria-describedby="qtyTiketHelp">
                    </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     <button type="button" class="btn btn-primary">Oke</button>
                   </div>
                  </div>
               </div>
              </div>
              <!--end Modal -->
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div> 
    <div class="row">
      <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <h5>Isi Saldo</h5><br>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#isiSaldoModal">
                Select
              </button> 
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <h5>
                Refund
              </h5><br>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#refundModal">
              Select
              </button>
            </div>
          </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <h5>
              Beli Tiket
            </h5><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tiketModal">
              Select
            </button>
          </div>
        </div>
      </div>
      </br>
    </div>
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <h5>
              Data Kartu
            </h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
              <div id="tes111" style="width:100%; height:400px;"></div>
          </div> 
        </div>
        


      </div>
    </div>
  

  <div class="section-body">
  </div>
</section>
@endsection


@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('tes111', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Monthly Average Rainfall'
      },
      subtitle: {
          text: 'Source: WorldClimate.com'
      },
      xAxis: {
          categories: [
              'Jan',
              'Feb',
              'Mar',
              'Apr',
              'May',
              'Jun',
              'Jul',
              'Aug',
              'Sep',
              'Oct',
              'Nov',
              'Dec'
          ],
          crosshair: true
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Rainfall (mm)'
          }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'Tokyo',
          data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

      }, {
          name: 'New York',
          data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

      }, {
          name: 'London',
          data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

      }, {
          name: 'Berlin',
          data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

      }]
  });
</script>
@endsection