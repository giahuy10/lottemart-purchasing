<?php

namespace App\Http\Controllers;

use App\Purchasing;
use Illuminate\Http\Request;

class PurchasingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Purchasing::latest()->paginate(10);

        $response = [
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem()
            ],
            'data' => $items
        ];

        return response()->json($response);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchasing  $purchasing
     * @return \Illuminate\Http\Response
     */
    public function show(Purchasing $purchasing)
    {
        return response()->json($purchasing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchasing  $purchasing
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchasing $purchasing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchasing  $purchasing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchasing $purchasing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchasing  $purchasing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchasing $purchasing)
    {
        $purchasing->delete();
        return response()->json(['done']);
    }
}
