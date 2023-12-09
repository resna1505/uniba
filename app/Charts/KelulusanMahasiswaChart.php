<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use DB;

class KelulusanMahasiswaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // $siswaKelas = Siswa_m::get();
        

        $prodi = DB::table('prodi as a')
        ->join('departemen as b', 'a.IDDEPARTEMEN', '=', 'b.ID')
        ->select('a.ID as IDPRODI', 'a.NAMA', 'a.TINGKAT')
        ->orderBy('a.NAMA')
        ->limit(12)
        ->get();

        $dataL = [];
        foreach ($prodi as $item) {
            $jumlahSiswa = DB::table('msmhs as a')
            ->join('mahasiswa as b', 'a.NIMHSMSMHS', '=', 'b.ID')
            ->leftJoin('mahasiswa2 as c', 'b.ID', '=', 'c.ID')
            ->where('b.STATUS', '=', 'A')
            ->where('b.KELAMIN','=','L')
            ->where('b.IDPRODI','=',$item->IDPRODI)
            ->count();
            $dataL[] = $jumlahSiswa;
        }

        $dataP = [];
        foreach ($prodi as $item) {
            $jumlahSiswa = DB::table('msmhs as a')
            ->join('mahasiswa as b', 'a.NIMHSMSMHS', '=', 'b.ID')
            ->leftJoin('mahasiswa2 as c', 'b.ID', '=', 'c.ID')
            ->where('b.STATUS', '=', 'A')
            ->where('b.KELAMIN','=','P')
            ->where('b.IDPRODI','=',$item->IDPRODI)
            ->count();
            $dataP[] = $jumlahSiswa;
        }

        $namaProdi = $prodi->pluck('NAMA')->toArray();

        return $this->chart->barChart()
            ->setTitle('Statistik Mahasiswa/i aktif')
            // ->setSubtitle('Rata-rata')
            ->addData('Laki-laki', $dataL)
            ->addData('Perempuan', $dataP)
            ->setHeight(385)
            ->setXAxis($namaProdi);
    }
}
