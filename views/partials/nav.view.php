<nav class="bg-gray-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="/"><img class="h-12 w-12 object-cover" src="/assets/miren-reviews-high-resolution-logo-black-transparent.png" alt="Your Company"></a>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/search" class="<?= urlIs('/search') ? 'bg-gray-500 text-white' : 'text-gray-500 hover:bg-gray-400 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Search</a>
              <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-500 text-white' : 'text-gray-500 hover:bg-gray-400 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
              <a href="/faq" class="<?= urlIs('/faq') ? 'bg-gray-500 text-white' : 'text-gray-500 hover:bg-gray-400 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">FAQ</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="flex items-center gap-4">
                <?php if(isset($_SESSION['user'])): ?>
                <form action="/logout" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="bg-red-500 text-white rounded-md px-4 py-2 text-sm font-medium">Log out</button>
                </form>
                </button>
                </div>
                <?php else: ?>
                <a href="/login" class="bg-red-500 text-white rounded-md px-4 py-2 text-sm font-medium">Log in</a>
                <a href="/register" class="bg-gray-300 text-white rounded-md px-4 py-2 text-sm font-medium">Sign up</a>
                <?php endif ?>
        </div>
      </div>
    </div>
  </nav>