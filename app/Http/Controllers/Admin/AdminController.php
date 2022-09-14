<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequests\AboutDivRequest;
use App\Http\Requests\AdminRequests\AboutRequest;
use App\Http\Requests\AdminRequests\CustomerOpinionRequest;
use App\Http\Requests\AdminRequests\FeatureDivRequest;
use App\Http\Requests\AdminRequests\HeaderRequest;
use App\Http\Requests\AdminRequests\HowToOrderRequest;
use App\Http\Requests\AdminRequests\SiteConfigRequest;
use App\Http\Requests\AdminRequests\UpdateAboutDivRequest;
use App\Models\AboutDiv;
use App\Models\ContactUsMessages;
use App\Models\CustomerOpenionDiv;
use App\Models\FeatureDiv;
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

    public function siteAboutTitle()
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

    public function updateSiteAboutTitle(AboutRequest $request)
    {
        Main::where('name', 'header2')->update(array('text' => $request->head));
        Main::where('name', 'paragraph2')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.about.title.show'))->with('success', 'About Section Has Been Successfully Updated');
    }

    public function siteAboutDivs()
    {
        $data = AboutDiv::all();
        return view('admin.sitePages.showAboutDivs', compact('data'));
    }
    public function siteAboutDivsEdit($div_id)
    {
        $div = AboutDiv::find($div_id);
        if (!$div) {
            return redirect()->to(route('site.about.divs.show'));
        }
        return view('admin.sitePages.aboutDivUpdateShow', compact('div'));
    }
    public function siteAboutDivsUpdate(AboutDivRequest $request)
    {
        $div = AboutDiv::find($request->id);
        if (!$div) {
            return redirect()->to(route('site.about.divs.show'));
        }
        $div->update($request->all());
        return redirect()->to(route('site.about.div.edit.show', $div->id))->with('success', 'About Div Updated Succefully');
    }
    public function siteAboutDivsDelete($div_id)
    {
        $div = AboutDiv::find($div_id);
        if (!$div) {
        }
        $div->delete();
        return redirect()->to(route('site.about.divs.show'))->with('success', 'About Div Has Been Deleted Succefully');
    }
    public function siteAboutNewDiv()
    {
        return view('admin.sitePages.aboutDivNewShow');
    }
    public function siteAboutNewDivStore(AboutDivRequest $request)
    {
        AboutDiv::create(
            [
                'span' => $request->span,
                'header' => $request->header,
                'paragraph' => $request->paragraph,
            ]
        );
        return redirect()->to(route('site.about.divs.show'))->with('success', 'A New About Div Has Been Created Succefully');
    }

    // START FEATURE

    //TITLES
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

    //DIVS

    public function siteFeatureDivs()
    {
        $data = FeatureDiv::all();
        return view('admin.sitePages.showFeatureDivs', compact('data'));
    }
    public function siteFeatureNewDiv()
    {
        return view('admin.sitePages.featureDivNewShow');
    }
    public function siteFeatureNewDivStore(FeatureDivRequest $request)
    {
        FeatureDiv::create(
            [
                'i_tag' => $request->i,
                'header' => $request->header,
                'paragraph' => $request->paragraph,
            ]
        );
        return redirect()->to(route('site.feature.divs.show'))->with('success', 'A New Feature Div Has Been Created Succefully');
    }
    public function siteFeatureDivsEdit($div_id)
    {
        $div = FeatureDiv::find($div_id);
        if (!$div) {
            return redirect()->to(route('site.feature.divs.show'));
        }
        return view('admin.sitePages.featureDivUpdateShow', compact('div'));
    }
    public function siteFeatureDivsUpdate(FeatureDivRequest $request)
    {
        $div = FeatureDiv::find($request->id);
        if (!$div) {
            return redirect()->to(route('site.feature.divs.show'));
        }
        $div->update([
            'i_tag' => $request->i
        ]);
        $div->update($request->all());
        return redirect()->to(route('site.feature.div.edit.show', $div->id))->with('success', 'Feature Div Updated Succefully');
    }
    public function siteFeatureDivsDelete($div_id)
    {
        $div = FeatureDiv::find($div_id);
        if (!$div) {
        }
        $div->delete();
        return redirect()->to(route('site.feature.divs.show'))->with('success', 'About Div Has Been Deleted Succefully');
    }
    // END FEATURE


    // START HOW TO ORDER

    // TITLES

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

    // DIVS


    // END HOW TO ORDER


    // START CUSTOMER OPINION SECTION
    // *****************************************************************************************
    public function siteCustomerOpinionDivs()
    {
        $data = CustomerOpenionDiv::all();
        return view('admin.sitePages.showCusomerOpinionDivs', compact('data'));
    }
    public function siteCustomerOpinionNewDiv()
    {
        return view('admin.sitePages.customerOpinionDivNewShow');
    }
    public function siteCustomerOpinionNewDivStore(CustomerOpinionRequest $request)
    {
        // return 'hello world';
        $file_name = $this->savePhoto($request->customerPhoto, 'hamada-styles/imgs');
        CustomerOpenionDiv::create(
            [
                'img' => $file_name,
                'name' => $request->name,
                'job_title' => $request->jobTitle,
                'opinion' => $request->opinion,
            ]
        );
        // return $opinion;
        return redirect()->to(route('site.customer-opinion.divs.show'))->with('success', 'A New Customer Opinion Has Been Created Succefully');
    }
    public function siteCustomerOpinionDivsEdit($div_id)
    {
        $div = CustomerOpenionDiv::find($div_id);
        if (!$div) {
            return redirect()->to(route('site.customer-opinion.divs.show'));
        }
        return view('admin.sitePages.customerOpinionDivUpdateShow', compact('div'));
    }
    public function siteCustomerOpinionDivsUpdate(CustomerOpinionRequest $request)
    {
        $div = CustomerOpenionDiv::find($request->id);
        if (!$div) {
            return redirect()->to(route('site.customer-opinion.divs.show'));
        }
        $file_name = $this->savePhoto($request->customerPhoto, 'hamada-styles/imgs');
        $div->update([
            'img' => $file_name,
            'job_title' => $request->jobTitle,
        ]);
        $div->update($request->all());
        return redirect()->to(route('site.customer-opinion.div.edit.show', $div->id))->with('success', 'Customer Opinion Updated Succefully');
    }
    public function siteCustomerOpinionDivsDelete($div_id)
    {
        $div = CustomerOpenionDiv::find($div_id);
        if (!$div) {
        }
        $div->delete();
        return redirect()->to(route('site.customer-opinion.divs.show'))->with('success', 'Customer Opinion Has Been Deleted Succefully');
    }
    // *****************************************************************************************
    // END CUSTOMER OPINION SECTION

    // CONTACT US MESSAGES
    public function showContactUsMessages()
    {
        $data = ContactUsMessages::all();
        return view('admin.sitePages.showContactUsMessages', compact('data'));
    }

    public function DeleteMessage($msg_id)
    {
        $msg = ContactUsMessages::find($msg_id);
        if (!$msg) {
            return redirect()->to(route('contact.us.messages.show'));
        }
        $msg->delete();
        return redirect()->to(route('contact.us.messages.show'))->with('success', 'Message Deleted Succefully');
    }














    public function savePhoto($request, $path)
    {
        $file_extenstion = $request->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extenstion;
        $request->move($path, $file_name);
        return $path . '/' . $file_name;
    }
}
