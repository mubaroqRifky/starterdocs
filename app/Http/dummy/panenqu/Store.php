<?php

namespace App\Http\Dummy\panenqu;

use App\Http\Dummy\BaseDummy;

class Store extends BaseDummy
{
    protected static $base = [
        [
            'id' => 1,
            'name' => 'Store Kuningan, Setiabudi',
            'address' => '<p>Puri Matari-2, RT.5/RW.5</p><p>Kuningan, Karet, Setiabudi</p><p>South Jakarta City</p><p>Jakarta 12920</p>',
            'phone' => '089526456318',
            'coordinate' => [
                'lat' => '-6.213649943112523',
                'lng' => ' 106.82955533210342'
            ]
        ],
        [
            'id' => 2,
            'name' => 'Farmers Market',
            'address' => '<p>Jl. H. R. Rasuna Said, RT.2/RW.5</p><p>Karet Kuningan, Kecamatan Setiabudi</p><p>Kota Jakarta Selatan</p><p>Jakarta 12940</p>',
            'phone' => '02129941299',
            'coordinate' => [
                'lat' => '-6.217916248337085',
                'lng' => '106.83509141158105'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Toko Ucok',
            'address' => '<p>Jl. Karet Gusuran III No.14, RT.6/RW.1</p><p>Karet, Kecamatan Setiabudi</p><p>Kota Jakarta Selatan</p><p>Jakarta 12920</p>',
            'phone' => '02134012130',
            'coordinate' => [
                'lat' => '-6.212307438459598',
                'lng' => '106.82453307220743'
            ]
        ],
        [
            'id' => 4,
            'name' => 'The Body Shop',
            'address' => '<p>Epiwalk Komplek Rasuna Epicentrum GF</p><p>Jl. H. R. Rasuna Said RT.2/RW.5, 12940</p><p>Kota Jakarta Selatan</p><p>Jakarta 12940</p>',
            'phone' => '0215000827',
            'coordinate' => [
                'lat' => '-6.21759675264186',
                'lng' => '106.83671582832616'
            ]
        ]
    ];
}
