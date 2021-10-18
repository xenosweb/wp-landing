<?php get_header(); 

while(have_posts()){
   the_post();
   miniHero();
?>

<section class='w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24'>
   <div
      class='box-border flex flex-col items-center content-center px-16 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-32'>
      <div class='box-border w-full text-black border-solid'>
         <h2
            class='m-0 text-xl pb-2 text-center font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl'>
            <?php the_title(); ?>
         </h2>
         <p class="text-gray-500 text-center text-sm">Posted by <?php the_author_posts_link(); ?> on
            <?php the_time("d F Y"); ?> in
            <?php echo get_the_category_list(', '); ?></p>
         <div class='mx-10 pb-8 mt-10 text-gray-800 leading-7 border-0 border-gray-300 text-md'>
            <?php the_content(); ?>
         </div>
      </div>
   </div>
</section>

<?php
}

get_footer();

?>