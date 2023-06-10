@extends('layouts.main')

@section('title', 'Mahasiswa')

@section('content')
            <div class="container-fluid mt-4 rounded">
                <div class="card-header"><strong>Form Edit Student</strong></div>
                <div class="card-body">
                @php
                    $minat = explode(',', $mahasiswa->minat);
                @endphp
                <form action="/student/update/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                        <label for="nim">Nim</label>
                        <input type="number" class="form-control" id="nim" placeholder="Masukan Nim" name="nim" value="{{ $mahasiswa->nim }}">
                    </div>
                    <div class="form-group w-25">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $mahasiswa->nama }}">
                    </div>
                    <label for="gender">Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" class="form-check-input" id="gender" name="gender" value="laki-laki" {{ ($mahasiswa->gender == 'laki-laki' ? 'checked':'' )}}>
                        <label for="gender">Laki-laki</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" class="form-check-input" id="gender" name="gender" value="perempuan" {{ ($mahasiswa->gender == 'perempuan' ? 'checked':'' )}}>
                        <label for="gender">Perempuan</label>
                    </div>
                    <div class="form-group w-25">
                        <label for="prodi">prodi</label>
                        <select class="form-control" id="prodi" name="prodi">
                            <option value="0">--Pilih Program Studi--</option>
                            <option value="Sistem Informasi" {{ ($mahasiswa->prodi == 'Sistem Informasi')? 'selected':'' }}>Sistem Informasi</option>
                            <option value="Informatika" {{ ($mahasiswa->prodi == 'Informatika')? 'selected':'' }}>Informatika</option>
                            <option value="Kedokteran" {{ ($mahasiswa->prodi == 'Kedokteran')? 'selected':'' }}>Kedokteran</option>
                            <option value="Akuntansi" {{ ($mahasiswa->prodi == 'Akuntansi')? 'selected':'' }}>Akuntansi</option>
                            <option value="Manajemen" {{ ($mahasiswa->prodi == 'Manajemen')? 'selected':'' }}>Manajemen</option>
                            <option value="Desain Produk" {{ ($mahasiswa->prodi == 'Desain Produk')? 'selected':'' }}>Desain Produk</option>
                            <option value="Arsitektur" {{ ($mahasiswa->prodi == 'Arsitektur')? 'selected':'' }}>Arsitektur</option>
                        </select>
                    </div>
                    <label for="minat">Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" class="form-check-input" id="Artifical Intelegent" name="minat[]" value="Artificial Intelegent" {{ in_array('Artificial Intelegent', $minat) ? 'checked':'' }}>
                        <label for="Artifical Intelegent">Artifical Intelegent</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" class="form-check-input" id="Web Devoloper" name="minat[]" value="Web Developer" {{ in_array('Web Developer', $minat) ? 'checked':'' }}>
                        <label for="Web Devoloper">Web Devoloper</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" class="form-check-input" id="Data Analyst" name="minat[]" value="Data Analyst" {{ in_array('Data Analyst', $minat) ? 'checked':'' }}>
                        <label for="Web Devoloper">Data Analyst</label>
                    </div>
                    <div class="modal-footer">
                        <a type="reset" class="btn btn-secondary" data-dismiss="modal" href="/mahasiswa">Close</a>
                        <button type="submit"  class="btn btn-primary ">Save</button>
                    </div>
                </form>
            </div>
            </div>
            
            
@endsection

