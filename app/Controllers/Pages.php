<?php

namespace App\Controllers;


class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl. setia budi 02',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl. abc 124',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
