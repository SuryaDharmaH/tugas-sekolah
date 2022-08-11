<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body>
<div class="bg-[url(https://static.vecteezy.com/system/resources/thumbnails/006/855/678/small/seamless-pattern-with-traditional-oriental-swirled-clouds-in-black-outline-on-white-background-minimalist-asian-background-for-greeting-card-mid-autumn-festival-aapi-heritage-month-vector.jpg)]">

<nav class="p-3 fixed">
<a href="https://www.instagram.com/surya.dhl/">
  <div class=" p-2">
    <svg class=" text-white w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
      <path  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
    </svg>
</div>
</a>
</nav>

<section class="h-screen">
    <div class="flex xl:justify-center lg:justify-center justify-center items-center flex-wrap h-full g-6">
      <div class=" w-96 ">
        <form>
            <div class="pb-10 pt-7 px-10   bg-zinc-100 shadow-2xl rounded-xl">
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
            <a href="/dashboard">
            <button
              type="button"class="inline-block px-10 py-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded-lg hover:bg-blue-700">
              Login
            </button>
            </a>
          </div>
          </div>
          </div>
        </form>
      </div>
    </div>
</section>
</body>
</html>
