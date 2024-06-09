<?php view("partials/head.view.php") ?>


<div class="flex flex-col px-6 py-12 lg:px-8 justify-center">
  <div class="mx-auto w-full max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-500">Forgot Password</h2>
  </div>

  <div class="mt-8 mx-auto w-full max-w-sm">
    <form class="space-y-6" action="/forgot-password" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-500">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
        </div>
      </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-red-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">Reset Password</button>
        </div>
      </form>
  
      <p class="mt-8 text-center text-sm text-gray-500">
        <a href="/login" class="font-semibold leading-6 text-red-500 hover:text-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Sign in</a>
      </p>
  </div>
</div>
<?php view("partials/footer.view.php") ?>
