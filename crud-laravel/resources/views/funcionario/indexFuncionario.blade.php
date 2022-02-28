@extends('layout.main')

@section('content')
  @guest
    <nav class="bg-indigo-200 flex items-center justify-between shrink-0 py-4 lg:min-h-screen">
      <div class="flex-grow">
        <a href="#" class=""
      </div>
    </nav>


    <div class="flex items-center justify-center shrink-0 lg:min-h-screen">
      <h1 class="text-white font-bold font-sans text-lg">Você não está autenticado para acessar está página!</h1>
    </div>
  @endguest
@endsection