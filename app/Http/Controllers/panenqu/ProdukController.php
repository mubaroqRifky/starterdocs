<?php

namespace App\Http\Controllers\panenqu;

use App\Http\Controllers\Controller;
use App\Http\Dummy;
use App\Http\Resources\panenqu\ProdukResource;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            sleep(1);

            $produk = Dummy\panenqu\Produk::getData();

            $data = compact('produk');
            return new ProdukResource($data);
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
        try {
            sleep(1);

            $produk = Dummy\Produk::getData();
            $detail = '<p>
                Mau Gurame potong segar & higienis yang siap masak?<br /><br />
                PanenQu menyediakan Gurame Potong yang dipanen langsung
                dalam keadaan segar & sudah dibersihkan serta dikemas
                secara higienis. Gurame kami dibudidaya oleh petani
                mitra CP Prima.<br /><br />
                Gurame memiliki kandungan gizi yang tinggi & baik untuk
                tubuh. Kandungan protein, vitamin A & B, serta asam
                aminonya yang tinggi baik untuk pertumbuhan. Selain itu,
                ikan gurame memiliki kadar air tinggi & kandungan lemak
                yang rendah sehingga juga baik untuk Anda yang sedang
                melakukan diet rendah lemak.<br /><br />
                Gurame sudah dibersihkan, dipotong & siap dimasak. Untuk
                menjaga kualitas produk agar tetap segar, harap disimpan
                di suhu -18C<br /><br />
                Cocok dijadikan berbagai masakan untuk keluarga.
            </p>

            <br />

            <ul class="list-disc pl-4">
                <li>
                    Gurame yang dibudidaya dari petani mitra binaan CP
                    Prima
                </li>
                <li>Mengandung Amino Esensial & Vitamin B</li>
                <li>Insang, sisik & isi perut sudah dibersihkan</li>
                <li>Produk di kemas dengan plastik food grade</li>
                <li>Divacum & dibekukan di suhu -18 C</li>
            </ul>';

            $link = [
                [
                    'img' => 'https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/imgTokped.png?alt=media&token=b2541f16-0818-492f-b49a-c113206378ad',
                    'alt' => 'Image Tokopedia',
                    'link' => 'http://bit.ly/tokopedia-panenqu',
                ],
                [
                    'img' => 'https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/imgShopee.png?alt=media&token=f2aa912d-02cc-455c-ace9-b96f2549bfe5',
                    'alt' => 'Image Shopee',
                    'link' => 'http://bit.ly/shopee-panenqu',
                ],
                [
                    'img' => 'https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/imgBlibi.png?alt=media&token=98fac62c-70bc-42f0-a5c1-caf004510969',
                    'alt' => 'Image Blibi',
                    'link' => 'http://bit.ly/blibli-panenqu',
                ],
                [
                    'img' => 'https://firebasestorage.googleapis.com/v0/b/catch-of-the-day-a8059.appspot.com/o/imgJdId.png?alt=media&token=04b5a9b3-ddec-485d-91cb-494647a0056e',
                    'alt' => 'Image JDID',
                    'link' => 'https://www.jd.id/shop/PanenQu-Jakarta-Official-Store_10072422.html',
                ],
            ];

            $data = compact('produk');
            return new ProdukResource($data);
        } catch (\Throwable $th) {
            throw $th;
        }
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
}
