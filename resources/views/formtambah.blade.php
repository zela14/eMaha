@extends('layouts/main')

@section('title', 'formtambah')

@section('content')
            <div class="container-fluid mt-4 rounded">
                <form action="/student/simpan" method="post" class="pt-2 pb-2">
                    @csrf
                    <div class="form-group w-25">
                        <label for="nim">Nim</label>
                        <input type="number" class="form-control" id="nim" placeholder="Masukan Nim" name="nim">
                    </div>
                    <div class="form-group w-25">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                    </div>
                    <label for="gender">Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" class="form-check-input" id="gender" name="gender" value="laki-laki" checked>
                        <label for="gender">Laki-laki</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" class="form-check-input" id="gender" name="gender" value="perempuan" >
                        <label for="gender">Perempuan</label>
                    </div>
                    <div class="form-group w-25">
                        <label for="prodi">prodi</label>
                        <select class="form-control" id="prodi" name="prodi">
                            <option value="0">--Pilih Program Studi--</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Kedokteran">Kedokteran</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Desain Produk">Desain Produk</option>
                            <option value="Desain Produk">Arsitektur</option>
                        </select>
                    </div>
                    <label for="minat">Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" class="form-check-input" id="Artifical Intelegent" name="minat[]" value="Artifical Intelegent" checked>
                        <label for="Artifical Intelegent">Artifical Intelegent</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" class="form-check-input" id="Web Developer" name="minat[]" value="Web Developer">
                        <label for="Web Devoloper">Web Devoloper</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" class="form-check-input" id="Data Analyst" name="minat[]" value="Data Analyst">
                        <label for="Web Devoloper">Data Analyst</label>
                    </div>
                    <div class="modal-footer">
                        <a type="reset" class="btn btn-secondary" data-dismiss="modal" href="/mahasiswa">Close</a>
                        <button type="submit"  class="btn btn-primary ">Save</button>
                    </div>
                </form>
            </div>
            
            
@endsection

