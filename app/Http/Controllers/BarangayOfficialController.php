<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangayOfficialRequest;
use App\Http\Resources\BarangayOfficialResource;
use App\Models\BarangayOfficial;
use Illuminate\Http\Request;
use App\Services\BarangayOfficials\BarangayOfficialServiceInterface;

class BarangayOfficialController extends Controller
{
    /** @var BarangayOfficialServiceInterface */
    private $barangayOfficialService;

    /**
     * BarangayOfficialController constructor.
     * 
     * @param BarangayOfficialsServiceInterface
     */
    public function __construct(BarangayOfficialServiceInterface $barangayOfficialService)
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
        return BarangayOfficialResource::collection($this->barangayOfficialService->fetchBarangayOfficials());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BarangayOfficialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangayOfficialRequest $request)
    {
        return new BarangayOfficialResource($this->barangayOfficialService->createBarangayOfficial($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangayOfficial  $barangayOfficial
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return new BarangayOfficialResource($this->barangayOfficialService->fetchBarangayOfficialById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BarangayOfficialRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BarangayOfficialRequest $request, int $id)
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
