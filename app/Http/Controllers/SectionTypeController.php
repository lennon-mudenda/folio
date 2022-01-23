<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionTypeRequest;
use App\Http\Requests\UpdateSectionTypeRequest;
use App\Models\SectionType;

class SectionTypeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSectionTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionType  $sectionType
     * @return \Illuminate\Http\Response
     */
    public function show(SectionType $sectionType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionType  $sectionType
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionType $sectionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSectionTypeRequest  $request
     * @param  \App\Models\SectionType  $sectionType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectionTypeRequest $request, SectionType $sectionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionType  $sectionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionType $sectionType)
    {
        //
    }
}
