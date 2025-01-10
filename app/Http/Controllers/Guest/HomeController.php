<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Returns the main homepage of the website.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.home.index');
    }

    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the about us page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    /******  b83b8101-544c-484b-b0ee-30d41a6f8ce8  *******/
    public function aboutUs()
    {
        return view('guest.about-us.index');
    }

    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the services page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    /******  de682249-9dfb-4641-84ab-4e63f145e8b7  *******/
    public function services()
    {
        return view('guest.services.index');
    }


    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the service page of the website for the given service slug.
     *
     * @param string $slug The slug of the service.
     *
     * @return \Illuminate\Http\Response
     */
    /******  590e8432-d129-4b8c-be32-5ef60ede9109  *******/
    public function service($slug)
    {
        return view('guest.services.show', compact('slug'));
    }

    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the technologies page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    /******  de682249-9dfb-4641-84ab-4e63f145e8b7  *******/
    public function technologies()
    {
        return view('guest.technologies.index');
    }


    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the technology page of the website for the given technology slug.
     *
     * @param string $slug The slug of the technology.
     *
     * @return \Illuminate\Http\Response
     */
    /******  590e8432-d129-4b8c-be32-5ef60ede9109  *******/
    public function technology($slug)
    {
        return view('guest.technologies.show', compact('slug'));
    }

    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the portfolio page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    /******  9b2479df-539b-4cb3-8289-e991942e6045  *******/
    public function portfolio()
    {
        return view('guest.portfolio.index');
    }


    /**
     * Returns the contact us page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view('guest.contact-us.index');
    }

    public function sendEnquiry(Request $request){

    }

    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the testimonials page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    /******  97fba951-d8d0-4628-9d4d-3de6ec865144  *******/
    public function testimonials()
    {
        return view('guest.testimonials.index');
    }

    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the blogs page of the website.
     *
     * @return \Illuminate\Http\Response
     */
    /******  a8c4b30e-c0f7-4957-bd60-64e69a3a04fc  *******/
    public function blogs()
    {
        return view('guest.blogs.index');
    }


    /*************  ✨ Webreca Technologies (Copyright © 2025 Webreca Technologies) [sales@webreca.com] ⭐  *************/
    /**
     * Returns the blog page of the website for the given blog slug.
     *
     * @param string $slug The slug of the blog.
     *
     * @return \Illuminate\Http\Response
     */
    /******  48af985e-d892-4b02-8fae-d3794a0a1f63  *******/
    public function blog($slug)
    {
        return view('guest.additional.blogs.show', compact('slug'));
    }
}
