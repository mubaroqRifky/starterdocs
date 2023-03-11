<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\panenqu\EventResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthRequest $request)
    {
        try {
            sleep(2);

            return new EventResource($request->all());
        } catch (\Throwable $th) {
            throw $th;
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login_app()
    {
        $response = Http::asForm()->post('https://app.cpp.co.id/mainsite/authentication.php', [
            'p_type' => 'auth',
            'id_token' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImI0OWM1MDYyZDg5MGY1Y2U0NDllODkwYzg4ZThkZDk4YzRmZWUwYWIiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiOTM0NTg2NDY5NjAyLWYybTJxZTZsNjh0OTZuc3NrNjQwdGxnZHNjZjQzaWttLmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiOTM0NTg2NDY5NjAyLWYybTJxZTZsNjh0OTZuc3NrNjQwdGxnZHNjZjQzaWttLmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTA3MTM0MzUzNjM5NTY2MTM3OTA3IiwiaGQiOiJjcHAuY28uaWQiLCJlbWFpbCI6ImFjaG1hZHJpZmtpLm11YmFyb3FAY3BwLmNvLmlkIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJLTTVFd2t3aWhkdHZ2eVhmaHVsNTFRIiwibmFtZSI6IkFjaG1hZCBSaWZraSBNdWJhcm9xIiwicGljdHVyZSI6Imh0dHBzOi8vbGgzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hL0FFZEZUcDYxZWNCNVF3eldpeExRNk1JblRjUXhsUDFlWUlsMWczZWNTc3lEPXM5Ni1jIiwiZ2l2ZW5fbmFtZSI6IkFjaG1hZCIsImZhbWlseV9uYW1lIjoiUmlma2kgTXViYXJvcSIsImxvY2FsZSI6ImVuIiwiaWF0IjoxNjc2NDcyMDQxLCJleHAiOjE2NzY0NzU2NDEsImp0aSI6ImM5MThiZTU2MDM2OTI4MmU4NzFkOTYwODRlNmIxNDA5NGExNzZlNjAifQ.gPQq6eYLXB0JybTyjfuvkDQbWPkFfojMV6LfIotrOXHRMyCzwIeCNo_JD5nJyoipRTxYZmB2Tdw23Zoqco7D-chQu2cgKaGUTBIxXW3w88tu3_8NqYWUOTQDrw9mRAB91E-EyVMBjW0ZMc20FUDoWJi_jK8usePwNSr8cmwOK9h80eimKQWCfW7RTnxv_I9XMaZTKJKUfXYj48fBG4YFOjWenhKwvklwnlRN-IC4Ewacg4FYfscx4IdPNcb3KQymLQ9ELEC5_EZlbvwYCb3wmxKzTQ-0vEivmjj-j1LYDYTQqkN4NG3ACNWBMdKBdPJ1FunUFzumxwrfPUe8zGUqxA',
        ]);

        // $cookie = $response->cookies()->toArray();
        $cookies = collect($response->cookies()->toArray())->keyBy('Name')->map->Value;

        // $req2 = Http::withCookies($cookies, 'domain');
        // dd($cookies['PHPSESSID']);
        // dd($cookie[0]);
        $cookie = cookie('PHPSESSIDA', $cookies['PHPSESSID']);
        $response = new Response($cookies['PHPSESSID']);
        $response->withCookie($cookie, 'localhost');
        return $response;
    }
}
