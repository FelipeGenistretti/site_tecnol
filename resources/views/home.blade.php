@extends('layouts.app')

@section("title", "Home - TecShare")
@section("content")
    <x-banner/>
    <x-quem-somos/>
    <x-porque-tecnol/>
    <x-fale-conosco/>
    <x-enviar-curriculo/>
    <x-section-enviar-curriculo/>

    <x-upload-arquivo/>

    <x-back-to-top/>
@endsection