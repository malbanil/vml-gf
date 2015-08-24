<?php
/**
 * @file
 * Theme implementation to display form on a single Drupal page.
 *
 * Available variables:
 * - $saabforms_background_img: This variable has the background image of the page.
 * - $saabforms_logo : This variable has the logo image of the page.
 * - $saabforms_tyc: This variable has the terms and conditions text of the form.
 * - $saabforms_text_color : This variable has the RGB code to color text of the form.
 */

?>

<div id="sab_forms_container">
  <div class="sab-forms-bg"><?php print $saabforms_background_img; ?></div>
  <div class="sab-content">
     <div class="sab-forms-logo"><?php print $saabforms_logo; ?></div>
     <div class="sab-forms-form"><?php print $messages; ?>
            <?php if(isset($_GET['response']) && $_GET['response']=='true'){ ?>
            <center>
            <h1>GRACIAS POR REGISTRARTE</h1>
            <p>Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada.</p>
            <p><a href='#'>Volver</a></p>
            </center> 
            <?php }else{ ?>
            <?php
            $arr = drupal_get_form('sabm_globalforms_form');
            print drupal_render($arr);
            ?>
            <?php } ?>
     </div>
     <div class="saab-forms-tyc"><h3>TYC</h3></br><?php print $saabforms_tyc; ?></div>
  </div>  
  <div class="saab-forms-footer">[FOOTER]</div>
</div>
