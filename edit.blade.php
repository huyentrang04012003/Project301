@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Ingredients</h1>
    <hr />
    <form action="{{ route('imports.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ingredient</label>
                <input type="text" name="ingredient" class="form-control" placeholder="Ingredient" value="{{ $product->ingredient }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Quantitive</label>
                <input type="text" name="quantity-import" class="form-control" placeholder="Quantitive" value="{{ $product->quantity_import }}" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection