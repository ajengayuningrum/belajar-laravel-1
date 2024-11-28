<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select* from users
        //compact buat ngelempar data dari controller
        $services = Service::get();
        $title = "Data Paket Laundry";

        return view('paket.index', compact('services', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Paket Laundry';
        return view('paket.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Service::create($request->all());
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        Alert::success('Mantul Berhasil', 'Data berhasil ditambah');
        return redirect()->to('service');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Paket Laundry";
        //select * from users where id ='$id
        $service = Service::find($id);

        return view('paket.edit', compact('title', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->service_name = $request->service_name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();
        Alert::success('Mantul Berhasil', 'Data berhasil diubah');
        return redirect()->to('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id)->delete();
        Alert::success('Mantul Berhasil', 'Data berhasil dihapus');
        return redirect()->to('service');
    }

    public function delete($id)
    {
        $service = Service::find($id)->delete();
        return redirect()->to('service');
    }
}
