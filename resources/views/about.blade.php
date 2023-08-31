@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">About Me</h1>
        <p class="text-gray-600">Hello! I'm {{$name}}, a web developer and digital enthusiast based in Jakarta. With over 5 years of experience in the field, I've had the opportunity to work on a variety of projects, from personal websites to complex web applications.</p>
        
        <p class="text-gray-600">My journey in the world of web development began with a fascination for technology and a desire to create meaningful online experiences. I specialize in front-end development, focusing on crafting user-friendly and visually appealing interfaces that bring ideas to life.</p>
        
        <p class="text-gray-600">Aside from coding, I'm an avid learner and enjoy keeping up with the latest trends and technologies in the web development landscape. When I'm not in front of a computer screen, you can find me exploring the vibrant street food scene in Jakarta or unwinding with a good book.</p>
        
        <p class="text-gray-600">I'm always open to new opportunities, collaborations, and challenges. Whether you have a project in mind or just want to connect, feel free to get in touch with me through my email at <a href="#" class="text-blue-500">{{$email}}</a>.</p>
    </div>
@endsection
