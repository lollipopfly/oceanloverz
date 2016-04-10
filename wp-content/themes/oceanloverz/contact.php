<?
/*
    Template Name: Contact
*/
    get_header();
?>
    <h2 class="page__title page__title-red-light">We love hearing from you!</h2>

    <!-- begin contact-page  -->
    <div class="contact-page clearfix">
        <div class="contact-left">
            <ul class="contact-info clearfix">
                <li class="contact-info__item"><span class="location"></span><span class="contact-info__title">At the beach!</span></li>
                <li class="contact-info__item"><span class="phone"></span><span class="contact-info__title"><?=get_field('phone', 'user_1');?></span></li>
                <li class="contact-info__item"><span class="email"></span><span class="contact-info__title"><?=get_option('admin_email'); ?></span></li>
                <li class="contact-info__item">
                    <ul class="contact__social">
                        <li class="contact__social__item">
                            <a class="contact__social__link-facebook facebook_red" href="<?=get_field('facebook_link', 'user_1');?>" target="_blank"></a>
                        </li>
                        <li class="contact__social__item">
                            <a class="contact__social__link-instagram instagram_red" href="<?=get_field('instagram_link', 'user_1');?>" target="_blank"></a>
                        </li>
                        <li class="contact__social__item">
                            <a class="contact__social__link-twitter twitter_red" href="<?=get_field('twitter_link', 'user_1');?>" target="_blank"></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="contact-right">
            <?=do_shortcode('[contact-form-7 id="35" title="Contact Form"]'); ?>
        </div>
    </div>
    <!-- end contact-page -->


<? get_footer();?>
