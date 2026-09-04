<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function generalEdit()
    {
        $settings = Setting::find(1);
        return view('backend.setting.general', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function generalUpdate(Request $request)
    {
        $settings = Setting::find(1);

        $header_logo_path = $settings->header_logo;
        $footer_logo_path = $settings->footer_logo;
        $page_banner_path = $settings->page_banner;

        if ($request->hasFile('header_logo')) {

            if ($header_logo_path && Storage::disk(config('filesystems.default'))->exists($header_logo_path)) {
                Storage::disk(config('filesystems.default'))->delete($header_logo_path);
            }

            $header_logo_path = $request->file('header_logo')->store('settings_images', 'public');
        }
        if ($request->hasFile('footer_logo')) {

            if ($footer_logo_path && Storage::disk(config('filesystems.default'))->exists($footer_logo_path)) {
                Storage::disk(config('filesystems.default'))->delete($footer_logo_path);
            }

            $footer_logo_path = $request->file('footer_logo')->store('settings_images', 'public');
        }
        if ($request->hasFile('page_banner')) {

            if ($page_banner_path && Storage::disk(config('filesystems.default'))->exists($page_banner_path)) {
                Storage::disk(config('filesystems.default'))->delete($page_banner_path);
            }

            $page_banner_path = $request->file('page_banner')->store('settings_images', 'public');
        }



        $settings->update([
            'site_name' => $request->site_name,
            'hero_title' => $request->hero_title,
            'footer_details' => $request->footer_details,
            'opening_day_from' => $request->opening_day_from,
            'opening_day_to' => $request->opening_day_to,
            'opening_time_from' => $request->opening_time_from,
            'opening_time_to' => $request->opening_time_to,
            'header_logo' => $header_logo_path,
            'footer_logo' => $footer_logo_path,
            'page_banner' => $page_banner_path,
        ]);

        return redirect()
            ->route('admin.setting.general')
            ->with('success', 'Settings Updated Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
