<?php 

function miniHero($data = NULL){
   if(!@$data['title']){
     $data['title'] = get_the_title();
   }

   if(!@$data['subtitle']){
      $data['subtitle'] = "Blog by Coderaulia";
   }

?>

<section class="px-2 pt-24 pb-28 bg-gray-50 md:px-0 shadow-inner shadow-xl drop-shadow-xl">
   <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
      <div class="flex flex-col col-span-12 items-center sm:-mx-3">
         <div class="w-full text-center">
            <h1 class="text-3xl font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mb-3">
               <?php echo $data['title']; ?>
            </h1>
            <h2 class="text-gray-700 tracking-tight text-xl pl-1 mt-5">
               <?php echo $data['subtitle']; ?>
            </h2>
         </div>
      </div>
   </div>
</section>

<?php
}

function xenos() {
   wp_enqueue_style('tailwindcss', '//cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css');
   wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'));
   wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js');
}

add_action('wp_enqueue_scripts', 'xenos');

function features() {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'features');

show_admin_bar( false );

?>