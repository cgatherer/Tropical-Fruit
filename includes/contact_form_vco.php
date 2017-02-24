<style>
.invalid_input{
  border: solid red 1px !important;
  -webkit-box-shadow: 0px 0px 5px 2px rgba(255, 0, 0, .25) !important;
  -moz-box-shadow: 0px 0px 5px 2px rgba(255, 0, 0, .25) !important;
  box-shadow: 0px 0px 5px 2px rgba(255, 0, 0, .25) !important;
}
iframe:not(.twitter-tweet) {position:relative !important;}
textarea, select{width:48%;}
.full-p{width:96%}
.half-p{width:48%}
</style>

<div class="entry-content" onload="prepCaptcha();">
<div>
      <div>
            <div class="screen-reader-response"></div>
            <form id="theContactForm" data-formname="<?php the_title();?>" class="contactform" action="#" method="post" onload="prepCaptcha();">
                  <div id="contactForm">
                        <div class="bisect"> 
                              <p class="half-p">Your Name <span style="color:red;">*</span><br>
                                    <span class="wpcf7-form-control-wrap name"><input name="name" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                              </p>

                              <p class="half-p">Job Title <span style="color:red;">*</span><br>
                                    <span class="wpcf7-form-control-wrap company-title"><input name="company-title" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>
                         <div class="bisect">

                               <p class="half-p">Company Name <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap company-name"><input name="company-name" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>

                               <p class="half-p">Company Website <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap company-website"><input name="company-website" value="" size="40" aria-required="false" aria-invalid="false" type="text" placeholder="http://"></span>
                               </p>
                         </div>
                         <div class="bisect">

                               <p class="half-p">Address <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap address"><input name="address" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                                     <span class="wpcf7-form-control-wrap address-two"><input name="address-two" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" type="text" placeholder="Address - Line 2"></span>
                               </p>

                               <p style="vertical-align:top;" class="half-p">City <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap city"><input name="city" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>
                         <div class="bisect">
                               <p class="half-p">State <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap state"><input name="state" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>

                               <p class="half-p">Zip <span style="color:red;">*</span> <span class="nameAlert"  style="color:red;font-size:10px;line-height:1px;display:none;">Please provide a valid zip code</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap zip"><input name="zip" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>

                         <div class="bisect">

                               <p class="half-p">Telephone <span style="color:red;">*</span> <span class="nameAlert" style="color:red;font-size:10px;line-height:1px;display:none;">Please provide a valid phone number</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap tel"><input name="tel" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>

                               <p class="half-p">Your Email <span style="color:red;">*</span> <span class="nameAlert"  style="color:red;font-size:10px;line-height:1px;display:none;">Please provide a valid email address</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap your-email">
                                           <input name="your-email" value="" size="40" aria-required="true" aria-invalid="false" type="text">
                                     </span>
                               </p>
                         </div>
						
                         <p class="full-p">Area of Interest <span style="color:red;">*</span>
                               <br>
                               <span class="wpcf7-form-control-wrap interest">
                                     <select name="interest" aria-required="true" aria-invalid="false">
                                           <option value="">---</option>
                                           <option value="Private">Private</option>
                                           <option value="Public">Bulk</option>
                                           <option value="Both">Both</option>
                                     </select>
                               </span>
                         </p>

                         <p class="full-p">Application
                               <br>
                               <span class="wpcf7-form-control-wrap comments">
                                    <textarea name="application" cols="40" rows="5" aria-invalid="false" type="text" placeholder="How do you plan to use our product?"></textarea>
                               </span>
                         </p>

                         <p class="full-p">How did you hear of us? <span style="color:red;">*</span>
                               <br>
                               <span class="wpcf7-form-control-wrap hear">
                                     <span class="wpcf7-form-control wpcf7-checkbox">
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Twitter" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Twitter</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="LinkedIn" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">LinkedIn</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label><input name="hear[]" value="Other" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Other</span>
                                                 </label>
                                           </span>
                                     </span>
                               </span>
                         </p>
 
                         <div style="display:inline-block;style:200px;">
                               Other? Specify if checked <span style="color:red;"></span>
                               <br>
                               <span class="wpcf7-form-control-wrap otherHear">
                               <input name="otherHear" value="" size="40" aria-invalid="false" type="text" disabled="">
                               </span>
                         </div>
                         <p></p>

                         <div style="display:inline-block;style:100px;">

                               <div id="captcha_goes_here" onload="prepCaptcha();"> </div>

                         </div>
						 
                         <p>
                               <span class="wpcf7-form-control-wrap honeypot-668-wrap" style="display:none !important; visibility:hidden !important;">
                                     <input class="wpcf7-form-control wpcf7-text" name="honeypot-668" value="" size="40" tabindex="-1" type="text">
                                     <span class="hp-message">Please leave this field empty.</span>
                               </span>
                         </p>
                         <p>
                               <span style="color:red;">*</span> = Required Field
                         </p>
                         <p>
                               <input class="FormSubmit" value="Send" class="wpcf7-form-control" type="submit">
                               <img style="visibility: hidden;" alt="Sending ..." src="hhttp://www.ititropicals.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" class="ajax_loading">
                         </p> 
                   </div>
                   <div id="outputDisplay"></div>
            </form>
      </div>
</div>
</div>

<script>
jQuery(document).ready(function () {
    prepCaptcha();
});

window.onload = function(){
      prepCaptcha()
}
</script>
<script src="http://www.ititropicals.com/wp-content/themes/iTiTropicals-TBS/js/contact_form_vco.js?<?php echo rand(0,999); ?>" ></script>
