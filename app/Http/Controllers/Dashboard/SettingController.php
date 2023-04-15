<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\settingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Utils\ImageUpload;
use Image;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings');
    }
    public function update(settingUpdateRequest $request, Setting $setting)
    {
        // dd($request);
        $setting->update($request->validated());
        if ($request->has('logo')) {
         ImageUpload::uploadImage($request->logo);   
        }
        return redirect()->route('dashboard.settings.index')->with('success', 'تم تحديث الاعدادات بنجاح');
    }
}
