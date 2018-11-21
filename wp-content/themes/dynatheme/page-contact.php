<?php
/* Template Name: Contact Page */

add_filter( 'genesis_attr_site-inner', 'be_site_inner_attr' );
function be_site_inner_attr( $attributes ) {

    // Adds a class of 'full' for styling this .site-inner differently
    $attributes['class'] .= ' full';

    return $attributes;
}

get_header();
?>

<div class="text-section">
  <div class="columns">
    <div class="column has-text-centered">
      <p>Upholding patient-centered practice, here at Aesthetic Dentistry and Implant Center, we believe in partnerships being at the core of our success. This is why we want to do everything we can to bring back your perfect smile. This commitment includes our team of talented, highly-trained, and experienced staff that are always ready to help you in any way possible.</p>
      <br>

      <p class="has-text-weight-bold">Whether you are considering making large or small changes to your smile, you owe it to yourself to give us a call! Smiling with confidence can improve the quality of your life, and we're excited to show you how to get there!</p>
    </div>
  </div>
  </div>

<div class="contact-form">
  <form>
    <div class="columns">
      <div class="column">
        <input type="text" placeholder="First Name" />
      </div>
      <div class="column">
        <input type="text" placeholder="Last Name" />
        <small>&nbsp;</small>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <input type="email" placeholder="Email Address" />
      </div>
      <div class="column">
        <input type="phone" placeholder="Phone Number" />
        <small>Give us the best phone numer at which to reach you!</small>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <input type="text" placeholder="Subject" />
        <small>&nbsp;</small>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <textarea placeholder="Message"></textarea>
      </div>
    </div>
    <div class="columns">
      <div class="column has-text-centered">
        <input type="submit" value="Submit" />
      </div>
    </div>
  </form>

</div>

<div class="three-cta">
  <div class="columns">
    <div class="column has-text-centered">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone-icon.png" />
      <h3>
        Call Us:
        <span><a href="tel:1 (940) 489-8181">1 (940) 489-8181</a></span>
      </h3>
    </div>
    <div class="column has-text-centered">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-icon.png" />
      <h3>
        Email Us:
        <span><a href="mailto:sample@adic.com">sample@adic.com</a></span>
      </h3>
    </div>
    <div class="column has-text-centered">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location-icon.png" />
      <h3>
        Visit Us:
        <span>
          3500 Caorinth<br>
          Parkway Corinth<br>
          TX 76208
        </span>
      </h3>
    </div>
  </div>
</div>
<div class="footer-map">

</div>


<?php get_footer(); ?>
