@extends('layouts.app')
@section('title', 'Admin | Edit item')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h4>Edit item</h4>
                <a href="" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.groups.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">NO PEMESANAN</label>
                        <input type="number" name="no_pem" value="{{ $item->no_pem }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL PEMESANAN</label>
                        <input type="date" name="tgl_pem" value="{{ $item->tgl_pem }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA PEMBELI</label>
                        <input type="text" name="nama_pem" value="{{ $item->nama_pem }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JENIS PEMESANAN</label>
                        <input type="text" name="jenis" value="{{ $item->jenis }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH </label>
                        <input type="number" name="jumlah" value="{{ $item->jumlah }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">TOTAL</label>
                        <input type="number" name="total" value="{{ $item->total }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="SAVE" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
