<?php view("partials/head.view.php") ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="mx-auto w-full max-w-sm">
    <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-500">Sign in</h2>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/login" method="POST">
    <?= $type ? "<input type=\"hidden\" name=\"_type\" value=\"Hotel\">" : "" ?>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-500">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
        </div>
        <?php if (isset($errors['email'])) : ?>
          <li class="text-red-800 text-xs mt-2"><?= $errors['email'] ?></li>
        <?php endif; ?>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-500">Password</label>
          <div class="text-sm">
            <a href="/forgot-password" class="font-semibold text-red-500 hover:text-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
        </div>
        <?php if (isset($errors['email'])) : ?>
          <li class="text-red-800 text-xs mt-2"><?= $errors['email'] ?></li>
        <?php endif; ?>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-red-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">Sign in</button>
      </div>
      <?php if (isset($errors['_'])) : ?>
        <li class="text-red-800 text-xs mt-2"><?= $errors['_'] ?></li>
      <?php endif; ?>
    </form>

    <p class="mt-8 text-center text-sm text-gray-500">
      Not a member?
      <a href="/register" class="font-semibold leading-6 text-red-500 hover:text-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Sign up</a>
    </p>
  </div>
</div>

<?php view("partials/footer.view.php") ?>