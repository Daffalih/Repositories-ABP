<?php

namespace App\Http\Controllers;

class ProfileController
{
    private $data;

    public function __construct()
    {
        $this->data = [
            "nama" => "Daffa Falih Aqilah",
            "kontak" => "085174235775",
            "email" => "daffafalihaqilah@gmail.com",
            "alamat" => "Bekasi, Indonesia",
            "linkedin" => "linkedin.com/in/daffa-falih-aqilah/",

            "ringkasan" => "Mahasiswa aktif jurusan Teknik Informatika di Telkom University Purwokerto dengan ketertarikan yang kuat dalam dunia teknologi. Memiliki semangat tinggi untuk mendalami dan mengembangkan keterampilan di bidang ini. Berpengalaman sebagai Junior Network Engineering dan memiliki beberapa pengalaman organisasi yang relevan.",

            "skills" => [
                "Sweeping Cable Ethernet",
                "Aktivasi Router Internet",
                "Microsoft Office",
                "Computer Network",
                "MikroTik MTCNA",
                "Cisco CCNA",
                "PRTG Network Monitor",
                "C++",
                "Java",
                "Python"
            ],

            "bahasa" => [
                "Indonesia (Penutur asli)",
                "English (Menengah)",
                "Arabic (Dasar)"
            ],

            "pendidikan" => [
                "Telkom University - Informatika (2023 - Sekarang)",
                "SMK IDN Boarding School - Teknik Komputer Jaringan (2020 - 2023)"
            ],

            "pengalaman" => [
                [
                    "title" => "Customer Service Monitoring",
                    "company" => "PT. Hypernet Indodata (06/2022 - 09/2022)",
                    "desc" => [
                        "Memantau traffic pelanggan melalui PRTG Network Monitor",
                        "Follow up pelanggan yang jaringannya down",
                        "Membuat tiket untuk eskalasi ke NOC",
                        "Menutup tiket yang tidak terpakai",
                        "Troubleshooting jaringan"
                    ]
                ],
                [
                    "title" => "Staff Engineer On Site",
                    "company" => "PT. Centrin Online Prima (12/2021 - 02/2022)",
                    "desc" => [
                        "Aktivasi Router (TP-Link, Tenda, dll)",
                        "Sweeping dan pengecekan kabel",
                        "Penarikan kabel ke apartemen",
                        "Troubleshooting jaringan"
                    ]
                ],
                [
                    "title" => "Staff Divisi Konsumsi",
                    "company" => "SRE Fest 2025 - Society of Renewable Energy (10/2025)",
                    "desc" => [
                        "Penyusunan Anggaran",
                        "Pencarian Vendor (Catering)",
                        "Penyusunan Menu",
                        "Pendataan Kebutuhan Khusus",
                        "Distribusi Konsumsi"
                    ]
                ],
                [
                    "title" => "Peserta MikroTik User Meeting",
                    "company" => "MikroTik User Meeting (10/2020)",
                    "desc" => [
                        "Berpartisipasi dalam acara MikroTik User Meeting"
                    ]
                ],
                [
                    "title" => "Pengajar MikroTik MTCNA",
                    "company" => "SMK Al-Falah Jakarta (11/2021)",
                    "desc" => [
                        "Mengajar materi MikroTik MTCNA",
                        "Membimbing praktik siswa"
                    ]
                ]
            ],

            "sertifikat" => [
                "MikroTik MTCRE (2021 - 2024)",
                "MikroTik MTCNA (2021 - 2024)",
                "Microsoft Certified: Azure AI Fundamentals (04/2026)"
            ]
        ];
    }

    public function home()
    {
        return view('pages.home', ['data' => $this->data]);
    }

    public function about()
    {
        return view('pages.about', ['data' => $this->data]);
    }

    public function skills()
    {
        return view('pages.skills', ['data' => $this->data]);
    }

    public function experience()
    {
        return view('pages.experience', ['data' => $this->data]);
    }
}