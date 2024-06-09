<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataVendor = Vendor::all();
        $title = 'Data Vendor';

        return view('admin.vendor.index', compact('dataVendor', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Vendor';
        return view('admin.vendor.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:vendors',
            'address' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'status' => 'required|string|in:aktif,non',
            'created_by' => 'nullable|string|max:255',
            'modified_by' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('vendor.create')
                ->withErrors($validator)
                ->withInput();
        }

        Vendor::create($request->all());

        Session::flash('info', 'Vendor berhasil ditambahkan');
        return redirect()->route('vendor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('admin.vendor.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        $title = 'Edit Vendor';
        return view('admin.vendor.edit', compact('vendor', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:vendors,name,' . $vendor->id,
            'address' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'status' => 'required|string|in:aktif,non',
            'created_by' => 'nullable|string|max:255',
            'modified_by' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('vendor.edit', $vendor->id)
                ->withErrors($validator)
                ->withInput();
        }

        $vendor->update($request->all());

        Session::flash('info', 'Vendor berhasil diupdate');
        return redirect()->route('vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        Session::flash('info', 'Vendor berhasil dihapus');
        return redirect()->route('vendor.index');
    }
}