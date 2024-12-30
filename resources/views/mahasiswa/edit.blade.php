@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/input.css') }}">
@endsection

@section('content')
<header class="header">
	<h1>EDIT DATA</h1>
</header>
<section>
	<div class="row">
		<div class="col-4 offset-4">

<div class="card text-bg-warning">
	<div class="card-body">
		@if($errors->any())
			<div class="alert alert-sm alert-danger">{{$errors->first()}}</div>
		@endif
		<form action="{{ route('data-mahasiswa.update', $mahasiswa->id) }}" method="post" class="form">
			@csrf
			@method('PUT')
			<input placeholder="Masukan Nama" type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $mahasiswa->nama_lengkap }}" required>

			<input placeholder="Masukan Nim" type="number" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
			
			<input placeholder="Masukan Alamat" type="text" name="alamat" id="alamat" class="form-control" value="{{ $mahasiswa->alamat }}" required>
			
			<input placeholder="Masukan No.Telepon" type="number" name="no_telepon" id="no_telepon" class="form-control" value="{{ $mahasiswa->no_telepon }}" required>
			
			<input placeholder="Masukan Email" type="email" name="email" id="email" class="form-control" value="{{ $mahasiswa->email }}" required>

			<label for="tgl_lahir">Tanggal Lahir:</label>
			<input  type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $mahasiswa->tgl_lahir }}" required>

			<div class="mb-3">	
				<label for="jenis_kelamin">Jenis Kelamin:</label>
				<input type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" class="form-check-input" @if($mahasiswa->jenis_kelamin == 'laki-laki') checked @endif required> Laki-laki &nbsp;
				<input  type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" class="form-check-input" @if($mahasiswa->jenis_kelamin == 'perempuan') checked @endif> Perempuan
			</div>
			
			<div class="mb-3">				
				<select name="agama" id="agama" class="form-control" required>
					<option value="" selected>Pilih Agama</option>
					<option value="islam" {{ $mahasiswa->agama == 'islam' ? 'selected':'' }}>Islam</option>
					<option value="kristen" {{ $mahasiswa->agama == 'kristen' ? 'selected':'' }}>Kristen</option>
					<option value="hindu" {{ $mahasiswa->agama == 'hindu' ? 'selected':'' }}>Hindu</option>
					<option value="buddha" {{ $mahasiswa->agama == 'buddha' ? 'selected':'' }}>Buddha</option>
					<option value="konghucu" {{ $mahasiswa->agama == 'konghucu' ? 'selected':'' }}>Konghucu</option>
				</select>
			</div>

			<div class="mb-3">
				<select name="jurusan" id="jurusan" class="form-control" required>
					<option value="" selected>Pilih Jurusan</option>
					<option value="informatika" {{ $mahasiswa->jurusan == 'informatika' ? 'selected':'' }}>Informatika</option>
					<option value="statistika" {{ $mahasiswa->jurusan == 'statistika' ? 'selected':'' }}>Statistika</option>
					<option value="elektronika" {{ $mahasiswa->jurusan == 'elektronika' ? 'selected':'' }}>Elektronika</option>
					<option value="ilmu komunikasi" {{ $mahasiswa->jurusan == 'ilmu komunikasi' ? 'selected':'' }}>Ilmu Komunikasi</option>
					<option value="sistem informasi" {{ $mahasiswa->jurusan == 'sistem informasi' ? 'selected':'' }}>Sistem Informasi</option>
				</select>
			</div>
			<div class="mb-3">				
				<select name="semester" id="semester" class="form-control" required>
					<option value="" selected>Pilih Semester</option>
					<option value="1" {{ $mahasiswa->semester == '1' ? 'selected':'' }}>1</option>
					<option value="2" {{ $mahasiswa->semester == '2' ? 'selected':'' }}>2</option>
					<option value="3" {{ $mahasiswa->semester == '3' ? 'selected':'' }}>3</option>
					<option value="4" {{ $mahasiswa->semester == '4' ? 'selected':'' }}>4</option>
					<option value="5" {{ $mahasiswa->semester == '5' ? 'selected':'' }}>5</option>
				</select>
			</div>
			<button  type="submit" class="btn btn-primary">Update</button>
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