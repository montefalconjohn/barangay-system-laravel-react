<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangayOfficialsRequest;
use App\Http\Resources\BarangayOfficialsResource;
use App\Models\BarangayOfficial;
use Illuminate\Http\Request;
use App\Services\BarangayOfficials\BarangayOfficialsServiceInterface;

class BarangayOfficialController extends Controller
{
    /** @var BarangayOfficialsServiceInterface */
    private $barangayOfficialService;

    /**
     * BarangayOfficialController constructor.
     * 
     * @param BarangayOfficialsServiceInterface
     */
    public function __construct(BarangayOfficialsServiceInterface $barangayOfficialService)
    {
        $this->barangayOfficialService = $barangayOfficialService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BarangayOfficialsResource::collection($this->barangayOfficialService->fetchBarangayOfficials());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BarangayOfficialsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangayOfficialsRequest $request)
    {
        return new BarangayOfficialsResource($this->barangayOfficialService->createBarangayOfficial($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangayOfficial  $barangayOfficial
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return new BarangayOfficialsResource($this->barangayOfficialService->fetchBarangayOfficialById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BarangayOfficialsRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BarangayOfficialsRequest $request, int $id)
    {
        $this->barangayOfficialService->updateBarangayOfficialById($request, $id);

        return response()->json('Barangay Official updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangayOfficial  $barangayOfficial
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->barangayOfficialService->deleteBarangayOfficial($id);

        return response()->json('Barangay Official successfully deleted.');
    }
}
