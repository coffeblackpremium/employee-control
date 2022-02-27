<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body class="bg-indigo-100">
  
    <nav class="flex items-center justify-between flex-wrap bg-violet-500 shadow-lg p-6">
      <div class="flex items-center flex-shrink-0 text- mr-6">
        <span class="font-semibold text-lg tracking-tight">CRUD Laravel</span>
      </div>
      <div class="w-full block flex-grow lg:items-center lg:w-auto">
        <div class="flex justify-center text-sm lg:flex-grow">
          <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-slate-200 font-bold font-sans:Roboto hover:text-slate-300 mr-6">
            Home
          </a>
          <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-neutral-200 font-bold hover:text-slate-300 mr-4">
            Tabela
          </a>
        </div>
      </div>
    </nav>
      
    </nav>
    <main>
      @yield('content')
    </main>


  </body>
</html>