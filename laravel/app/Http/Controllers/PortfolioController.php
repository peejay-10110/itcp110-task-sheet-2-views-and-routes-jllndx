<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Home Page
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * About Page
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Education Page
     */
    public function education()
    {
        return view('pages.education');
    }

    /**
     * Skills Page
     */
    public function skills()
    {
        return view('pages.skills');
    }

    /**
     * Experience Page
     */
    public function experience()
    {
        return view('pages.experience');
    }

    /**
     * Projects Page
     */
    public function projects()
    {
        return view('pages.projects');
    }

    /**
     * Achievements Page
     */
    public function achievements()
    {
        return view('pages.achievements');
    }

    /**
     * Hobbies Page
     */
    public function hobbies()
    {
        return view('pages.hobbies');
    }

    /**
     * Contact Page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Contact Form Handler
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'nullable|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'nullable|string|max:200',
            'message'    => 'required|string|max:3000',
        ]);

        return redirect()->route('contact')
            ->with('success', 'Your message was sent! I\'ll get back to you soon 💌');
    }
}