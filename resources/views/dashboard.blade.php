@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}">
@endsection

@section('content')
<header class="header">
    <h1>Dashboard</h1>
</header>

<section class="stats">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <img class="logo" src="{{ asset('assets/img/detailmahasiswa-removebg-preview.png') }}" alt="">
                </div>
                <div class="col-sm-10">
                    <div class="conten">
                        <h2>Total Mahasiswa</h2>
                        <h4>{{ number_format($jumlahMahasiswa) }}</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    document.getElementById('dashboard').classList.add('active');
</script>
@endsection