<?php
/**
 * Template Name: FAQ Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package proving
 */

get_header(); ?>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
     $('.opener').click(function() {
        $(this).parent().parent().find('.answer').slideToggle(600);
        $(this).parent().parent().toggleClass('show' )
    });
});
</script>
	<div class="light-green-bg">
		<div class="container">
			<div class="inner-title">
				<h1><?php echo get_the_title(); ?></h1>
                <img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg">
			</div>
		</div>
	</div>
	<div class="white-bg">
		<div class="container">
			<div class="inner-page">

				<div class="faq-left">
					<div class="faq-1 faq">
						<div class="question q1">
							<div class="q-left">
								<h2><?php the_field('question_1') ?></h2>
                            </h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a1">
							<?php the_field('answer_1') ?>
						</div>
					</div>
					<div class="faq-2 faq">
						<div class="question q2">
							<div class="q-left">
								<h2><?php the_field('question_2') ?></h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a2">
							<?php the_field('answer_2') ?>
						</div>
					</div>
					<div class="faq-3 faq">
						<div class="question q3">
							<div class="q-left">
								<h2><?php the_field('question_3') ?></h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a3">
							<?php the_field('answer_3') ?>
						</div>
					</div>
					<div class="faq-4 faq">
						<div class="question q4">
							<div class="q-left">
								<h2><?php the_field('question_4') ?></h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a4">
							<?php the_field('answer_4') ?>
						</div>
					</div>
					<div class="faq-5 faq">
						<div class="question q5">
							<div class="q-left">
								<h2><?php the_field('question_5') ?></h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a5">
							<?php the_field('answer_5') ?>
						</div>
					</div>
          <div class="faq-6 faq">
						<div class="question q6">
							<div class="q-left">
								<h2><?php the_field('question_6') ?></h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a6">
							<?php the_field('answer_6') ?>
						</div>
					</div>
         <div class="faq-7 faq">
						<div class="question q7">
							<div class="q-left">
								<h2><?php the_field('question_7') ?></h2>
							</div>
							<div class="q-right opener">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="answer a7">
							<?php the_field('answer_7') ?>
						</div>
					</div>
          <div class="faq-8 faq">
 						<div class="question q8">
 							<div class="q-left">
 								<h2><?php the_field('question_8') ?></h2>
 							</div>
 							<div class="q-right opener">
 								<i class="fa fa-plus" aria-hidden="true"></i>
 							</div>
 							<div class="clear"></div>
 						</div>
 						<div class="answer a8">
 							<?php the_field('answer_8') ?>
 						</div>
 					</div>
          <div class="faq-9 faq">
 						<div class="question q9">
 							<div class="q-left">
 								<h2><?php the_field('question_9') ?></h2>
 							</div>
 							<div class="q-right opener">
 								<i class="fa fa-plus" aria-hidden="true"></i>
 							</div>
 							<div class="clear"></div>
 						</div>
 						<div class="answer a9">
 							<?php the_field('answer_9') ?>
 						</div>
 					</div>
          <div class="faq-10 faq">
            <div class="question q10">
              <div class="q-left">
                <h2><?php the_field('question_10') ?></h2>
              </div>
              <div class="q-right opener">
                <i class="fa fa-plus" aria-hidden="true"></i>
              </div>
              <div class="clear"></div>
            </div>
            <div class="answer a10">
              <?php the_field('answer_10') ?>
            </div>
          </div>
          <div class="faq-11 faq">
            <div class="question q11">
              <div class="q-left">
                <h2><?php the_field('question_11') ?></h2>
              </div>
              <div class="q-right opener">
                <i class="fa fa-plus" aria-hidden="true"></i>
              </div>
              <div class="clear"></div>
            </div>
            <div class="answer a11">
              <?php the_field('answer_11') ?>
            </div>
          </div>
				</div>
				<div class="faq-right">
					<img src="<?php echo get_field('faq_img')?>" />
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
