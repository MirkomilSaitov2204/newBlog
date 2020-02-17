<?php

namespace App\Http\Controllers\front;

use App\Contact;
use App\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {

        $session = session()->get('locale');
        $footer_blog = Post::where('locale', $session)->where('status', 'PUBLISHED')->orderBy('id','desc')->take(1)->get();

        $contact = Contact::where('locale', $session)->first();
        $header = Header::where('locale', $session)->first();
        return view('front.contact')->with('contact', $contact)->with('header', $header)->with('footer_blog', $footer_blog);
    }

}
