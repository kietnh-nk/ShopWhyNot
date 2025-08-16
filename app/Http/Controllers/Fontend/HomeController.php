<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('fontend.index.home_index');
    }

    public function faq()
    {
        return view('fontend.page_other.faq');
    }

    public function showForm()
    {
        return view('fontend.page_other.contact');
    }

    public function terms_and_conditions()
    {
        return view('fontend.page_other.terms_and_conditions');
    }

    public function return_and_warranty_policy()
    {
        return view('fontend.page_other.return_and_warranty_policy');
    }

    public function about_us()
    {
        return view('fontend.page_other.about_us');
    }

    public function security_center()
    {
        return view('fontend.page_other.security_center');
    }
}
