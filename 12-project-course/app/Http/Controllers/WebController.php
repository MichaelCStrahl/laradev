<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Upinside Treinamentos',
            'Melhor frameword da web',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Sobre o Curso',
            'Melhor frameword da web',
            route('course'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.course', [
            'head' => $head
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $head = $this->seo->render(
            env('APP_NAME') . ' - Nosso blog',
            'Veja os melhores artigos de Laravel aqui',
            route('blog'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);

    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 628))
        );

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Nossos contatos',
            'Entre em contato conosco',
            route('contact'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.contact', [
            'head' => $head
        ]);
    }
}
