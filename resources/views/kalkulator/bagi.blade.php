@extends('kalkulator.index')
{{-- block section --}}
@section('content')
    <form action="{{ route('store-bagi') }}" method="post" style="margin-top: 20px">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" name="angka1" placeholder="Masukkan Angka 1">
        <br>
        /
        <br>
        <label for="">Angka 2</label>
        <input type="text" name="angka2" placeholder="Masukkan Angka 2">
        <br>
        <button>Proses</button>
    </form>
    <h3>Hasilnya adalah : {{ $bagi }} </h3>
@endsection
