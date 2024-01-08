@extends('layouts.app')
@section('title', 'Admin | Edit Bahan')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Edit Bahan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.update', $row->cat_id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">KODE</label>
                        <input type="text" name="cat_kode" value="{{$row->cat_kode}}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="cat_name" value="{{$row->cat_name}}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JENIS</label>
                        <input type="text" name="cat_jenis" value="{{$row->cat_jenis}}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="number" name="cat_harga" value="{{$row->cat_harga}}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">TOTAL</label>
                        <input type="number" name="cat_total" value="{{$row->cat_total}}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="UPDATE" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
