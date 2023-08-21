@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Ingredients</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ingredient</label>
            <input type="text" name="ingredient" class="form-control" placeholder="Ingredient" value="{{ $imports->ingredient }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" name="quantity_import" class="form-control" placeholder="Quantity" value="{{ $imports->quantity_import }}" readonly>
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $imports->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $imports->updated_at }}" readonly>
        </div>
    </div>
@endsection