<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FasilitasKampus;
use App\Models\Berita;
use App\Models\news_report;
use App\Models\OrganisasiMahasiswa;

class SiteManagementController extends Controller
{
    public function fasilitasKampus()
    {
        $fasilitas = FasilitasKampus::all();
        return view('admin.site-management.fasilitas', compact('fasilitas'));
    }

    public function newsReport()
    {
        $berita = news_report::all();
        return view('admin.site-management.news', compact('berita'));
    }

    public function organisasiMahasiswa()
    {
        $organisasi = OrganisasiMahasiswa::all();
        return view('admin.site-management.organisasi', compact('organisasi'));
    }
}
