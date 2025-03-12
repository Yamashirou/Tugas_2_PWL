<?php

class Mahasiswa
{
    public $nim;
    public $nama;

    function setData($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function getData()
    {
        $mhs = [
            'nim' => $this->nim,
            'nama' => $this->nama
        ];

        return $mhs;
    }

    function printData($data = null)
    {
        if (!empty($data)) {
                 echo "<p>Halo, <strong>" . htmlspecialchars($data['nama']) . "</strong> dengan NIM <strong>" . htmlspecialchars($data['nim']) . "</strong></p>";
        } else {
            echo "data kosong";
        }
    }
}