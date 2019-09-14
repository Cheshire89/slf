<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \App\Helpers\Rets;
use App\Post;

class PagesController extends Controller
{
    public function index() {
        $data = array(
            'title' => 'Home',
            'properties' => Rets::propertySearch('RESI', 6),
            'posts' => Post::orderBy('created_at', 'desc')->get()
        );
        return view('pages.index')->with($data);
    }

    public function about() {
        $data = array(
            'title' => 'About'
        );
        return view('pages.about')->with($data);
    }

    public function agents() {
        $data = array(
            'title' => 'Agents'
        );
        return view('pages.agents.agents')->with($data);
    }

    public function services() {
        $data = array(
            'title' => 'Services'
        );
        return view('pages.services')->with($data);
    }

    public function testimonials() {
        $data = array(
            'title' => 'Testimonials'
        );
        return view('pages.testimonials')->with($data);
    }

    public function contact() {
        $data = array(
            'title' => 'Contact'
        );
        return view('pages.contact')->with($data);
    }

    public function property($mls) {
        $propertyDetail = Rets::getPropertyDetail($mls);
        $data = array(
            'property' => $propertyDetail[0]
        );
        return view('pages.properties.property-detail')->with($data);
    }

    public function signUp() {
        $data = array(
            'title' => 'Sign Up'
        );
        return view('pages.sign-up')->with($data);
    }

    public function faq() {
        $data = array(
            'title' => 'Faq'
        );
        return view('pages.faq')->with($data);
    }

    public function blog() {
        $data = array(
            'title' => 'Blog'
        );
        return view('pages.blog.blog')->with($data);
    }
}
