@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hai {{Auth::user()->name}}, Selamat Datang Kembali</div>
                <a href="{{ route('rak_buku.store') }}">Rakbuku</a>
                <div class="card-body">
                    <a href="{{ route('logout') }}">Logout</a>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @else
                        <div class="alert alert-success">
                            You are logged in!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
