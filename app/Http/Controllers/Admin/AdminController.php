<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HamadaSite\MainController;
use App\Http\Requests\AdminRequests\StepDivRequest;
use App\Http\Requests\AdminRequests\AboutDivRequest;
use App\Http\Requests\AdminRequests\AboutRequest;
use App\Http\Requests\AdminRequests\CustomerOpinionRequest;
use App\Http\Requests\AdminRequests\FeatureDivRequest;
use App\Http\Requests\AdminRequests\HeaderRequest;
use App\Http\Requests\AdminRequests\HowToOrderRequest;
use App\Http\Requests\AdminRequests\SiteConfigRequest;
use App\Http\Requests\AdminRequests\StepDivRequest as AdminRequestsStepDivRequest;
use App\Http\Requests\AdminRequests\UpdateAboutDivRequest;
use App\Models\AboutDiv;
use App\Models\ContactUsMessages;
use App\Models\CustomerOpenionDiv;
use App\Models\FeatureDiv;
use App\Models\Main;
use App\Models\SiteSetup;
use App\Models\StepDiv;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $activity = 'dashboard';
        return view('admin.sitePages.Dashboard', compact('activity'));
    }


    // *********************** START SITE CONFIG ***********************

    public function siteConfiuration()
    {
        $data = SiteSetup::all();
        $activity = 'site-config';
        return view('admin.sitePages.siteConfiguration', compact('data', 'activity'));
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

    // *********************** END SITE CONFIG ***********************



    // *********************** START HEADER ***********************

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
        $activity = 'header';
        // return $data;
        return view('admin.sitePages.headerUpdate', compact('data', 'activity'));
    }

    public function updateSiteHeader(HeaderRequest $request)
    {
        $file_name = $this->savePhoto($request->img, 'hamada-styles/imgs');
        Main::where('name', 'img1')->update(array('text' => $file_name));
        Main::where('name', 'header1')->update(array('text' => $request->head));
        Main::where('name', 'paragraph1')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.header.show'))->with('success', 'Header Has Been Successfully Updated');
    }
    // *********************** END HEADER ***********************


    // *********************** START ABOUT ***********************

    // ------ TITLE ------


    public function siteAboutTitle()
    {
        $header = Main::where('name', 'header2')->first();
        $paragraph = Main::where('name', 'paragraph2')->first();
        $data = [
            'header' => $header,
            'paragraph' => $paragraph,
        ];
        $activity = 'about';
        // return $data;
        return view('admin.sitePages.aboutUpdate', compact('data', 'activity'));
    }

    public function updateSiteAboutTitle(AboutRequest $request)
    {
        Main::where('name', 'header2')->update(array('text' => $request->head));
        Main::where('name', 'paragraph2')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.about.title.show'))->with('success', 'About Section Has Been Successfully Updated');
    }

    // ------ DIVS ------

    public function siteAboutDivs()
    {
        $data = AboutDiv::paginate(PAGINATE_NUMBER);
        $activity = 'about';
        return view('admin.sitePages.showAboutDivs', compact('data', 'activity'));
    }
    public function siteAboutNewDiv()
    {
        $activity = 'about';
        return view('admin.sitePages.aboutDivNewShow', compact('activity'));
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
    public function siteAboutDivsEdit($div_id)
    {
        $div = AboutDiv::find($div_id);
        if (!$div) {
            return redirect()->to(route('site.about.divs.show'));
        }
        $activity = 'about';
        return view('admin.sitePages.aboutDivUpdateShow', compact('div', 'activity'));
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
            return redirect()->to(route('site.about.divs.show'));
        }
        $div->delete();
        return redirect()->to(route('site.about.divs.show'))->with('success', 'About Div Has Been Deleted Succefully');
    }


    // *********************** END ABOUT ***********************




    // *********************** START FEATURE ***********************

    // ------ TITLES ------
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
        $activity = 'feature';
        return view('admin.sitePages.featureTitlesUpdate', compact('data', 'activity'));
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
        $data = FeatureDiv::paginate(PAGINATE_NUMBER);
        $activity = 'feature';
        return view('admin.sitePages.showFeatureDivs', compact('data', 'activity'));
    }
    public function siteFeatureNewDiv()
    {
        $activity = 'feature';
        return view('admin.sitePages.featureDivNewShow', compact('activity'));
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
        $activity = 'feature';
        return view('admin.sitePages.featureDivUpdateShow', compact('div', 'activity'));
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
            return redirect()->to(route('site.feature.divs.show'));
        }
        $div->delete();
        return redirect()->to(route('site.feature.divs.show'))->with('success', 'About Div Has Been Deleted Succefully');
    }

    // *********************** END FEATURE ***********************


    // *********************** START HOW TO ORDER ***********************

    // ------ TITLES ------

    public function siteHowToOrderTitles()
    {
        $header = Main::where('name', 'header4')->first();
        $paragraph = Main::where('name', 'paragraph4')->first();
        $data = [
            'header' => $header,
            'paragraph' => $paragraph,
        ];
        // return $data;
        $activity = 'how-to-order';
        return view('admin.sitePages.howToOrderUpdate', compact('data', 'activity'));
    }

    public function updateSiteHowToOrderTitls(HowToOrderRequest $request)
    {
        Main::where('name', 'header4')->update(array('text' => $request->head));
        Main::where('name', 'paragraph4')->update(array('text' => $request->paragraph));
        return redirect()->to(route('site.howToOrder.titles.show'))->with('success', 'How To Order Titles Has Been Successfully Updated');
    }

    // ------ DIVS ------

    public function siteStepDivs()
    {
        $data = StepDiv::paginate(PAGINATE_NUMBER);
        $activity = 'how-to-order';
        return view('admin.sitePages.showStepDivs', compact('data', 'activity'));
    }
    public function siteStepNewDiv()
    {
        $activity = 'how-to-order';
        return view('admin.sitePages.stepDivNewShow', compact('activity'));
    }
    public function siteStepNewDivStore(StepDivRequest $request)
    {
        $file_name = $this->savePhoto($request->img, 'hamada-styles/imgs');
        StepDiv::create(
            [
                'header' => $request->header,
                'paragraph' => $request->paragraph,
                'img' => $file_name,
            ]
        );
        return redirect()->to(route('site.step.divs.show'))->with('success', 'A New Step Has Been Created Succefully');
    }

    public function siteStepDivsEdit($div_id)
    {
        $div = StepDiv::find($div_id);
        if (!$div) {
            return redirect()->to(route('site.step.divs.show'));
        }
        $activity = 'how-to-order';
        return view('admin.sitePages.stepDivUpdateShow', compact('div', 'activity'));
    }
    public function siteStepDivsUpdate(StepDivRequest $request)
    {
        $div = StepDiv::find($request->id);
        $file_name = $this->savePhoto($request->img, 'hamada-styles/imgs');
        if (!$div) {
            return redirect()->to(route('site.step.divs.show'));
        }
        $div->update($request->all());
        $div->update([
            'img' => $file_name,
        ]);
        return redirect()->to(route('site.step.div.edit.show', $div->id))->with('success', 'Step Updated Succefully');
    }

    public function siteStepDivsDelete($div_id)
    {
        $div = StepDiv::find($div_id);
        if (!$div) {
            return redirect()->to(route('site.step.divs.show'));
        }
        $div->delete();
        return redirect()->to(route('site.step.divs.show'))->with('success', 'Step Has Been Deleted Succefully');
    }


    // *********************** END HOW TO ORDER ***********************



    // *********************** START CUSTOMER OPINION ***********************

    // ------ DIVS ------

    public function siteCustomerOpinionDivs()
    {
        $data = CustomerOpenionDiv::paginate(PAGINATE_NUMBER);
        $activity = 'customer-opinion';
        return view('admin.sitePages.showCusomerOpinionDivs', compact('data', 'activity'));
    }
    public function siteCustomerOpinionNewDiv()
    {
        $activity = 'customer-opinion';
        return view('admin.sitePages.customerOpinionDivNewShow', compact('activity'));
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
        $activity = 'customer-opinion';
        return view('admin.sitePages.customerOpinionDivUpdateShow', compact('div', 'activity'));
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
            return redirect()->to(route('site.customer-opinion.divs.show'));
        }
        $div->delete();
        return redirect()->to(route('site.customer-opinion.divs.show'))->with('success', 'Customer Opinion Has Been Deleted Succefully');
    }

    // *********************** END CUSTOMER OPINION ***********************

    // *********************** START CCONTACT US MESSAGES ***********************

    public function showContactUsMessages()
    {
        $data = ContactUsMessages::all();
        $activity = 'contact-us';
        return view('admin.sitePages.showContactUsMessages', compact('data', 'activity'));
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

    // *********************** END CONTACT US MESSAGES ***********************



    // *********************** STATIC FUNCTIONS ***********************

    public function savePhoto($request, $path)
    {
        $file_extenstion = $request->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extenstion;
        $request->move($path, $file_name);
        return $path . '/' . $file_name;
    }
}
