<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function folder($id)
    {
        $folder = Folder::find($id);
        $data = [
            'folder' => $folder,
        ];
        return view('pages.folder', $data);
    }
}
