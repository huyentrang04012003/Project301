@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Manage Cod product</h1>
        <a href="{{ route('management.create') }}" class="btn btn-primary">Add Reamin</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Ingredient</th>
                <th>Quantitive</th>
                <th>Remain</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($management->count() > 0)
                @foreach($management as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        
                        <td class="align-middle">{{ $rs->ingredient }}</td>
                        <td class="align-middle">{{ $rs->quantity_import }}</td>
                        <td class="align-middle">{{ $rs->Remain }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                               
                                
                                <form action="{{ route('imports.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Nothing remain</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection