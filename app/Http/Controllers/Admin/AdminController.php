<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequests\SiteConfigRequest;
use App\Models\SiteSetup;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    //hamada-styles/images/logo.png

    public function siteConfiuration()
    {
        $data = SiteSetup::all();
        return view('admin.sitePages.siteConfiguration', compact('data'));
    }
    public function updateSiteConfig(SiteConfigRequest $request)
    {
        //  $file_name = $this->savePhoto($request->photo, 'images/offers');
        $file_name = $this->savePhoto($request->logo, 'hamada-styles/imgs');
        SiteSetup::where('name', 'logo')->update(array('content' => $file_name));
        SiteSetup::where('name', 'address')->update(array('content' => $request->address));
        SiteSetup::where('name', 'email')->update(array('content' => $request->email));
        SiteSetup::where('name', 'phone')->update(array('content' => $request->phone));
        SiteSetup::where('name', 'linked_in')->update(array('content' => $request->linkedIn));
        SiteSetup::where('name', 'instagram')->update(array('content' => $request->instagram));
        SiteSetup::where('name', 'twitter')->update(array('content' => $request->twitter));
        SiteSetup::where('name', 'facebook')->update(array('content' => $request->facebook));
        SiteSetup::where('name', 'app_store')->update(array('content' => $request->appStore));
        SiteSetup::where('name', 'google_play')->update(array('content' => $request->googlePlay));
        return redirect()->to(route('site.config.show'))->with('success', 'Site Configuration Has Been Successfully Updated');
    }

    public function savePhoto($request, $path)
    {
        $file_extenstion = $request->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extenstion;
        $request->move($path, $file_name);
        return $path . '/' . $file_name;
    }
}
