<?php

namespace App\Http\Controllers\Api;

use App\Models\DataForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DataFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            if ($request->search) {
                $data = DataForm::select('id, name, email')->orderBy('id', 'asc')->where('name', 'LIKE', '%' . $request->search . '%')->get();
                return response()->json($data, 200);
            }

            $data = DataForm::select('id', 'name', 'email')->orderBy('id', 'asc')->limit(10)->offset(1000)->get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ], 401);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'name' => 'required',
            'email' => 'required|email:dns',
            'telp'  => 'required',
        ]);

        // dd($validator);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Silahkan isi bagian yang kosong',
                'data'  => $validator->errors()
            ], 401);
        } else {
            try {
                DataForm::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'telp' => $request->input('telp'),
                ]);
                // dd($data->toSql())
                return response()->json([
                    'success' => true,
                    'message' => 'Terima Kasih, Data Berhasil disimpan',
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal disimpan',
                ], 401);
            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Not Found'
        ], 203);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = DataForm::find($id);
            return response()->json([
                'success' => true,
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ]);
            //throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DataForm::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:dns',
            'telp'  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Silahkan isi bagian yang kosong',
                'data'  => $validator->errors()
            ], 401);
        } else {
            try {
                $data->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'telp' => $request->input('telp'),
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil disimpan',
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal disimpan',
                ], 401);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = DataForm::findOrFail($id);
            $data->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Data gagal dihapus'
            ], 401);
        }
    }
}
