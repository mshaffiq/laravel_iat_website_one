@extends('layouts.app')

@section('content')
<div class="jumbotronTitle"><h1 class="container-fluid">SELLING ITEM</h1></div>
<div class="container-fluid mt-5">

    <form class="form-inline" action="/sell" method="POST">
        @csrf

        <div class="input-group">
            <div class="input-group-prepend mb-2">
                <label class="input-group-text" for="itemCategories">ITEM CATEGORIES</label>
            </div>
            <select for="itemCategories" class="custom-select mr-2 mb-2" id="itemCategories" name="itemCategories" required>
                <option selected>Choose...</option>
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
            <input type="text" style="width: 375px;" class="form-control" id="itemTitle" name="itemTitle" placeholder="DESCRIPTION (Brand - Model - Capacity - Colour)" required>
        </div>

        <div class="input-group mr-2 mb-2">

            <div class="input-group-prepend">
                <span class="input-group-text">RM</span>
            </div>

            <div>
                <label class="sr-only" for="itemPrice">Title</label>
                <input type="number" name="itemPrice" class="form-control" aria-label="itemPrice" required>
            </div>

        </div>

        <button type="submit" class="btn btn-primary mr-2 mb-2">SELL ITEM !</button>

    </form>

</div>
@endsection
