@extends('livewire.layouts.fonts')
@extends('livewire.layouts.main')
@section('content')
    <div>
        @livewire('menu.program.konfirmasi-pendaftaran', ['id' => $id_registration])
    </div>
@endsection
