@extends('layout.main')

@section('content')
  @auth
    <nav class="bg-blue-600 flex flex-wrap items-center justify-between py-4 lg:min-w-screen">
      <div class="">
      </div>
      <div class="flex-grow text-right mx-3 mr-12">
        <a href="#" class="px-4 font-bold text-slate-200 hover:text-slate-400">Home</a>
        <a href="#" class="px-4 font-bold text-slate-200 hover:text-slate-400">Tabelas</a>
      </div>
    </nav>

    <div class="w-min-max mt-24 mx-auto">
      <h1 class="text-center font-semibold s text-lg">Cadastro de Funcionario</h1>
    </div>
    
    <form action="/funcionarios/criar" method="post">
      @csrf
      <div class="mt-10 w-1/3 rounded-lg shadow-md mx-auto flex items-center justify-center flex-col bg-white">
        <div class="mt-3">
          <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
          <input type="text" name="nome" placeholder="Ex: John Doe" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mt-3">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
          <input type="email"  name="email" placeholder="Ex: johndoe@hotmail.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mt-3">
          <label for="cpf" class="block text-gray-700 text-sm font-bold mb-2">CPF</label>
          <input type="text" name="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})" placeholder="Ex: 54332146122" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mt-3">
          <label for="numeroCelular" class="block text-gray-700 text-sm font-bold mb-2">Numero de Celular</label>
          <input type="text" placeholder="Digite os numeros tudo junto" pattern="[0-9]{9}" name="numeroCelular"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mt-3">
          <label for="dataNascimento" class="block text-gray-700 text-sm font-bold mb-2">Data de Nascimento</label>
          <input type="date" name="dataNascimento" placeholder="Ex: 20/01/2002" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mr-12 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mt-3 py-2 min-w-max">
          <label for="setor" class="block float-center ml-2 text-gray-700 text-sm font-bold mb-2">Selecione o Setor:</label>
            <select class="rounded-lg shadow-lg" name="setor" id="setor">
              @foreach ($setorOption as $options )
                <option value="{{$options}}">{{$options}}</option>
              @endforeach
            </select>
        </div>
        <input type="submit" value="Enviar" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-8 mt-4 mb-4 rounded" >
      </div>

    </form>
  @endauth

  @guest
    <nav class="bg-blue-600 flex items-center justify-between shrink-0 py-6 shadow-lg lg:min-w-full">
      <div class="flex-grow ">
        <a href="#" class="px-4 font-bold text-slate-200 hover:text-slate-400 float-right">Login</a>
        <a href="#" class="px-4 font-bold text-slate-200 hover:text-slate-400 float-right">Registrar</a>
      </div>
    </nav>


    <div class="flex items-center justify-center shrink-0 lg:min-h-full">
      <h1 class="text-black font-bold font-sans text-lg mt-64">Você não está autenticado para acessar está página!</h1>
    </div>
  @endguest

@endsection