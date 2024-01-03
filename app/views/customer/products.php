<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body>
<div class="bg-gray-100" style="min-height: 192px;">
    
    <header x-data="{ open: false }" class="bg-black">
      <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:divide-y lg:divide-gray-700 lg:px-8">
        <div class="relative h-16 flex justify-between">
          <div class="relative z-10 px-2 flex lg:px-0">
            <div class="flex-shrink-0 flex items-center">
              <img class="block h-10 w-auto" src="710fbb1b4dbcdb33120ff6f8c0692931-removebg-preview.png" alt="Workflow">
            </div>
          </div>
          <div class="relative z-0 flex-1 px-2 flex items-center justify-center sm:absolute sm:inset-0">
            <div class="w-full sm:max-w-xs">
              <label for="search" class="sr-only">Search</label>
              <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                  <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
  </svg>
                </div>
                <input id="search" name="search" class="block w-full bg-gray-700 border border-transparent rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 focus:placeholder-gray-500 sm:text-sm" placeholder="Search" type="search">
              </div>
            </div>
          </div>
          <div class="relative z-10 flex items-center lg:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="sr-only">Open menu</span>
              <svg x-description="Icon when menu is closed.
  
  Heroicon name: outline/menu" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
  </svg>
              <svg x-description="Icon when menu is open.
  
  Heroicon name: outline/x" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
  </svg>
            </button>
          </div>
          <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">
            <button type="button" class=" flex-shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
              <span class="sr-only">View notifications</span>
              <svg class="w-6 h-6 text-white hover:text-yellow-400 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
  </svg>
            </button>
  
            <!-- Profile dropdown -->
            <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="flex-shrink-0 relative ml-4">
              <div>
                <button type="button" class="rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                  <span class="sr-only">Log Out</span>
                  <svg class="mr-4 flex-shrink-0 h-7 w-7 text-white hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                 </svg>                </button>
              </div>
              
                <div  x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none h-72 w-72 hidden" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()">

                



                    
                  
                </div>
              
            </div>
          </div>
        </div>
        <nav class="hidden lg:py-2 lg:flex lg:space-x-8" aria-label="Global">
          
            <a href="#" class="bg-gray-900 text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium" aria-current="page" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
              Dashboard
            </a>
          
          
        </nav>
      </div>
  




                                                                     <!--cards-->

    <div>
      <!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (1).jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">270$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (2).jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Cody Fisher</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Lead Security Associate</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">260$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:codyfisher@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0114" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (3).jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Esther Howard</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Assurance Administrator</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">230$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:estherhoward@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0143" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (4).jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Jenny Wilson</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Chief Accountability Analyst</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">220$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:jennywilson@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0184" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (5).jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Kristin Watson</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Investor Data Orchestrator</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">220$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:kristinwatson@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0191" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (2).jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Cameron Williamson</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Product Infrastructure Executive</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">220$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:cameronwilliamson@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0108" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images.jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Courtney Henry</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Investor Factors Associate</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">180$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:courtneyhenry@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0104" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="téléchargement.jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Theresa Webb</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Global Division Officer</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">210$</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:theresawebb@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
  </svg>
                <span class="ml-3">Add To Card</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0138" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
  </svg>
                <span class="ml-3">More</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
  </ul>

    </div>
  </div>
    
</body>
</html>