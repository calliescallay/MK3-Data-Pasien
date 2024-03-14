@extends('layouts.admin')

@section('title', 'Show Product')

@section('tabel')
    <h1 class="mb-0">Detail Dokter</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Dokter</label>
            <input type="text" name="title" class="form-control" placeholder="Nama" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No hp</label>
            <input type="text" name="price" class="form-control" placeholder="NoHP" value="{{ $product->price }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">email</label>
            <input type="text" name="product_code" class="form-control" placeholder="Email"
                value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Spesialis</label>
            <textarea class="form-control" name="description" placeholder="Spesialis" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
