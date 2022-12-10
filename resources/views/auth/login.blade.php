<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="{{asset('image-logo/logo.png')}}">
  @vite('resources/css/app.css')
</head>
<body>
<div class="bg-gray-300">

<section class="h-screen">
    <div class="flex xl:justify-center lg:justify-center justify-center items-center flex-wrap h-full ">
      <div class=" w-96 ">
      @if(session('success'))
        <p class="font-bold text-center text-xl">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="font-bold text-center text-xl">{{ $err }}</p>
        @endforeach
        @endif
      <form action="/login_action" method="POST">
              @csrf
            <div class="pb-10 pt-7 px-10 bg-zinc-100 shadow-2xl rounded-xl">
                <div class="flex justify-center">
                <img class="rounded-full  w-36" src="{{URL::asset('/image-logo/logo.png')}}"/>
                </div>
         <h1 class="flex justify-center font-serif font-family:ui-serif text-3xl font-semibold mb-5 mt-4 ">
            LOGIN
         </h1>
            <!-- username input -->
          <div class="mb-6">
            <input
              type="username" id="username" name="username" class="form-control block rounded-md w-full px-4 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding border-b border-[#4873c2]" placeholder="Username"/>
          </div>

          <!-- Password input -->
          <div class="mb-6">
            <input
              type="password" id="password" name="password" class="form-control block rounded-md w-full px-4 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding border-b border-[#4873c2]" placeholder="Password"
            />
          </div>    

          <div class="text-center lg:text-left">
                    <button class="inline-block  px-32 py-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded-xl hover:bg-blue-700">login
                      </button>
                </div>
          <div class="mt-6 text-grey-dark text-center">
                    Belum Punya Akun?
                    <a class="text-blue-600 hover:underline" href="/register">
                        Register
                    </a>
                </div>
          </div>
          </div>
        </form>
      </div>
    </div>
</div>
</section>
</body>
</html>
