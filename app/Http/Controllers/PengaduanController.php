<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PengaduanController extends Controller
{
    /**
     * Display the pengaduan form
     */
    public function index()
    {
        return view('pengaduan');
    }

    /**
     * Store a new pengaduan
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16',
            'telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'alamat' => 'required|string|max:500',
            'kategori' => 'required|string|max:255',
            'prioritas' => 'required|in:rendah,sedang,tinggi,darurat',
            'lokasi' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string|max:2000',
            'bukti_files.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120', // 5MB max
            'persetujuan' => 'required|accepted',
            'anonim' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->all();
            $data['anonim'] = $request->has('anonim');
            $data['status'] = 'baru';

            // Handle file uploads
            $buktiFiles = [];
            if ($request->hasFile('bukti_files')) {
                foreach ($request->file('bukti_files') as $file) {
                    $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('pengaduan/bukti', $filename, 'public');
                    $buktiFiles[] = [
                        'original_name' => $file->getClientOriginalName(),
                        'filename' => $filename,
                        'path' => $path,
                        'size' => $file->getSize(),
                        'mime_type' => $file->getMimeType()
                    ];
                }
            }
            $data['bukti_files'] = $buktiFiles;

            $pengaduan = Pengaduan::create($data);

            return redirect()->back()
                ->with('success', 'Pengaduan berhasil dikirim. Nomor tiket: ' . str_pad($pengaduan->id, 6, '0', STR_PAD_LEFT));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan pengaduan: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Get pengaduan statistics for API
     */
    public function getStats()
    {
        try {
            $stats = [
                'total' => Pengaduan::count(),
                'pending' => Pengaduan::where('status', 'pending')->count(),
                'diproses' => Pengaduan::where('status', 'diproses')->count(),
                'selesai' => Pengaduan::where('status', 'selesai')->count(),
                'bulan_ini' => Pengaduan::whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)
                    ->count(),
                'minggu_ini' => Pengaduan::whereBetween('created_at', [
                    now()->startOfWeek(),
                    now()->endOfWeek()
                ])->count()
            ];

            return response()->json([
                'success' => true,
                'data' => $stats
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil statistik pengaduan'
            ], 500);
        }
    }

    /**
     * Get recent pengaduan for API
     */
    public function getRecent()
    {
        try {
            $pengaduan = Pengaduan::select('id', 'judul', 'kategori', 'status', 'created_at')
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get()
                ->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'nomor_tiket' => str_pad($item->id, 6, '0', STR_PAD_LEFT),
                        'judul' => Str::limit($item->judul, 50),
                        'kategori' => ucfirst($item->kategori),
                        'status' => ucfirst($item->status),
                        'tanggal' => $item->created_at->format('d M Y')
                    ];
                });

            return response()->json([
                'success' => true,
                'data' => $pengaduan
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data pengaduan terbaru'
            ], 500);
        }
    }
}
