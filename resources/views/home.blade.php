@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Welcome to My Home Page</h1>
        <p class="text-gray-600">Hello there! I'm {{$name}}, a passionate web designer and developer based in the heart of Jakarta. With a knack for creative design and a love for clean code, I strive to bring unique digital experiences to life.</p>
        
        <p class="text-gray-600">My journey in the world of web design started with a fascination for blending art and technology. I enjoy crafting intuitive user interfaces that not only look visually stunning but also provide seamless interactions for users.</p>
        
        <p class="text-gray-600">When I'm not crafting websites, you can find me exploring local cafes for the perfect cup of coffee, or experimenting with new recipes in the kitchen. I believe that creativity can be found in every aspect of life, and I apply that philosophy to both my work and my hobbies.</p>
        
        <p class="text-gray-600">I'm always excited to take on new projects and challenges. Whether you're a business looking to establish an online presence or an individual with a creative idea, let's collaborate and bring your vision to the digital world.</p>
        
        <p class="text-gray-600">Feel free to reach out to me via email at <a href="#" class="text-blue-500">{{$email}}</a>. Let's connect and discuss how we can make the web a more beautiful place.</p>
    </div>
@endsection
