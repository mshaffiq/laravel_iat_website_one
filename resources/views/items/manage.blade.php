@extends('layouts.app')

@section('content')
<div class="jumbotronTitle"><h1 class="container-fluid">MANAGE ITEM</h1></div>
<div class="container-fluid">
    <div class="list-group">
    <h4 class="list-group-item list-group-item-dark mt-4 mb-4">ITEM LIST</h4>
    </div>
    <ul class="list-group">
        @foreach ($item as $item)
        <li class="list-group-item">{{ $item->id }}) {{ $item->itemCategories }} - {{ $item->itemTitle }} - RM{{ $item->itemPrice }}</li>
        <a class="btn btn-primary mb-2" href="/manage/{{ $item->id }}/edit">EDIT ITEM</a>
        @endforeach
    </ul>
</div>
@endsection
