@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/data-mahasiswa.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
@endsection

@section('content')
        <h1>Input Data</h1>

    	<a href="{{ route('data-mahasiswa.create') }}" class="btn btn-primary btn-sm mt-3 mb-3" title="Tambah Data Mahasiswa">
            <img src="{{ asset('assets/img/add.png') }}" width="24px" alt=""> Tambah Data
        </a>

       <section>

        @if(session('success'))
            <div class="alert alert-success alert-sm">
                {{ session('success') }}
            </div>
        @endif

        <table id="table-mahasiswa">
            <thead>                
                <tr style="background-color: #07a4ff;">
                    <th>NO.</th>
                    <th>NAMA LENGKAP</th>
                    <th>NIM</th>
                    <th>ALAMAT</th>
                    <th>JURUSAN</th>
                    <th>AGAMA</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->nama_lengkap }}</td>
                        <td>{{ $value->nim }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->jurusan }}</td>
                        <td>{{ $value->agama }}</td>
                        <td>
                            <a href="{{ route('data-mahasiswa.show', $value->id) }}" class="btn btn-sm btn-info" title="Lihat Data"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('data-mahasiswa.edit', $value->id) }}" class="btn btn-sm btn-warning" title="Edit Data"><i class="fa fa-edit"></i></a>

                            <form id="hapus_form" action="{{ route('data-mahasiswa.destroy', $value->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data Mahasiswa {{ $value->nama_lengkap }} ?')" title="Hapus Data"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </section>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
@endsection

@section('script')
<script>
    document.getElementById('data-mahasiswa').classList.add('active');
    let table = new DataTable('#table-mahasiswa');
</script>
@endsection