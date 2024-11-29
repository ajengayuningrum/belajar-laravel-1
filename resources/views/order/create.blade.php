@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">

            <form action="{{ route('trans_order.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">No Transaksi</label>
                            <input type="text" name="order_code" class="form-control" value="{{ $order_code ?? '' }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Laundry</label>
                            <input type="date" name="order_date" class="form-control" value="{{ $order_date ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Paket</label>
                            <select name="" id="id_paket" class="form-control">
                                <option value="">--Pilih Paket--</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </select>
                            {{-- name buat masukin ke database, kalo id buat ngambil selectornya --}}
                        </div>
                        <input type="hidden" id="price">
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">Nama Pelanggan</label>
                            <select name="id_customer" id="" class="form-control">
                                <option value="">--Pilih Pelanggan--</option>
                                @foreach ($customers as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Pickup</label>
                            <input type="date" name="order_end_date" class="form-control"
                                value="{{ $order_end_date ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Qty (Kg)</label>
                            <input type="number" class="qty form-control" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>
                <div align="right" class="mb-3">
                    <button class="btn btn-secondary add-row" id="add-row">Tambah Baris</button>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-parent">
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">Total</td>
                                <td>
                                    <input type="number" name="total_price" class="total-harga form-control" readonly>
                                    <input type="hidden" name="order_status" value="0">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="mb-3 mt-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
