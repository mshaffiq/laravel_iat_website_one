@extends('layouts.app')

@section('content')
<div class="jumbotronTitle"><h1 class="container-fluid">BUYING ITEM</h1></div>
<div class="container-fluid">
    <div class="list-group">
        <h4 class="list-group-item list-group-item-dark mt-4 mb-4">ITEMS FOR SALE (NEWEST FIRST)</h4>
    </div>
    <ul class="list-group">
        @foreach ($item as $key => $item)
        <li class="list-group-item">{{$key+1}}) {{ $item->itemCategories }} - {{ $item->itemTitle }} - RM{{ $item->itemPrice }} - {{$item->itemAvailability}}</li>
        <a class="btn btn-primary mb-2" href="/buy/{{$item->id}}">BUY ITEM</a>
        @endforeach
    </ul>
</div>
@endsection
