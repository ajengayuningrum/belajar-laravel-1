@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">Edit Pengguna</h3>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input value="{{ $user->name }}" type="text" name="name" id="" class="form-control" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input value="{{ $user->email }}" type="email" class="form-control" name="email" id="" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="Password" id="" placeholder="Password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
