<?php

$data = [
    [
        "title" => "Customer Service Monitoring",
        "company" => "PT. Hypernet Indodata (06/2022 - 09/2022)",
        "details" => [
            "Memantau traffic pelanggan melalui PRTG Network Monitor",
            "Follow up pelanggan yang jaringannya down",
            "Pembuatan tiket untuk eskalasi ke NOC",
            "Menutup tiket yang tidak terpakai",
            "Menangani troubleshoot"
        ]
    ],
    [
        "title" => "Staff Engineer On Site",
        "company" => "PT. Centrin Online Prima (12/2021 - 02/2022)",
        "details" => [
            "Aktivasi Router TP-Link, Tenda, dll",
            "Sweeping kabel di tiap lantai",
            "Penarikan kabel ke apartemen",
            "Troubleshooting jaringan"
        ]
    ],
    [
        "title" => "Pengajar MikroTik MTCNA",
        "company" => "SMK Al-Falah Jakarta (11/2021)",
        "details" => [
            "Mengajar materi MikroTik MTCNA",
            "Membimbing praktik siswa"
        ]
    ],
    [
        "title" => "Staff Konsumsi - SRE Fest 2025",
        "company" => "Society of Renewable Energy",
        "details" => [
            "Penyusunan anggaran",
            "Pencarian vendor",
            "Penyusunan menu",
            "Distribusi konsumsi"
        ]
    ]
];

echo json_encode($data);