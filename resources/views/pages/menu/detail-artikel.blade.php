@extends('livewire.layouts.main')
@section('content')
    <div>
        @livewire('menu.detail-artikel', ['id' => $id_artikel])
    </div>
@endsection
