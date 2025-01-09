@extends('layouts.app')

@section('title', 'MU Travel | Travel Umroh Terlengkap dan Terbaik se Indonesia')

@section('content')
    @include('components.hero', ['id' => 'hero'])
    @include('components.welcome', ['id' => 'tentang'])
    @include('components.profile')
    @include('components.poin')
    @include('components.cta')
    @include('components.perlengkapan')
    @isset($packages)
    @include('components.card_paket', ['id' => 'paket', 'packages' => $packages])
    @endisset
    @include('components.include')
    @isset($dokumentasi)
    @include('components.dokumentasi', ['id' => 'dokumentasi', 'dokumentasi' => $dokumentasi])
    @endisset
    @isset($testimoni)
        @include('components.testimoni', ['id' => 'testimoni', 'testimoni' => $testimoni])
    @endisset
    @include('components.mitra')
    @include('components.rekening')
@endsection