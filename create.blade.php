@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Add Ingredients</h1>
    <hr />
    <form action="{{ route('imports.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="quantitive" class="form-control" placeholder="Quantitive">
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
@endsection