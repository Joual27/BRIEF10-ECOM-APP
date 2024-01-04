<?php require APPROOT."/views/incFile/header.php"; ?>
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
            <button type="button" id="cartBtn" class=" flex-shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
              <span class="sr-only">Cart</span>
              <svg class="w-6 h-6 text-white hover:text-yellow-400 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
  </svg>
            </button>
  
            <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="flex-shrink-0 relative ml-4">
              <div>
                <button type="button"  class="rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                  <span class="sr-only">Log Out</span>
                  <svg class="mr-4 flex-shrink-0 h-7 w-7 text-white hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                 </svg>                </button>
              </div>
              
                <div  x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" id="cart" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none h-72 w-72 scale-0 " x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()">


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
 

    </div>

    <!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-white">
    
    <!--
    This example requires updating your template:
  
    ```
    <html class="h-full bg-white">
    <body class="h-full">
    ```
    -->
    <main class="relative lg:min-h-full">
      <div class="h-80 overflow-hidden lg:absolute lg:w-1/2 lg:h-full lg:pr-4 xl:pr-12">
        <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-06-hero.jpg" alt="TODO" class="h-full w-full object-center object-cover">
      </div>
  
      <div>
        <div class="max-w-2xl mx-auto py-16 px-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 lg:py-32 lg:grid lg:grid-cols-2 lg:gap-x-8 xl:gap-x-24">
          <div class="lg:col-start-2">
            <h1 class="text-sm font-medium text-indigo-600">Payment successful</h1>
            <p class="mt-2 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Thanks for ordering</p>
            <p class="mt-2 text-base text-gray-500">We appreciate your order, we’re currently processing it. So hang tight and we’ll send you confirmation very soon!</p>
  
            <dl class="mt-16 text-sm font-medium">
              <dt class="text-gray-900">Tracking number</dt>
              <dd class="mt-2 text-indigo-600">51547878755545848512</dd>
            </dl>
  
            <ul role="list" class="mt-6 text-sm font-medium text-gray-500 border-t border-gray-200 divide-y divide-gray-200">
              
                <li class="flex py-6 space-x-6">
                  <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-06-product-01.jpg" alt="Model wearing men's charcoal basic tee in large." class="flex-none w-24 h-24 bg-gray-100 rounded-md object-center object-cover">
                  <div class="flex-auto space-y-1">
                    <h3 class="text-gray-900">
                      <a href="#">Basic Tee</a>
                    </h3>
                    <p>Charcoal</p>
                    <p>L</p>
                  </div>
                  <p class="flex-none font-medium text-gray-900">$36.00</p>
                </li>
              
                <li class="flex py-6 space-x-6">
                  <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-06-product-02.jpg" alt="Model wearing women's artwork tee with isometric dots forming a cube in small." class="flex-none w-24 h-24 bg-gray-100 rounded-md object-center object-cover">
                  <div class="flex-auto space-y-1">
                    <h3 class="text-gray-900">
                      <a href="#">Artwork Tee — Iso Dots</a>
                    </h3>
                    <p>Peach</p>
                    <p>S</p>
                  </div>
                  <p class="flex-none font-medium text-gray-900">$36.00</p>
                </li>
              
            </ul>
  
            <dl class="text-sm font-medium text-gray-500 space-y-6 border-t border-gray-200 pt-6">
              <div class="flex justify-between">
                <dt>Subtotal</dt>
                <dd class="text-gray-900">$72.00</dd>
              </div>
  
              <div class="flex justify-between">
                <dt>Shipping</dt>
                <dd class="text-gray-900">$8.00</dd>
              </div>
  
              <div class="flex justify-between">
                <dt>Taxes</dt>
                <dd class="text-gray-900">$6.40</dd>
              </div>
  
              <div class="flex items-center justify-between border-t border-gray-200 text-gray-900 pt-6">
                <dt class="text-base">Total</dt>
                <dd class="text-base">$86.40</dd>
              </div>
            </dl>
  
            <dl class="mt-16 grid grid-cols-2 gap-x-4 text-sm text-gray-600">
              <div>
                <dt class="font-medium text-gray-900">Shipping Address</dt>
                <dd class="mt-2">
                  <address class="not-italic">
                    <span class="block">Kristin Watson</span>
                    <span class="block">7363 Cynthia Pass</span>
                    <span class="block">Toronto, ON N3Y 4H8</span>
                  </address>
                </dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Payment Information</dt>
                <dd class="mt-2 space-y-2 sm:flex sm:space-y-0 sm:space-x-4">
                  <div class="flex-none">
                    <svg aria-hidden="true" width="36" height="24" viewBox="0 0 36 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-auto">
                      <rect width="36" height="24" rx="4" fill="#224DBA"></rect>
                      <path d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" fill="#fff"></path>
                    </svg>
                    <p class="sr-only">Visa</p>
                  </div>
                  <div class="flex-auto">
                    <p class="text-gray-900">Ending with 4242</p>
                    <p>Expires 12 / 21</p>
                  </div>
                </dd>
              </div>
            </dl>
  
            <a href="#"><div class=" flex justify-center mt-16 bg-black text-white font-medium border-t rounded-lg py-4 cursor-pointer text-right">
              <button>Add Command</button>
            </div></a>
          </div>
        </div>
      </div>
    </main>
  
    </div>
    
  <?php require APPROOT."/views/incFile/footer.php"; ?>
