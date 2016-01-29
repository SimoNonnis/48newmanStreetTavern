<?php

/*Template Name: Find-Us Page*/

get_header();

?>


<?php

  $telephone                  = get_field('telephone_number', 'option'); 

  $address1                   = get_field('address_line1', 'option');
  $address2                   = get_field('address_line2', 'option');
  $address3                   = get_field('address_line3', 'option'); 

  $opening_times_1            = get_field('opening_times_1');
  $opening_times_2            = get_field('opening_times_2');
  $opening_times_3            = get_field('opening_times_3');
  $find_us_top_section_image  = get_field('find_us_top_section_image');

  $find_us_bottom_image       = get_field('find_us_bottom_image'); 

?>


  <section class="u-displayTable [ top-section-wrapper ]">
    
    <div class="top-section top-section--skin top-section--bkg top-section--bkg-findUs [ amberBorder ]" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/find-us/find-us-illustration.png');">
      <h2 class="u-margin-t-flush  [ page-title ]">FIND US</h2>
      <p class="[ u-textCapitalize ]">
        <?php echo $address1; ?><br>
        <?php echo $address2; ?><br>
        <?php echo $address3; ?><br>
        <span class="find-us-phone"><?php echo $telephone; ?></span>
        <a class="find-us-mobile-phone u-inlineBlock" href="tel://<?php echo str_replace(' ', '', $telephone); ?>"><?php echo $telephone; ?></a>
      </p>
      
      <p>
        For general enquiries, please contact us at <a class="u-textBreak" href="mailto:info@48newmanstreet.co.uk?subject=48 Newman Street General Enquiry">info@48newmanstreet.co.uk</a> 
      </p>
      <p>
        For events enquiries, please contact our Reservations Manager, Fran, at <a class="u-textBreak" href="mailto:reservations@48newmanstreet.co.uk?subject=48 Newman Street Event Enquiry">reservations@48newmanstreet.co.uk</a> 
      </p>
      <p>
        For press and marketing enquiries, please contact Sophie at <a class="u-textBreak" href="mailto:sophie@affinitybarsandrestaurants.co.uk?subject=48 Newman Street Press Enquiry">sophie@affinitybarsandrestaurants.co.uk</a> 
      </p>

      

      <p><strong>Monday – Friday:</strong><br>
        <?php echo $opening_times_1; ?>
      </p>

      <p><strong>Saturday:</strong><br>
        <?php echo $opening_times_2; ?>
      </p>
      <p><strong>Sunday:</strong><br>
        <?php echo $opening_times_3; ?>
      </p>

    </div>

    <div class="cover [ img-top-section ]" style="background-image: url('<?php echo $find_us_top_section_image['sizes']['386x543']; ?>')"></div>
    
  </section>


  
  <div class="[ grid-element ] magicBox magicBox--fancy-zoom">
    <div class="cover fancy-zoom" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/images/find-us/find-us-map.jpg')"></div>
    
    <div class="magicBox-overlay magicBox-overlay__black center-parent u-textCenter">
      <div class="lotOfCopy center-child">
         <h3 class="magicBox__title">VIEW MAP</h3> 
      </div>
    </div>

    <a href="https://www.google.com/maps/d/viewer?mid=zn1D3o-JjyLA.konmZEl969Bg&msa=0&ll=51.518978,-0.136954&spn=0.006222,0.016512" target="_blank"></a>
  </div>
  


  <div class="[ grid-element ] magicBox desktop-hidden">
    <div class="cover" style="background-image: url('<?php echo $find_us_bottom_image['sizes']['386x340']; ?>')"></div>
  </div>


  <div class="[ grid-element--rect ] magicBox lap-mob-hidden">
    <div class="cover" style="background-image: url('<?php echo $find_us_bottom_image['sizes']['785x340']; ?>')"></div>
  </div>












<?php get_footer(); ?>