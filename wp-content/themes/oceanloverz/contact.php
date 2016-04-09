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
                <li class="contact-info__item"><span class="phone"></span><span class="contact-info__title">+61 2 9970 6785</span></li>
                <li class="contact-info__item"><span class="email"></span><span class="contact-info__title">hi@oceanloverz.com</span></li>
                <li class="contact-info__item">
                    <ul class="contact__social">
                        <li class="contact__social__item"><a class="contact__social__link-facebook facebook_red" href="#"></a></li>
                        <li class="contact__social__item"><a class="contact__social__link-instagram instagram_red" href="#"></a></li>
                        <li class="contact__social__item"><a class="contact__social__link-twitter twitter_red" href="#"></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="contact-right">
        <?=do_shortcode('[contact-form-7 id="35" title="Contact Form"]'); ?>
            <!-- <form action="" class="contact-form">
                <ul class="contact-form__list">
                    <li class="contact-form__list__item"><input class="contact-form__list__input" type="text" placeholder="Name"></li>
                    <li class="contact-form__list__item"><input class="contact-form__list__input" type="email" placeholder="Email"></li>
                    <li class="contact-form__list__item"><textarea class="contact-form__list__textarea" placeholder="Message"></textarea></li>
                    <li class="contact-form__list__item"><input type="submit" value="submit" class="btn btn-blue contact-form__list__submit"></li>
                </ul>
            </form> -->
        </div>
    </div>
    <!-- end contact-page -->


<? get_footer();?>
