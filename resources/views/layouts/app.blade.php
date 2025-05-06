<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel Blog</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
@antlers
{{ map:requirements }}
@endantlers
</head>
<body class="bg-gray-100">
   <nav class="bg-white shadow mb-8">
       <div class="container mx-auto px-4">
           <div class="flex justify-between h-16">
               <div class="flex items-center">
                   <a href="{{ route('posts.index') }}" class="text-lg font-semibold">
                       Laravel Blog
                   </a>
                   <ul class="flex items-center space-x-4">
                   @antlers
                    {{ nav:collection:blog include_home="true" }}
                        <li class="p-2"><a href="{{ url }}" class="p-2 block hover:text-teal-800">{{ title }}</a></li>
                    {{ /nav:collection:blog  }}
                    @endantlers
                   </ul>
               </div>
           </div>
       </div>
    </nav> 
 
  
   <main class="container mx-auto px-4">
       @yield('content')
   </main>
</body>
</html>
