<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="py-10 max-w-screen-md border-b border-black-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> | {{ $post['created_at']->format('j F Y') }} ({{ $post['created_at']->diffForHumans() }})
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:uppercase">&laquo; Back to Posts</a>
    </article>
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