<?php

namespace App\Http\Controllers\front;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostTag;
use App\Tag;
use App\User;
use App\Header;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();

        // dd($posts);

        if(session()->has('locale'))
        {
            $session = session()->get('locale');
            // dd($session);
            $footer_blog = Post::where('locale', $session)->where('status', 'PUBLISHED')->orderBy('id','desc')->take(1)->get();
            $contact = Contact::where('locale', $session)->first();


            $header = Header::where('locale', $session)->first();
            foreach($categories as $category)
            {
                $post = Post::where('locale', $session)->where('category_id', $category->id)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->first();
                if($post)
                {
                    $posts[] = $post;
                }
                // dd($posts);
            }
            // dd($posts);
        }
        else{
            foreach($categories as $category)
            {
                $posts[] = Post::where('category_id', $category->id)->where('locale', 'en')->orderBy('id', 'desc')->where('status', 'PUBLISHED')->first();
                // dd($posts);
            }
        }

        // dd($posts);

        return view('front.index')->with([
            'categories' =>  $categories,
            'posts'      =>  $posts,
            'header'    =>  $header,
            'footer_blog'=> $footer_blog,
            'contact'   => $contact
        ]);
    }

    public function newBlog()
    {
        if(request('id'))
        {
            $session = session()->get('locale');
            $footer_blog = Post::where('locale', $session)->where('status', 'PUBLISHED')->orderBy('id','desc')->take(1)->get();
            $contact = Contact::where('locale', $session)->first();


            $header = Header::where('locale', $session)->first();
           $search_tag = Tag::where('id', request('id'))->first();
            $posts = $search_tag->posts;


            // dd($posts);
        }
        return view('front.blog')->with([
            'posts'         =>  $posts,
            'header'    =>  $header,
            'footer_blog'=> $footer_blog,
            'contact'   => $contact
        ]);
    }
    public function blog()
    {

        $session = session()->get('locale');
        $categories = Category::all();
        $footer_blog = Post::where('locale', $session)->where('status', 'PUBLISHED')->orderBy('id','desc')->take(1)->get();
        $contact = Contact::where('locale', $session)->first();

        $header = Header::where('locale', $session)->first();

        $posts = Post::where('locale', $session)->orderBy('id', 'desc')->where('status', 'PUBLISHED')->get();

        $search = request()->query('search');
        if($search){
            $posts = Post::where('locale', $session)->where('title', 'LIKE', "%{$search}%")->get();
        }

        if(request('id'))
        {
            $posts = Post::where('locale', $session)->where('category_id', request('id'))->where('status', 'PUBLISHED')->get();
        }

        return view('front.blog')->with([
            'categories'    =>  $categories,
            'posts'         =>  $posts,
            'header'        =>  $header,
            'footer_blog'=> $footer_blog,
            'contact'   => $contact
        ]);
    }

    public function single($id)
    {

        $session = session()->get('locale');
        $footer_blog = Post::where('locale', $session)->where('status', 'PUBLISHED')->orderBy('id','desc')->take(1)->get();
        $contact = Contact::where('locale', $session)->first();

        $tags = Tag::where('locale', $session)->get();
        $header = Header::where('locale', $session)->first();

        $categories  = Category::all();
        $recent_blog = Post::where('locale', $session)->where('status', 'PUBLISHED')->orderBy('id','desc')->take(3)->get();

        $post = Post::find($id)->where('status', 'PUBLISHED')->where('id', $id)->first();
        $tag = Tag::where('id', $id)->first();
        $post_tag = $post->tags;

        return view('front.blog_single')->with([
            'post'          =>  $post,
            'categories'    =>  $categories,
            'recent_blog'   =>  $recent_blog,
            'tags'          =>  $tags,
            'post_tag'      =>  $post_tag,
            'header'        =>  $header,
            'footer_blog'=> $footer_blog,
            'contact'   => $contact
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
