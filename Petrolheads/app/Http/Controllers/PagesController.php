<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;


class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        $comments = Comment::all();
        return view('welcome', compact('posts', 'comments'));
    }
    public function overview()
    {
        return view('/overview');
    }
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        $posts = Post::all();
        $comments = Comment::all();
        return view('posts.index', compact('posts', 'comments'));
    }
    public function comments()
    {
        $comments = Comment::all();
        return view('welcome', compact('comments'));
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
}
