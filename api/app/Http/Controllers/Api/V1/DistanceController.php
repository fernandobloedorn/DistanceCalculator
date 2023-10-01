<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Working!'
        ]);
    }

    public function calculateDistanceInKilometers(Request $request) {

        $payload = json_decode($request->getContent(), true);

        $longitude = $payload['longitude'];
        $latitude = $payload['latitude'];

        return response()->json([
            'success' => true,
            'message' => 'Here we will calculate the distance between the points :)',
            'longitude' => $longitude,
            'latitude' => $latitude
        ], 200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

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
