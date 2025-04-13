@extends('livewire.layouts.main')
@section('content')
    <div>
        @livewire('menu.detail-berita', ['id' => $id_berita])
    </div>
@endsection
