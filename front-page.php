<?php get_header(); ?>

<!-- Hero Section -->
<section class="px-2 pt-20 pb-28 bg-gray-50 md:px-0 shadow-inner shadow-xl drop-shadow-xl">
   <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
      <div class="flex flex-wrap items-center sm:-mx-3">
         <div class="w-full md:w-1/2 md:px-3">
            <div
               class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
               <h1
                  class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                  <span class="block xl:inline">Coderaulia
                     < /></span>
                  <span class="block text-green-700 xl:inline">Web Developer</span>
               </h1>
               <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">I design and build
                  beautiful websites for individuals, community & businesses around the globe.</p>
               <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                  <a href="mailto:coderaulia@gmail.com"
                     class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-700 rounded-md sm:mb-0 hover:bg-green-800 sm:w-auto">
                     Try It Free
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                     </svg>
                  </a>
                  <a href="<?php echo site_url('/portfolios');?>"
                     class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                     See my Works
                  </a>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden">
               <img src="<?php echo get_theme_file_uri('/assets/images/vector.svg'); ?>">
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Featured Section -->
<section class='relative w-full bg-white'>
   <div class='absolute w-full h-32 pt-15 bg-gradient-to-b from-gray-200 to-white'></div>
   <div class='relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl'>
      <h1 class='mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-4xl xl:text-5xl sm:mb-3'>
         <a href='#_'>Our Latest Works</a>
      </h1>
      <p class='text-lg font-medium text-gray-500 sm:text-2xl'>
         Here are some cool projects we've been working on.
      </p>
      <div class='flex flex-row h-full pb-10 mt-8 sm:mt-16'>
         <div class='grid grid-cols-12 col-span-12 gap-7'>
            <div
               class='flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4'>
               <a href='https://covid.xenosweb.com'
                  class='block transition duration-200 ease-out transform hover:scale-110'>
                  <img class='object-cover w-full shadow-sm'
                     src=<?php echo get_theme_file_uri('/assets/images/covid.png'); ?> />
               </a>
               <div
                  class='relative w-full flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl'>
                  <div
                     class='bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block'>
                     <span>React App</span>
                  </div>
                  <h2 class='text-base font-bold sm:text-lg md:text-xl'>
                     <a href='https://covid.xenosweb.com'>
                        Covid Data Tracker
                     </a>
                  </h2>
                  <p class='mt-2 text-sm text-gray-500'>
                     Covid data tracker made with React
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class='flex flex-col items-center col-span-12'>
         <a href='<?php echo site_url('portfolios');?>'
            class='flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600'>
            See other works
            <svg xmlns='http://www.w3.org/2000/svg' class='w-5 h-5 ml-1' viewBox='0 0 24 24' fill='none'
               stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
               <line x1='5' y1='12' x2='19' y2='12'></line>
               <polyline points='12 5 19 12 12 19'></polyline>
            </svg>
         </a>
      </div>
   </div>
</section>

<!-- CTA Section -->
<section class="py-8 leading-7 bg-gray-800 sm:py-12 md:py-16 lg:py-24">
   <div class="max-w-6xl px-4 px-10 mx-auto border-solid lg:px-12">
      <div class="flex flex-col items-start leading-7 text-white border-0 border-gray-200 lg:items-center lg:flex-row">
         <div class="box-border flex-1 text-center border-solid sm:text-left">
            <h2
               class="m-0 text-4xl font-semibold leading-tight tracking-tight text-left text-white border-0 border-gray-200 sm:text-5xl">
               Boost your Business with us!
            </h2>
            <p class="mt-2 text-xl text-left text-white border-0 border-gray-200 sm:text-2xl">
               Our service will help you maximize and boost your business through internet.
            </p>
         </div>
         <a href="mailto:coderaulia@gmail.com"
            class="inline-flex items-center justify-center w-full px-5 py-4 mt-6 ml-0 font-sans text-base leading-none text-black no-underline bg-white border border-white border-solid rounded cursor-pointer md:w-auto lg:mt-0 hover:bg-gray-200 hover:border-gray-200 hover:text-gray-800 focus-within:bg-green-700 focus-within:border-green-700 focus-within:text-white sm:text-lg lg:ml-6 md:text-xl">
            Get Started
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <line x1="5" y1="12" x2="19" y2="12"></line>
               <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
         </a>
      </div>
   </div>
</section>

<!-- Blog Section -->
<section class='relative w-full bg-white'>
   <div class='absolute w-full h-32 pt-15 bg-gradient-to-b from-gray-100 to-white'></div>
   <div class='relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl'>
      <h1 class='mb-1 text-center text-3xl font-extrabold leading-none text-gray-900 lg:text-3xl xl:text-4xl sm:mb-3'>
         <a href='<?php echo site_url('/blog') ?>'>Latest Blog Post</a>
      </h1>
      <div class="flex grid grid-cols-12 pb-10 pt-10 sm:px-5 gap-x-8 gap-y-16 mt-5">
         <?php 

            $homePost = new WP_Query(array(
               'posts_per_page' => 3
            ));
            while($homePost->have_posts()){
               $homePost->the_post();
         ?>
         <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
            <a href="<?php the_permalink(); ?>"
               class="block object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56">
               <?php the_post_thumbnail()?>
            </a>
            <div class=" bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium
                  uppercase text-white inline-block">
               <span><?php the_category(); ?></span>
            </div>
            <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a
                  href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="text-sm text-gray-500">
               <?php 
                  echo wp_trim_words(get_the_content(), 25); 
               ?>
            </p>
            <p class="pt-2 text-xs font-medium">
               <span class="mr-1 underline"><?php the_author(); ?></span> · <span
                  class="mx-1"><?php the_time("j F Y"); ?></span>
            </p>
         </div>

         <?php
            }
            wp_reset_postdata();
         ?>

      </div>

      <!-- Button -->
      <div class='flex flex-col items-center col-span-12'>
         <a href='<?php echo site_url('/blog');?>'
            class='flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600'>
            See other blog posts
            <svg xmlns='http://www.w3.org/2000/svg' class='w-5 h-5 ml-1' viewBox='0 0 24 24' fill='none'
               stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
               <line x1='5' y1='12' x2='19' y2='12'></line>
               <polyline points='12 5 19 12 12 19'></polyline>
            </svg>
         </a>
      </div>
   </div>
</section>

<?php get_footer(); ?>