<?php

namespace App\Http\Controllers;

use App\Models\NavItem;
use App\Http\Requests\StoreNavItemRequest;
use App\Http\Requests\UpdateNavItemRequest;

class NavItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNavItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NavItem $navItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NavItem $navItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNavItemRequest $request, NavItem $navItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NavItem $navItem)
    {
        //
    }
}
