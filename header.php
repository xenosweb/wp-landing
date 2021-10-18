<!DOCTYPE html>
<html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
      <section
         class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-6 bg-gray-900 text-white shadow-lg">
         <header class="container mx-auto flex flex-wrap flex-row items-center justify-between">
            <a href="<?php echo site_url(); ?>"
               class="flex p-0 lg:w-1/5 text-xl font-bold title-font items-center lg:items-start">Coderaulia</a>

            <nav
               class="lg:flex hidden flex-wrap items-center text-base md:ml-auto lg:space-y-0 space-y-6 lg:space-x-12 space-x-0">
               <a href='<?php echo site_url(); ?>' class='nav-link'>
                  Home
               </a>
               <a href='<?php echo site_url('/about-us'); ?>' class='nav-link'>
                  About Us
               </a>
               <a href='<?php echo site_url('/portfolios'); ?>' class='nav-link'>
                  Portfolio
               </a>
               <a href='<?php echo site_url('/blog'); ?>' class='nav-link'>
                  Blog
               </a>
               <a href='<?php echo site_url('/contact-us'); ?>' class='nav-link'>
                  Contact Us
               </a>
            </nav>
            <label for='menu-toggle' class='cursor-pointer lg:hidden block'>
               <svg class='w-6 h-6' fill='none' stroke='#ffffff' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 6h16M4 12h16M4 18h16'>
                  </path>
               </svg>
            </label>
            <input class='hidden' type='checkbox' id='menu-toggle' />
            <div class='hidden w-full flex-wrap items-center text-base justify-center' id='menu'>
               <nav
                  class='lg:space-x-12 space-x-0 lg:flex items-center justify-center text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6'>
                  <a href='<?php echo site_url(); ?>' class='nav-link block'>
                     Home
                  </a>
                  <a href='<?php echo site_url('/about-us'); ?>' class='nav-link block'>
                     About Us
                  </a>
                  <a href='<?php echo site_url('/portfolios'); ?>' class='nav-link block'>
                     Portfolio
                  </a>
                  <a href='<?php echo site_url('/blog'); ?>' class='nav-link block'>
                     Blog
                  </a>
                  <a href='<?php echo site_url('/contact-us'); ?>' class='nav-link block'>
                     Contact Us
                  </a>
               </nav>
            </div>
         </header>
      </section>