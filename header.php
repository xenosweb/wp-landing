<!DOCTYPE html>
<html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
      <header class="relative w-full px-8 text-gray-700 bg-white body-font">
         <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <a href="<?php echo site_url(); ?>"
               class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">Coderaulia</a>

            <nav
               class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
               <a href="<?php echo site_url(); ?>"
                  class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                  x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                  <span class="block">Home</span>
                  <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                     <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                  </span>
               </a>
               <a href="/about"
                  class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                  x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                  <span class="block">About</span>
                  <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                     <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                  </span>
               </a>
               <a href="/portfolio"
                  class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                  x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                  <span class="block">Portfolio</span>
                  <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                     <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                  </span>
               </a>
               <a href="/contact"
                  class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                  x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                  <span class="block">Contact</span>
                  <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                     <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                        x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                  </span>
               </a>
            </nav>

            <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
               <span class="inline-flex rounded-md shadow-sm">
                  <a href="mailto:coderaulia@gmail.com"
                     class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-green-600 rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-greeb-500">
                     Get a Quote
                  </a>
               </span>
            </div>
         </div>
      </header>