<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- <article class="py-10 max-w-screen-md border-b border-black-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a> | {{ $post['created_at']->format('j F Y') }} ({{ $post['created_at']->diffForHumans() }})
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:uppercase">&laquo; Back to Posts</a>
    </article> --}}

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $post['created_at']->format('j F Y') }} ({{ $post['created_at']->diffForHumans() }})</p>
                            <a href="/categories/{{ $post->category->slug }}">
                                <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $post->category->name }}
                                </span>
                            </a>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post['title'] }}</h1>
            </header>
            <p class="lead">{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-sm text-blue-600 hover:underline">&laquo; Back to all posts</a>
        </article>
    </div>
</main>
</x-layout>




{{-- 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <h1>Ini artikel</h1>
    <article>Tes</article>
    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Dolor, excepturi repellat! Ipsam doloremque temporibus corrupti 
        nisi harum quasi, error soluta eaque quo ab repellat, vitae cum voluptas itaque, alias debitis.</h3>
</body>
</html> --}}