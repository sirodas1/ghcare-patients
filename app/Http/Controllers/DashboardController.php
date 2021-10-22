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

    public function openLockedFolder(Request $request, $id)
    {
        $this->validate($request, [
            'pin' => 'required|string|size:4',
        ]);

        $folder = Folder::find($id);
        if($folder->pin == $request->pin){
            return redirect()->route('folder', ['id' => $id]);
        }
        
        session()->flash('error_message', 'Incorrect Locked Folder PIN.');
        return back();
    }
}
