@extends('layouts.app')

@section('content')
<div class="jumbotronTitle"><h1 class="container-fluid">EDIT ITEM</h1></div>
<div class="container-fluid mt-5">

    <form class="form-inline" action="/manage/{{ $item->id }}" method="POST">
        @csrf
        @method("PUT")

        <div class="input-group">
            <div class="input-group-prepend mb-2">
                <label class="input-group-text" for="itemCategories">ITEM CATEGORIES</label>
            </div>
            <select for="itemCategories" class="custom-select mr-2 mb-2" id="itemCategories" value="{{$item->itemCategories}}" name="itemCategories" required>
                <option selected>{{$item->itemCategories}}</option>
                <option value="CPU">CPU</option>
                <option value="GPU">GPU</option>
                <option value="RAM">RAM</option>
                <option value="SSD">SSD</option>
                <option value="HDD">HDD</option>
                <option value="MOBO">MOBO</option>
                <option value="CASE">CASE</option>
                <option value="PSU">PSU</option>
            </select>
        </div>


        <div class="form-group mr-2 mb-2">
            <label class="sr-only" for="itemTitle">Title</label>
            <input type="text" class="form-control" id="itemTitle" value="{{$item->itemTitle}}" name="itemTitle" placeholder="DESCRIPTION (Brand - Model - Capacity - Colour)" required>
        </div>

        <div class="input-group mr-2 mb-2">

            <div class="input-group-prepend">
                <span class="input-group-text">RM</span>
            </div>

            <div>
                <label class="sr-only" for="itemPrice">Title</label>
                <input type="number" value="{{$item->itemPrice}}" name="itemPrice" class="form-control" aria-label="itemPrice" required>
            </div>

        </div>

        <button type="submit" class="btn btn-primary mr-2 mb-2">EDIT ITEM</button>

    </form>

</div>
@endsection
