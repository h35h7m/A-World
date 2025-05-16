<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresubscriberRequest;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Contact;
use App\Http\Requests\StorecontactRequest;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index',get_defined_vars() );
    }

    public function about()
    {
        return view('front.about',get_defined_vars());
    }

    public function contact()
    {
        return view('front.contact',get_defined_vars());
    }

    public function services()
    {
        return view('front.services',get_defined_vars());
    }

    public function blog()
    {
        return view('front.blog',get_defined_vars());
    }

    public function subscriberStore(StoresubscriberRequest $request){
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with('subscriper_success', 'Subscriber Successfully');
    }
    public function contactrStore(StorecontactRequest $request){
        $data = $request->validated();
        Contact::create($data);
        return back()->with('contact_success', 'Your Request Sent Successfully');
    }
    

    // public function login2()
    // {
    //     return view('front.auth.login2');
    // }
}
