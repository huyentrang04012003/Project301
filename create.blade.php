@extends('layouts.app')
 
@section('body')
<form action="{{ route('management.store') }}" method="POST">
    @csrf
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Manage code product</h1>
        <button class="btn btn-primary">Submit</button>
        {{-- <a href="{{ route('management.create') }}" class="btn btn-primary">Submit</a> --}}
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
            
            </tr>
        </thead>
        <tbody>
            @if($management->count() > 0)
                @foreach($management as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        
                        <td class="align-middle">{{ $rs->ingredient }}</td>
                        <td class="align-middle">{{ $rs->quantity_import }}</td>
                        <td><input name="remain[{{ $rs->manaid }}]" value="{{$rs->Remain}}"></td>
                        <input type="hidden" name="ids[]" value="{{ $rs-> manaid }}">
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Ingredient not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</form>
@endsection