<?php
/**
 * @file
 * Theme implementation to display form on a single Drupal page.
 *
 * Available variables:
 * - $saabforms_background_img: This variable has the background image of the page.
 * - $saabforms_logo : This variable has the logo image of the page.
 * - $saabforms_tyc: This variable has the terms and conditions text of the form.
 * - $saabforms_msg : This variable has the response.
 */

?>
<div id="sab_forms_container">
  <div class="sab-forms-bg"><?php print $saabforms_background_img; ?></div>
  <div class="sab-content">
     <div class="sab-forms-logo"><?php print $saabforms_logo; ?></div>
     <div class="sab-forms-form">
        <h1>PAGINA DE DESUSCRIPCION</h1>
        <p><?php print $saabforms_msg; ?></p><HR>
     </div>
     <div class="saab-forms-tyc"><?php print $saabforms_tyc; ?></div>
  </div>  
  <div class="saab-forms-footer">[FOOTER]</div>
</div>
