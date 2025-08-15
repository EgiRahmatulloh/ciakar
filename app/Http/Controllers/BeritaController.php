<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class BeritaController extends Controller
{
    /**
     * Check admin authentication for admin methods
     */
    private function checkAdminAuth()
    {
        if (!Session::has('admin_logged_in')) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized access'
            ], 401);
        }
        return null;
    }
    
    /**
     * Get current admin ID
     */
    private function getCurrentAdminId()
    {
        if (!Session::has('admin_logged_in')) {
            return 1; // Default admin ID
        }
        
        $username = Session::get('admin_username');
        $admin = Admin::where('username', $username)->first();
        
        return $admin ? $admin->id : 1;
    }
    /**
     * Display a listing of published berita for public
     */
    public function index()
    {
        $berita = Berita::where('status', 'published')
                       ->with('admin')
                       ->orderBy('created_at', 'desc')
                       ->paginate(10);
        
        return view('berita.index', compact('berita'));
    }

    /**
     * Display the specified berita for public
     */
    public function show($id)
    {
        $berita = Berita::where('status', 'published')
                       ->with('admin')
                       ->findOrFail($id);
        
        return view('berita.show', compact('berita'));
    }

    /**
     * Display a listing of berita for admin
     */
    public function adminIndex(Request $request)
    {
        // Check admin authentication
        if (!Session::has('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu');
        }
        
        $query = Berita::with('admin');
        
        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        // Filter by kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }
        
        // Search by title or content
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('konten', 'like', "%{$search}%");
            });
        }
        
        $berita = $query->orderBy('created_at', 'desc')->paginate(10);
        
        // Calculate statistics
        $stats = [
            'total' => Berita::count(),
            'published' => Berita::where('status', 'published')->count(),
            'draft' => Berita::where('status', 'draft')->count(),
            'archived' => Berita::where('status', 'archived')->count()
        ];
        
        return view('admin.berita', compact('berita', 'stats'));
    }

    /**
     * Store a newly created berita
     */
    public function store(Request $request)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck) {
            return $authCheck;
        }
        
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string|in:pengumuman,kegiatan,pembangunan,sosial,ekonomi,lainnya',
            'gambar' => 'nullable|url',
            'status' => 'required|string|in:draft,published,archived'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $berita = Berita::create([
                'judul' => $request->judul,
                'konten' => $request->konten,
                'kategori' => $request->kategori,
                'gambar' => $request->gambar,
                'status' => $request->status,
                'admin_id' => $this->getCurrentAdminId()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berita berhasil ditambahkan',
                'data' => $berita
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan berita: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified berita
     */
    public function edit($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck) {
            return $authCheck;
        }
        
        try {
            $berita = Berita::findOrFail($id);
            
            return response()->json([
                'success' => true,
                'data' => $berita
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Berita tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Update the specified berita
     */
    public function update(Request $request, $id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck) {
            return $authCheck;
        }
        
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string|in:pengumuman,kegiatan,pembangunan,sosial,ekonomi,lainnya',
            'gambar' => 'nullable|url',
            'status' => 'required|string|in:draft,published,archived'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $berita = Berita::findOrFail($id);
            
            $berita->update([
                'judul' => $request->judul,
                'konten' => $request->konten,
                'kategori' => $request->kategori,
                'gambar' => $request->gambar,
                'status' => $request->status
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berita berhasil diperbarui',
                'data' => $berita
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui berita: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified berita
     */
    public function destroy($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck) {
            return $authCheck;
        }
        
        try {
            $berita = Berita::findOrFail($id);
            $berita->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berita berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus berita: ' . $e->getMessage()
            ], 500);
        }
    }
}
