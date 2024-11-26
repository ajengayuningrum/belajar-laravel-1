@extends('kalkulator.index')
@section('content')
    <h1>{{ $title ?? '' }}</h1>

    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <label for="">Nama</label>
        <input value="{{ $user->name ?? '' }}" type="text" name="name" placeholder="Masukkan Nama Anda">
        <br>
        <label for="">Email</label>
        <input value="{{ $user->email ?? '' }}" type="email" name="email" placeholder="Masukkan Email Anda" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password Anda">
        <br>
        <button>Simpan</button>
    </form>
@endsection
