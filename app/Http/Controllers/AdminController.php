<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Show admin login form
     */
    public function showLogin()
    {
        // Check if already logged in
        if (Session::has('admin_logged_in')) {
            return redirect()->route('admin.pengaduan');
        }
        
        return view('admin.login');
    }

    /**
     * Handle admin login
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Simple admin credentials (in production, use proper user authentication)
        $adminCredentials = [
            'admin' => 'admin123',
            'operator' => 'operator123',
            'supervisor' => 'supervisor123'
        ];

        $username = $request->username;
        $password = $request->password;

        if (isset($adminCredentials[$username]) && $adminCredentials[$username] === $password) {
            Session::put('admin_logged_in', true);
            Session::put('admin_username', $username);
            Session::put('admin_role', $this->getAdminRole($username));
            
            if ($request->has('remember')) {
                Session::put('admin_remember', true);
            }

            return redirect()->route('admin.pengaduan')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'login' => 'Username atau password salah'
        ])->withInput();
    }

    /**
     * Handle admin logout
     */
    public function logout()
    {
        Session::forget(['admin_logged_in', 'admin_username', 'admin_role', 'admin_remember']);
        return redirect()->route('admin.login')->with('success', 'Logout berhasil!');
    }

    /**
     * Show pengaduan management page
     */
    public function pengaduan(Request $request)
    {
        $this->checkAdminAuth();
        
        $query = Pengaduan::query();
        
        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }
        
        // Filter by category
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori', $request->kategori);
        }
        
        // Filter by priority
        if ($request->has('prioritas') && $request->prioritas != '') {
            $query->where('prioritas', $request->prioritas);
        }
        
        // Search by title or content
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('isi', 'like', "%{$search}%")
                  ->orWhere('nama', 'like', "%{$search}%");
            });
        }
        
        $pengaduan = $query->orderBy('created_at', 'desc')->paginate(20);
        
        $stats = [
            'total' => Pengaduan::count(),
            'pending' => Pengaduan::where('status', 'pending')->count(),
            'diproses' => Pengaduan::where('status', 'diproses')->count(),
            'selesai' => Pengaduan::where('status', 'selesai')->count()
        ];
        
        return view('admin.pengaduan', compact('pengaduan', 'stats'));
    }

    /**
     * Show pengaduan detail
     */
    public function pengaduanDetail($id)
    {
        $this->checkAdminAuth();
        
        $pengaduan = Pengaduan::findOrFail($id);
        
        return view('admin.pengaduan-detail', compact('pengaduan'));
    }

    /**
     * Update pengaduan status
     */
    public function updateStatus(Request $request, $id)
    {
        $this->checkAdminAuth();
        
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|in:pending,diproses,selesai,ditolak',
            'catatan' => 'nullable|string|max:1000'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $pengaduan = Pengaduan::findOrFail($id);
            
            $pengaduan->update([
                'status' => $request->status,
                'tanggapan' => $request->catatan
            ]);

            return redirect()->back()->with('success', 'Status pengaduan berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui status');
        }
    }

    /**
     * Check admin authentication
     */
    private function checkAdminAuth()
    {
        if (!Session::has('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu');
        }
    }

    /**
     * Get admin role based on username
     */
    private function getAdminRole($username)
    {
        $roles = [
            'admin' => 'Administrator',
            'operator' => 'Operator',
            'supervisor' => 'Supervisor'
        ];
        
        return $roles[$username] ?? 'User';
    }
}
