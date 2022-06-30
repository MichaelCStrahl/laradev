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
        $head = $this->seo->render(
            env('APP_NAME') . ' - Nosso blog',
            'Veja os melhores artigos de Laravel aqui',
            route('blog'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', [
            'head' => $head
        ]);

    }

    public function article()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Artigos do site',
            'Melhores artigos de Laravel',
            route('article'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.article', [
            'head' => $head
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
