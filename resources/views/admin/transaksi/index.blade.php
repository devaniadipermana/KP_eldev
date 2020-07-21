@extends('layouts.admin-master')

@section('title')
Transaksi
@endsection

@section('content') 

@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Transaksi</h1>
    </div>
    <div class="section-body">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="col-sm">  <!-- dari sini di editnya biar boxnya -->
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mt-3">Daftar Transaksi</h2>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">RFID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>111111</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


