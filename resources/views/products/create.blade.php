@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <label for="">name</label>
                    <input class="form-control" type="text" name="name">
                    <label for="">price</label>
                    <input class="form-control" type="number" name="price">
                    <label for="">จำนวน</label>
                    <input class="form-control" type="number" name="number">
                    <button class="btn btn-success mt-3" type="submit">สร้าง</button>
                </form>
            </div>
        </div>
    </div>
@endsection
