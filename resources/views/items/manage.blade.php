@extends('layouts.app')

@section('content')
<div class="jumbotronTitle"><h1 class="container-fluid">MANAGE ITEM</h1></div>
<div class="container-fluid">
    <div class="list-group">
    <h4 class="list-group-item list-group-item-dark mt-4 mb-4">ITEM LIST</h4>
    </div>
    <ul class="list-group">
        @foreach ($item as $key => $item)
        <li class="list-group-item">{{$key+1}}) {{ $item->itemCategories }} - {{ $item->itemTitle }} - RM{{ $item->itemPrice }} - {{ $item->itemAvailability}}</li>
        <div class="d-flex justify-content-start">
            <div>
                @if ($item->itemAvailability === "AVAILABLE")
                <a class="btn btn-primary mb-4" href="/manage/{{ $item->id }}/edit">EDIT ITEM</a>
                <a class="btn btn-primary mb-4" href="/manage/{{ $item->id }}/delete" onclick="return confirm('Are you sure to delete? {{ $item->itemTitle }} - RM{{ $item->itemPrice }}')">DELETE ITEM</a>
                @else
                <a class="btn btn-primary mb-4" href="/manage/{{ $item->id }}/delete" onclick="return confirm('Are you sure to delete? {{ $item->itemTitle }} - RM{{ $item->itemPrice }}')">DELETE ITEM</a>
                @endif
            </div>
        </div>
        @endforeach
    </ul>
</div>
@endsection
