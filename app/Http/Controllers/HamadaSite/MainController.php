<?php

namespace App\Http\Controllers\HamadaSite;


use App\Http\Controllers\Controller;
use App\Http\Requests\WebSiteRequests\ContactUsMessageRequest;
use App\Models\AboutDiv;
use App\Models\ContactUsMessages;
use App\Models\CustomerOpenionDiv;
use App\Models\FeatureDiv;
use App\Models\Main;
use App\Models\SiteSetup;
use App\Models\StepDiv;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {

        $site_setup = SiteSetup::all();
        $content = Main::all();
        $about_divs = AboutDiv::all();
        $feature_divs = FeatureDiv::all();
        $steps_divs = StepDiv::all();
        $customer_openion = CustomerOpenionDiv::all();
        $data = [
            'site_setup' => $site_setup,
            'content' => $content,
            'about_divs' => $about_divs,
            'feature_divs' => $feature_divs,
            'steps_divs' => $steps_divs,
            'customer_openion' => $customer_openion,
        ];
        return view('hamadaSite.index', compact('data'));
    }

    public function storeMessage(ContactUsMessageRequest $request)
    {
        ContactUsMessages::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->to(route('index'))->with('success', 'Your message was sent successfully');
    }
}
