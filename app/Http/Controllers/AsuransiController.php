<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAsuransiRequest;
use App\Http\Requests\UpdateAsuransiRequest;
use App\Http\Resources\AsuransiResource;
use App\Http\Controllers\Controller;
use App\Models\Asuransi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsuransiController extends Controller
{
    public function index(Request $request)
    {
        $asuransis = DB::table('asuransis')
        ->when($request->input('name'), function ($query) use ($request) {
            return $query->where('nama_lengkap', 'like', '%' . $request->input('name') . '%')
                         ->orWhere('nomor_ktp', 'like', '%' . $request->input('name') . '%');
        })
            ->select('id', 'nomor_ktp', 'nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 
                    'status_pernikahan', 'nomor_handphone', 'npwp', 'kewarganegaraan', 'kelas', 'email', 
                    'alamat', 'rt', 'rw', 'kode_pos', 'no_telp_rumah', 'kelurahan_desa', 'nomor_kartu_keluarga', 
                    'status_dalam_keluarga', 'jumlah_anak', 'rekening', 'nomor_rekening', 'nama_pemilik_rekening')
            ->orderBy('id', 'asc')
            ->paginate(15);

        return view('pages.users.asuransi.index', compact('asuransis'));
    }

    public function create()
    {
        return view('pages.users.asuransi.create');
    }

    public function store(StoreAsuransiRequest $request)
    {
        Asuransi::create([
            'nomor_ktp' => $request['nomor_ktp'],
            'nama_lengkap' => $request['nama_lengkap'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'status_pernikahan' => $request['status_pernikahan'],
            'nomor_handphone' => $request['nomor_handphone'],
            'npwp' => $request['npwp'],
            'kewarganegaraan' => $request['kewarganegaraan'],
            'kelas' => $request['kelas'],
            'email' => $request['email'],
            'alamat' => $request['alamat'],
            'rt' => $request['rt'],
            'rw' => $request['rw'],
            'kode_pos' => $request['kode_pos'],
            'no_telp_rumah' => $request['no_telp_rumah'],
            'kelurahan_desa' => $request['kelurahan_desa'],
            'nomor_kartu_keluarga' => $request['nomor_kartu_keluarga'],
            'status_dalam_keluarga' => $request['status_dalam_keluarga'],
            'jumlah_anak' => $request['jumlah_anak'],
            'rekening' => $request['rekening'],
            'nomor_rekening' => $request['nomor_rekening'],
            'nama_pemilik_rekening' => $request['nama_pemilik_rekening'],
        ]);

        return redirect(route('asuransi.index'))->with('success', 'Create New Asuransi Successfully');
    }

    public function edit(Asuransi $Asuransi)
    {
        return view('pages.users.asuransi.edit')->with('asuransi', $Asuransi);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateAsuransiRequest $request, Asuransi $asuransi)
    {
        $validate = $request->validated();
        $asuransi->update($validate);
        return redirect()->route('asuransi.index')->with('success', 'Edit Asuransi Successfully');
    }

    public function destroy(Asuransi $asuransi)
    {
        $asuransi->delete();
        return redirect(route('asuransi.index'))->with('success', 'Delete Asuransi successfully');
    }
}
