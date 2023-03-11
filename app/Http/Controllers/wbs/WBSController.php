<?php

namespace App\Http\Controllers\wbs;

use App\Http\Controllers\Controller;
use App\Http\Requests\WBSRequest;
use App\Http\Resources\wbs\WBSResource;
use Illuminate\Http\Request;

class WBSController extends Controller
{
    public function store(WBSRequest $request)
    {
        try {
            return new WBSResource($request->all(), 'Terima Kasih
            Berhasil Diajukan');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
