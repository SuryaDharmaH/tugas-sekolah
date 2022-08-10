<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="bg-[url(https://static.vecteezy.com/system/resources/thumbnails/006/855/678/small/seamless-pattern-with-traditional-oriental-swirled-clouds-in-black-outline-on-white-background-minimalist-asian-background-for-greeting-card-mid-autumn-festival-aapi-heritage-month-vector.jpg)]">
<section class="h-screen">
  <div class=" h-full text-gray-800">
    <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">

      <div class=" w-96 ">
        <form>
            <div class="py-5 px-10  bg-zinc-100 shadow-2xl rounded-xl">
                <div class="flex justify-center">
                <img class="rounded-full  w-32" src="{{URL::asset('/image/login.jpg')}}"/>
                </div>
         <h1 class="flex justify-center font-serif font-family:ui-serif text-3xl font-semibold mb-5 mt-4 ">
            LOGIN
         </h1>
            <!-- Email input -->
          <div class="mb-6">
            <input
              type="text"
              class="form-control block rounded-md w-full px-4 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding border-b border-[#4873c2]"
              id="exampleFormControlInput2"
              placeholder="Email address"/>
          </div>

          <!-- Password input -->
          <div class="mb-6">
            <input
              type="password"
              class="form-control block rounded-md w-full px-4 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding border-b border-[#4873c2]"
              id="exampleFormControlInput2"
              placeholder="Password"
            />
          </div>    

          <div class="text-center lg:text-left">
            <button
              type="button"
              class="inline-block px-10 py-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded-lg hover:bg-blue-700"
            >
              Login
            </button>
            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
              Don't have an account?
              <a
                href="#!"
                class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                >Register</a
              >
            </p>
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
