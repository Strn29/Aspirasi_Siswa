@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">Laporkan Keluhan Anda</div>

        <div class="card-body">
          @if (session('status'))
          <div class="text text-success" role="text">
            {{ session('status') }}
          </div>
          @endif

          <form method="POST" action="/success">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap"
                  name="namalengkap" value="{{old('namalengkap')}}">
                @error('namalengkap')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-10">
                <select name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror">
                  <option value="XI RPL 1">XI RPL 1</option>
                </select>
                @error('kelas')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nomor Handphone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp"
                  name="nomorhp" value="{{old('nomorhp')}}">
                @error('nomorhp')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select name="jeniskelamin" id="jeniskelamin"
                  class="form-control @error('jeniskelamin') is-invalid @enderror">
                  <option hidden>Jenis Kelamin</option>
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                  <option value="null">Tidak Ada Kelamin</option>
                </select>
                @error('jeniskelamin')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Keluhan</label>
              <div class="col-sm-10">
                <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                  <option hidden>Kategori Keluhan</option>
                  <option value="spp">Pembayaran SPP</option>
                  <option value="antriankantinsehat">Antrian Kantin Sehat</option>
                  <option value="pelayanantatausaha">Pelayanan TataUsaha</option>
                </select>
                @error('kategori')
                <div class="text text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggapan</label>
              <div class="col-sm-10">
                <textarea class="form-control @error('keluh') is-invalid @enderror" id="keluh" name="keluh" rows="3"
                  value="{{old('keluh')}}"></textarea>
                @error('keluh')
                <div class="text text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary float-right">Kirim Sekarang!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection