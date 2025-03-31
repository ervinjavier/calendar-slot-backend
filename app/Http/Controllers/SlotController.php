<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slots = Slot::all();

        return response()->json([
            'slots' => $slots
        ]);
    }

    public function deduct(Request $request)
    {
        $validated = $request->validate([
            'slot_id' => 'required',
        ]);

        if ($validated) {
            $slot = Slot::findOrFail($request->slot_id);
            $slot->decrement('capacity');
            $slot->save();

            return response()->json([
                'slot' => $slot
            ]);
        }
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
