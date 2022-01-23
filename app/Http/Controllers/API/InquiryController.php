<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInquiryRequest;
use App\Http\Requests\UpdateInquiryRequest;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->success("Inquiries retrived successfully", Inquiry::all()->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInquiryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInquiryRequest $request)
    {
        return $this->success("Inquiry created successfully", Inquiry::create($request->validated())->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        return $this->success("Inquiry retrieved successfully", $inquiry->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInquiryRequest  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInquiryRequest $request, Inquiry $inquiry)
    {
        $inquiry->update($request->validated());
        return $this->success("Inquiry updated successfully", $inquiry->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();
        return $this->success("Inquiry deleted successfully", $inquiry->toArray());
    }
}
