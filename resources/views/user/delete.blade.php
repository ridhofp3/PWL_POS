@extends('layout.app')

@section('subtitle', 'Hapus User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Delete User')

@section('content')
    <div class="container">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Hapus User</h3>
                </div>
                <form action="/user/{{ $useri->user_id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="card-body">
                        <p>Apakah Anda yakin ingin menghapus user ini?</p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
                    </div>
                </form>
        </div>
    </div>
@endsection

