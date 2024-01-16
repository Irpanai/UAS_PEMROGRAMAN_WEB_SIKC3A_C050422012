<?php

namespace App\Http\Controllers\Api;

use App\Models\Asuransi;
use App\Http\Resources\AsuransiResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsuransiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
     {
         $asuransi = Asuransi::find('id');
         return AsuransiResource::collection(Asuransi::all()->load('Asuransi'));
     }

    public function show($id)
    {
        $asuransi = Asuransi::find($id);
        return response()->json($asuransi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
