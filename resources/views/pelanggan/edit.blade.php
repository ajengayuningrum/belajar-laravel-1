@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input value="{{ $customer->customer_name }}" type="text" name="customer_name" id=""
                        class="form-control" placeholder="Nama Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="">No Handphone</label>
                    <input value="{{ $customer->phone }}" type="number" class="form-control" name="phone" id=""
                        placeholder="Nomor Handphone">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input value="{{ $customer->address }}" type="text" class="form-control" name="address"
                        id="" placeholder="Alamat">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
