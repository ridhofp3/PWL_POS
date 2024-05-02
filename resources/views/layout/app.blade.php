@extends('adminlte::page') 
 
{{-- Extend and customize the browser title --}} 
 
@section('title') 
    {{ config('adminlte.title') }} 
    @hasSection('subtitle') | @yield('subtitle') @endif 
@stop 
 
@vite('resources/js/app.js') 
 
{{-- Extend and customize the page content header --}} 
 
@section('content_header') 
    @hasSection('content_header_title') 
        <h1 class="text-muted"> 
            @yield('content_header_title') 
 
            @hasSection('content_header_subtitle') 

                <small class="text-dark"> 
                    <i class="fas fa-xs fa-angle-right text-muted"></i> 
                    @yield('content_header_subtitle') 
                </small> 
            @endif 
        </h1> 
    @endif 
@stop
 
{{-- Include Navbar --}}
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">Your App Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kategori') }}">Manage Kategori</a>
                </li>
                <!-- Add other menu items here -->
            </ul>
        </div>
    </nav>
@stop
 
{{-- Rename section content to content_body --}} 

@section('content') 
    @yield('content_body') 
@stop 
 
 
{{-- Create a common footer --}} 
 
@section('footer') 
    <div class="float-right"> 
        Version: {{ config('app.version', '1.0.0') }} 
    </div> 
 
    <strong> 
        <a href="{{ config('app.company_url', '#') }}"> 
            {{ config('app.company_name', 'My company') }} 
        </a> 
    </strong> 
@stop
 
 
{{-- Add common Javascript/Jquery code --}} 
 
@push('js') 
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script> 
@endpush 
 
@stack('scripts') 
 
{{-- Add common CSS customizations --}} 
 
@push('css') 
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />  
<style type="text/css"> 
    {{-- You can add AdminLTE customizations here --}}
</style> 
@endpush 