@extends('layouts.app')

@section('title', 'MU Travel | Travel Umroh Terlengkap dan Terbaik se Indonesia')

@section('content')
    @include('components.hero')
    @include('components.welcome')
    @include('components.profile')
    @include('components.poin')
    @include('components.cta')
    @isset($packages)
    @include('components.card_paket', ['packages' => $packages])
    @endisset
    @include('components.include')
    @isset($dokumentasi)
    @include('components.dokumentasi', ['dokumentasi' => $dokumentasi])
    @endisset
    @include('components.rekening')
@endsection