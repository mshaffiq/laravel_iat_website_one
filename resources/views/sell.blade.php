@extends('layouts.app')

@section('content')
<div class="jumbotronTitle"><h1>SELLING ITEM</h1></div>
<div class="container-fluid">
    <form class="form-inline" action="/examples/actions/confirmation.php" method="post">
        <select class="custom-select mr-2 mb-2" id="itemCategories">
            <option selected>Item Categories</option>
            <option value="1">CPU</option>
            <option value="2">GPU</option>
            <option value="3">RAM</option>
            <option value="4">HDD/SSD</option>
            <option value="5">MOBO</option>
            <option value="6">CASE</option>
            <option value="7">PSU</option>
        </select>
        <div class="form-group mr-2 mb-2">
            <label class="sr-only" for="itemTitle">Title</label>
            <input type="text" class="form-control" id="inputTitle" placeholder="BRAND - MODEL - DESCRIPTION" required>
        </div>
        <div class="input-group mr-2 mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">RM</span>
            </div>
            <input type="text" class="form-control" aria-label="inputPrice">
            <div class="input-group-prepend">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2 mb-2">SELL!</button>
    </form>

</div>
@endsection
