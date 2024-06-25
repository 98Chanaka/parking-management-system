<nav class="fixed top-0 z-50 w-full border-b bg-light-navbg border-light-background dark:bg-dark-navbg dark:border-dark-background">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm rounded-lg text-light-icon sm:hidden hover:bg-light-hover focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-dark-icon dark:hover:bg-dark-hover dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="#" class="flex ms-2 md:me-24">
          <!--<img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />-->
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-[#1f90bc] dark:text-[#9dd5eb]">PARK'N<span class="text-[#023448] dark:text-[#4f5c6b]">PAY</span></span>
        </a>
      </div>
      <div class="flex items-center">
        <div>
          <x-dark-mode-toggle size="2" />
        </div>
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-light-hover dark:focus:ring-dark-hover" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full bg-light-icon" src={{asset('../assets/user_pro.png')}} alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y rounded shadow divide-light-boder dark:bg-dark-navbg dark:divide-dark-boder" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-black dark:text-white" role="none">
                  {{ Auth::user()->name }}
                </p>
                <p class="text-sm font-medium text-black truncate dark:text-white" role="none">
                  {{ Auth::user()->email }}
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="{{route('profile.edit')}}" class="block px-4 py-2 text-sm text-black hover:bg-light-hover dark:text-white dark:hover:bg-dark-hover dark:hover:text-white" role="menuitem">Profile</a>
                </li>
                <li>
                  <a href="{{route('security.logout')}}" class="block px-4 py-2 text-sm text-black hover:bg-light-hover dark:text-white dark:hover:bg-dark-hover dark:hover:text-white" role="menuitem">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>