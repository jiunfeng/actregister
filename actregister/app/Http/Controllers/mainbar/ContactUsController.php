<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactus()
    {
        return view('contactus');
    }

    public function contactusSend(Request $req)
    {

        Contact::create([
            'emailtitle' => $req->emailtitle,
            'emailuser' => $req->emailuser,
            'emailtext' => $req->emailtext
        ]);
        session()->flash('success', '訊息已提交給客服中心，我們會盡快與您聯繫。');
        return redirect()->back();
    }
}