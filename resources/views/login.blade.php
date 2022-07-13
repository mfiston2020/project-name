<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Login</title>
</head>

<body class="bg-gray-200">

    <!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto py-24 px-6">
  <div class="font-sans">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
      <div class="w-full relative">
        <div class="mt-6">
           <div class="mb-5 pb-1border-b-2 text-center font-base text-gray-700">
           <span>By <a class="text-blue-500" href="/">Our Movies</a></span>
          </div>
          <div class="text-center font-semibold text-black">
            Lorem ipsum dolor, sit amet?
          </div>

          <form class="mt-8" method="POST" action="{{ route('login')}}">
            @csrf
            <div class="mx-auto max-w-lg">
              <div class="py-2">
                <span class="px-1 text-sm text-gray-600">Username</span>
                <input placeholder="" type="email" name="email" required
                  class="text-md block px-3 py-2  rounded-lg w-full @error('email') border-red-300 @enderror
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                @error('email')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
              </div>
              <div class="py-2" x-data="{ show: true }">
                <span class="px-1 text-sm text-gray-600">Password</span>
                <div class="relative">
                  <input placeholder="" required :type="show ? 'password' : 'text'" class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none" name="password">
                @error('password')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">


                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                      :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                      viewbox="0 0 640 512">
                      <path fill="currentColor"
                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                      </path>
                    </svg>

                  </div>
                </div>
              </div>
              <div class="flex justify-between"><label class="block text-gray-500 font-bold my-4"><input type="checkbox"
                    class="leading-loose text-pink-600"> <span class="py-2 text-sm text-gray-600 leading-snug"> Remember
                    Me </span></label> <label class="block text-gray-500 font-bold my-4"><a
                    href="#"
                    class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"><span>Forgot
                      Password?</span></a></label></div> <button class="mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                Login
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>

</html>
