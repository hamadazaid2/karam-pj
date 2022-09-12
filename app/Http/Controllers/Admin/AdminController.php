<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequests\AboutRequest;
use App\Http\Requests\AdminRequests\HeaderRequest;
use App\Http\Requests\AdminRequests\HowToOrderRequest;
use App\Http\Requests\AdminRequests\SiteConfigRequest;
use App\Models\Main;
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

    public function siteHeader()
    {
        $header = Main::where('name', 'header1')->first();
        $paragraph = Main::where('name', 'paragraph1')->first();
        $img = Main::where('name', 'img1')->first();
        $data = [
            'header' => $header,
            'paragraph' => $paragraph,
            'img' => $img
        ];
        // return $data;
        return view('admin.sitePages.headerUpdate', compact('data'));
    }

    public function updateSiteHeader(HeaderRequest $request)
    {
        $file_name = $this->savePhoto($request->img, 'hamada-styles/imgs');
        Main::where('name', 'img1')->update(array('text' => $file_name));
        Main::where('name', 'header1')->update(array('text' => $request->head));
        Main::where('name', 'paragraph1')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.header.show'))->with('success', 'Header Has Been Successfully Updated');
    }

    public function siteAbout()
    {
        $header = Main::where('name', 'header2')->first();
        $paragraph = Main::where('name', 'paragraph2')->first();
        $data = [
            'header' => $header,
            'paragraph' => $paragraph,
        ];
        // return $data;
        return view('admin.sitePages.aboutUpdate', compact('data'));
    }

    public function updateSiteAbout(AboutRequest $request)
    {
        Main::where('name', 'header2')->update(array('text' => $request->head));
        Main::where('name', 'paragraph2')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.about.show'))->with('success', 'About Section Has Been Successfully Updated');
    }


    public function siteFeatureTitles()
    {
        $header = Main::where('name', 'header3')->first();
        $paragraph = Main::where('name', 'paragraph3')->first();
        $img = Main::where('name', 'img2')->first();
        $data = [
            'header' => $header,
            'paragraph' => $paragraph,
            'img' => $img
        ];
        // return $data;
        return view('admin.sitePages.featureTitlesUpdate', compact('data'));
    }

    public function updateSiteFeatureTitls(AboutRequest $request)
    {
        $file_name = $this->savePhoto($request->img, 'hamada-styles/imgs');
        Main::where('name', 'img2')->update(array('text' => $file_name));
        Main::where('name', 'header3')->update(array('text' => $request->head));
        Main::where('name', 'paragraph3')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.feature.titles.show'))->with('success', 'Feature Titles Has Been Successfully Updated');
    }

    public function siteHowToOrderTitles()
    {
        $header = Main::where('name', 'header4')->first();
        $paragraph = Main::where('name', 'paragraph4')->first();
        $data = [
            'header' => $header,
            'paragraph' => $paragraph,
        ];
        // return $data;
        return view('admin.sitePages.howToOrderUpdate', compact('data'));
    }

    public function updateSiteHowToOrderTitls(HowToOrderRequest $request)
    {
        Main::where('name', 'header4')->update(array('text' => $request->head));
        Main::where('name', 'paragraph4')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.howToOrder.titles.show'))->with('success', 'How To Order Titles Has Been Successfully Updated');
    }











    public function savePhoto($request, $path)
    {
        $file_extenstion = $request->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extenstion;
        $request->move($path, $file_name);
        return $path . '/' . $file_name;
    }
}
