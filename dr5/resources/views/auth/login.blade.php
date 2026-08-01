<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0d0d0d]">

<div class="min-h-screen w-full flex flex-col md:flex-row">

  <!-- LEFT: Form Panel -->
  <div class="w-full md:w-1/2 flex flex-col justify-between px-6 sm:px-10 lg:px-16 py-8 bg-[#0d0d0d]">

    <!-- Logo -->
    <div>
      <div class="h-6 w-28 bg-gray-500/40 rounded"></div>
    </div>

    <!-- Form -->
    <div class="w-full max-w-sm mx-auto md:mx-0">
      <h1 class="text-white text-3xl sm:text-4xl font-semibold mb-8">Sign In</h1>

      <form class="space-y-5">
        <!-- Username -->
        <div>
          <label for="username" class="block text-gray-300 text-sm mb-2">User Name</label>
          <div class="flex items-center bg-[#1a1a1a] border border-gray-700 rounded-md px-3 focus-within:border-blue-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 shrink-0" viewBox="0 0 24 24" fill="currentColor">
              <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
            <input id="username" type="text" placeholder="Enter User Name"
              class="w-full bg-transparent text-white placeholder-gray-500 text-sm px-3 py-3 outline-none">
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-300 text-sm mb-2">Password</label>
          <div class="flex items-center bg-[#1a1a1a] border border-gray-700 rounded-md px-3 focus-within:border-blue-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 shrink-0" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 17a2 2 0 002-2 2 2 0 00-2-2 2 2 0 00-2 2 2 2 0 002 2zm6-9a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V10a2 2 0 012-2h1V6a5 5 0 0110 0v2h1zM12 3a3 3 0 00-3 3v2h6V6a3 3 0 00-3-3z"/>
            </svg>
            <input id="password" type="password" placeholder="Enter Password"
              class="w-full bg-transparent text-white placeholder-gray-500 text-sm px-3 py-3 outline-none">
          </div>
        </div>

        <!-- Forgot password -->
        <div class="text-right -mt-2">
          <a href="#" class="text-xs text-gray-400 hover:text-gray-200 tracking-wide">FORGOT PASSWORD?</a>
        </div>

        <!-- Submit -->
        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 transition-colors text-white text-sm font-medium tracking-wide py-3 rounded-md">
          SIGN IN
        </button>


               <!-- view as guest -->
        <a href="{{ route('user.dashboard') }}"
   class="block w-full text-center border border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white transition-colors text-sm font-medium tracking-wide py-3 rounded-md">
  VIEW AS GUEST
</a>

      </form>
    </div>

    <!-- Footer -->
    <div class="text-sm text-gray-400">
      Don't have an account?
      <a href="#" class="text-white hover:underline">Sign up</a>
    </div>
  </div>

  <!-- RIGHT: Image / Info Panel -->
  <div class="hidden md:flex w-1/2 relative bg-white overflow-hidden">
    <!-- static white placeholder, swap this div's bg for your real image -->
    <div class="absolute inset-0 bg-white"></div>

    <div class="relative z-10 flex flex-col justify-center h-full px-12 lg:px-16">
      <p class="text-gray-800 text-lg leading-relaxed max-w-sm">
        A new way to experience real estate in the infinite virtual space.
      </p>
      <a href="#" class="mt-3 text-xs tracking-wide text-gray-600 hover:text-gray-900 underline underline-offset-4 w-fit">
        LEARN MORE
      </a>
    </div>

    <!-- carousel controls -->
    <div class="absolute bottom-8 right-10 z-10 flex items-center gap-4">
      <div class="w-10 h-[2px] bg-gray-400"></div>
      <button class="text-gray-600 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M15 18l-6-6 6-6"/>
        </svg>
      </button>
      <button class="text-gray-600 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M9 18l6-6-6-6"/>
        </svg>
      </button>
    </div>
  </div>

</div>

</body>
</html>