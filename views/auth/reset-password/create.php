<?php view("partials/head.view.php") ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="mx-auto w-full max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-500">Reset Password</h2>
  </div>

  <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/reset-password/<?= $id ?>" method="POST">
      
      <div>
        <div class="flex items-center justify-between">
          <label for="new_password" class="block text-sm font-medium leading-6 text-gray-500">New Password</label>
        </div>
        <div class="mt-2">
          <input id="new_password" name="new_password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" min="8" max="255">
        </div>
        <?php if (isset($errors['new_password'])) : ?>
          <li class="text-red-800 text-xs mt-2"><?= $errors['new_password'] ?></li>
        <?php endif; ?>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-500">Confirm Password</label>
        </div>
        <div class="mt-2">
          <input id="confirm_password" name="confirm_password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" min="8" max="255">
        </div>
        <?php if (isset($errors['confirm_password'])) : ?>
          <li class="text-red-800 text-xs mt-2"><?= $errors['confirm_password'] ?></li>
        <?php endif; ?>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-red-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Reset</button>
      </div>
    </form>
  </div>
</div>

<?php view("partials/footer.view.php");
