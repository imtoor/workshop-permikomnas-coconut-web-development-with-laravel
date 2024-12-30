@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/input.css') }}">
@endsection

@section('content')
<header class="header">
	<h1>INPUT DATA</h1>
</header>
<section>
	<div class="row">
		<div class="col-4 offset-4">

<div class="card text-bg-light">
	<div class="card-body">
		@if($errors->any())
			<div class="alert alert-sm alert-danger">{{$errors->first()}}</div>
		@endif
		<form action="{{ route('data-mahasiswa.store') }}" method="post" class="form">
			@csrf
			<input placeholder="Masukan Nama" type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{old('nama_lengkap')}}" required>
			<input placeholder="Masukan Nim" type="number" name="nim" id="nim" class="form-control" value="{{old('nim')}}" required>
			<input placeholder="Masukan Alamat" type="text" name="alamat" id="alamat" class="form-control" value="{{old('alamat')}}" required>
			<input placeholder="Masukan No.Telepon" type="number" name="no_telepon" id="no_telepon" class="form-control" value="{{old('no_telepon')}}" required>
			<input placeholder="Masukan Email" type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required>

			<label for="tgl_lahir">Tanggal Lahir :</label>
			<input  type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{old('tgl_lahir')}}" required>

			<div class="mb-3">	
				<label for="jenis_kelamin">Jenis Kelamin :</label>
				<input type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" class="form-check-input" required> Laki-laki &nbsp;
				<input  type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" class="form-check-input" required> Perempuan
			</div>
			
			<div class="mb-3">				
				<select name="agama" id="agama" class="form-control" required>
					<option value="" selected disabled>Pilih Agama</option>
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="hindu">Hindu</option>
					<option value="buddha">Buddha</option>
				</select>
			</div>

			<div class="mb-3">
				<select name="jurusan" id="jurusan" class="form-control" required>
					<option value="" selected disabled>Pilih Jurusan</option>
					<option value="informatika">Informatika</option>
					<option value="statistika">Statistika</option>
					<option value="elektronika">Elektronika</option>
					<option value="ilmu komunikasi">Ilmu Komunikasi</option>
					<option value="sistem informasi">Sistem Informasi</option>
				</select>
			</div>
			<div class="mb-3">				
				<select name="semester" id="semester" class="form-control" required>
					<option value="" selected disabled>Pilih Semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<button  type="submit" class="btn btn-primary">Kirim</button>
		</form>
	</div>
</div>


		</div>
	</div>
</form>
</section>
@endsection

@section('script')
<script>
    document.getElementById('data-mahasiswa').classList.add('active');
</script>
@endsection