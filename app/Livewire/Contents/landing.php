<?php

namespace App\Livewire\Contents;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\JenisDonasi;
use App\Models\Kegiatan;
use App\Models\Yayasan;
use Livewire\Component;

class Landing extends Component
{
    public $id;

    public function openDetailBerita($id)
    {
        $this->id = $id;
        $this->dispatch('showUserDetail', $id)->to('menu.detail-berita');
        
        return redirect()->route('berita.detail', ['id' => $id]);
    }
    public function render()
    {
        $dataBerita = Berita::latest()->take(3)->get();
        $kegiatanUnggulan = Kegiatan::where('status', 'unggulan')->latest()->take(6)->get();
        $jenisDonasi = JenisDonasi::latest()->take(6)->get();
        $dataVideo = Galeri::whereIn('jenis', ['link', 'video'])->latest()->take(6)->get();
        $dataFoto = Galeri::where('jenis', '=', 'gambar')->latest()->take(6)->get();
        $banner = Banner::latest()->take(3)->get();
        $bannerOne = Banner::first();
        $jumlahBanner= Banner::count();
        $yayasan = Yayasan::get();

        return view('livewire.contents.landing', [
            'berita' => $dataBerita,
            'foto' => $dataFoto,
            'video' => $dataVideo,
            'kegiatanUnggulan' => $kegiatanUnggulan,
            'jenisDonasi' => $jenisDonasi,
            'banner' => $banner,
            'bannerOne' => $bannerOne,
            'yayasan' => $yayasan,
            'jumlahBanner' => $jumlahBanner,
        ]);
    }
}
