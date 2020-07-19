<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("items.sell");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $item = new Items();
        $item->itemCategories = request("itemCategories");
        $item->itemTitle = request("itemTitle");
        $item->itemPrice = request("itemPrice");
        $item->itemAvailability = "AVAILABLE";
        $item->save();

        return redirect("/buy");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Items $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Items::find($id);
        return view("items.edit", compact("item"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $item = Items::find($id);

        $item->itemCategories = request("itemCategories");
        $item->itemTitle = request("itemTitle");
        $item->itemPrice = request("itemPrice");
        $item->itemAvailability = "SOLD";
        $item->save();

        return redirect("/manage");
    }

    public function updateAvailability($id)
    {
        $item = Items::find($id);

        $item->itemAvailability = "SOLD";
        $item->save();

        return redirect("/buy");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();

        return redirect("/manage");
    }

}
