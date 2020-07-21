@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Daftar Menu</h1>
  </div>
  <div class="section-body">
  <div class="row">
      <div class="col-sm">  <!-- dari sini di editnya biar boxnya -->
          <div class="card">
            <div class="card-body">
              <h5>Nama Makanan  </h5><br>
              <!-- disini mulai dibikin plotting box -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div>
                                    <img src="https://kongkrit.com/wp-content/uploads/2019/04/cara-membuat-rendang-daging-sapi-resep-daging-sapi.jpg" alt="gambar rendang" style="width:200px;height:200px;" class="img-thumbnail"><br>
                                    <h7>Rendang daging</h7>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card-body">
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
@endsection
