<?php

namespace App\Http\Controllers;
use App\Mail\Enquirymail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function enquiry()

    {

      Mail::to('sapnoka@aashyana.com')->send(new Enquirymail());
    }

    
}
