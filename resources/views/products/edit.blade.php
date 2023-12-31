@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">name</label>
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                    <label for="">price</label>
                    <input class="form-control" type="number" name="price" value="{{ $product->price }}">
                    <label for="">จำนวน</label>
                    <input class="form-control" type="number" name="number" value="{{ $product->number }}">
                    <button class="btn btn-success mt-3" type="submit">แก้ไข</button>
                </form>
            </div>
        </div>
    </div>
@endsection
