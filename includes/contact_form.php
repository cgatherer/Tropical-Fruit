<!-- <script src="https://www.google.com/recaptcha/api.js?onload=prepCaptcha&render=explicit" async defer></script> -->

<style>
.invalid_input{
  border: solid red 1px !important;
  -webkit-box-shadow: 0px 0px 5px 2px rgba(255, 0, 0, .25) !important;
  -moz-box-shadow: 0px 0px 5px 2px rgba(255, 0, 0, .25) !important;
  box-shadow: 0px 0px 5px 2px rgba(255, 0, 0, .25) !important;
}
</style>

<div class="entry-content" onload="prepCaptcha();">
<div>
      <div>
            <div class="screen-reader-response"></div>
            <form id="theContactForm" data-formname="<?php the_title();?>" class="contactform" action="processAllTheForms.php" method="post" onload="prepCaptcha();">
                  <div id="contactForm">
                        <div class="bisect">

                              <?php // Name ?>

                              <p>Your Name <span style="color:red;">*</span><br>
                                    <span class="wpcf7-form-control-wrap name"><input name="name" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                              </p>
                              <p style="display:none;">
                                    <span class="wpcf7-form-control-wrap email-from"><input name="email-from" value="sales@ititropicals.com" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" type="email"></span>
                              </p>
                              <p style="display:none;">
                                    <span class="wpcf7-form-control-wrap textarea-name"><textarea name="textarea-name" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false">ititropicals.com</textarea></span>
                              </p>

                              <?php // Job Title ?>

                              <p>Job Title <span style="color:red;">*</span><br>
                                    <span class="wpcf7-form-control-wrap company-title"><input name="company-title" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>
                         <div class="bisect">

                               <?php // Company Name ?>

                               <p>Company Name <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap company-name"><input name="company-name" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>

                               <?php // Company Website ?>

                               <p>Company Website <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap company-website"><input name="company-website" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>
                         <div class="bisect">

                               <?php // Address ?>

                               <p>Address <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap address"><input name="address" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap address-two"><input name="address-two" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" type="text"></span>
                               </p>

                               <?php // City ?>

                               <p style="vertical-align:top;">City <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap city"><input name="city" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>
                         <div class="bisect">

                               <?php // State ?>

                               <p>State <span style="color:red;">*</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap state"><input name="state" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>

                               <?php // Zip ?>

                               <p>Zip <span style="color:red;">*</span> <span class="nameAlert"  style="color:red;font-size:10px;line-height:1px;display:none;">Please provide a valid zip code</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap zip"><input name="zip" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>
                         </div>

                         <?php // Locale ?>

                         <p>Locale <span style="color:red;">*</span>
                               <br>
                               <span class="wpcf7-form-control-wrap locale">
                                     <select name="locale" aria-required="true" aria-invalid="false">
                                           <option value="North America">North America</option>
                                           <option value="Europe">Europe</option>
                                           <option value="Asia">Asia</option>
                                           <option value="Caribbean">Caribbean</option>
                                           <option value="South/Central America">South/Central America</option>
                                     </select>
                               </span>
                         </p>
                         <div class="bisect">

                               <?php // Telephone ?>

                               <p>Telephone <span style="color:red;">*</span> <span class="nameAlert" style="color:red;font-size:10px;line-height:1px;display:none;">Please provide a valid phone number</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap tel"><input name="tel" value="" size="40" aria-required="true" aria-invalid="false" type="text"></span>
                               </p>

                               <?php // Your Email ?>

                               <p>Your Email <span style="color:red;">*</span> <span class="nameAlert"  style="color:red;font-size:10px;line-height:1px;display:none;">Please provide a valid email address</span>
                                     <br>
                                     <span class="wpcf7-form-control-wrap your-email">
                                           <input name="your-email" value="" size="40" aria-required="true" aria-invalid="false" type="text">
                                     </span>
                               </p>
                         </div>

                         <?php // Area of Interest ?>

                         <p>Area of Interest <span style="color:red;">*</span>
                               <br>
                               <span class="wpcf7-form-control-wrap interest">
                                     <select name="interest" aria-required="true" aria-invalid="false">
                                           <option value="">---</option>
                                           <option value="Have a Sales Representative Contact Me">Have a Sales Representative Contact Me</option>
                                           <option value="Help with product applications/formulations">Help with product applications/formulations</option>
                                           <option value="Request a Sample">Request a Sample</option>
                                           <option value="Surplus Inventory Bid">Surplus Inventory Bid</option>
                                           <option value="Request an R&amp;D Presentation">Request an R&amp;D Presentation</option>
                                           <option value="Like to visit the Idea Kitchen">Like to visit the Idea Kitchen</option>
                                           <option value="OtherGeneralQuestion">Other - General Question</option>
                                     </select>
                               </span>
                         </p>

                         <?php // Comments ?>

                         <p>Comments/Questions
                               <br>
                               <span class="wpcf7-form-control-wrap comments">
                                    <textarea name="comments" cols="40" rows="10" aria-invalid="false" type="text"></textarea>
                               </span>
                         </p>

                         <?php // News Signup ?>

                         <p>Sign up for iTi Newsflashes?
                               <br>
                               <span class="wpcf7-form-control-wrap newsflash">
                                     <select name="newsflash" aria-invalid="false">
                                           <option value="Yes">Yes</option>
                                           <option value="No">No</option>
                                     </select>
                               </span>
                               <br>
                         </p>

                         <div style="width: 100%; overflow: hidden;" class="bisect">


                              <p style="float: left; width: 220px; height: 50px; margin-right: 10px;" id="relationshipP">Relationship w/iTi
                                    <br>
                                    <span style="" class="wpcf7-form-control-wrap relationship">
                                          <select style="width: 220px; display: inline;" name="relationship" aria-invalid="false">
                                                <option value="iTi is a (potential) Supplier to us">iTi is a (potential) Supplier to us</option>
                                                <option value="We are Brokers for iTi">We are Brokers for iTi</option>
                                                <option value="We are Importers">We are Importers</option>
                                                <option value="We are in Media/Advertising">We are in Media/Advertising</option>
                                                <option value="We are a Supplier to iTi">We are a Supplier to iTi</option>
                                                <option value="Personal">Personal</option>
                                                <option value="University / Educational">University / Educational</option>
                                                <option value="Other">Other</option>
                                          </select>
                                    </span>
                              </p>


                              <p style="position: relative; float: left;">Other? Specify if selected
                                   <br>
                                   <span class="wpcf7-form-control-wrap otherRelationship">
                                   <input name="otherRelationship" value="" size="40" aria-invalid="false" disabled="" type="text">
                                   </span>
                              </p>
                        </div>


                         <?php // Hear ?>

                         <p>How did you hear of us? (Select up to three)&nbsp;<span style="color:red;">*</span>
                               <br>
                               <span class="wpcf7-form-control-wrap hear">
                                     <span class="wpcf7-form-control wpcf7-checkbox">
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Internet Search" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Internet Search</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Food Navigator - eNewsletter" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Food Navigator - eNewsletter</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Beverage Daily- eNewsletter" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Beverage Daily- eNewsletter</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Bevnet - eNewsletter" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Bevnet - eNewsletter</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Food Business News magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Food Business News magazine</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Food Technology magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Food Technology magazine</span>
                                                 </label>
                                           </span>
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
                                                 <label>
                                                       <input name="hear[]" value="UL Prospector" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">UL Prospector</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Dairy Foods Magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Dairy Foods Magazine</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Beverage Industry magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Beverage Industry magazine</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Bennet magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Bennet magazine</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Foodnews magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Foodnews magazine</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="Happi Magazine" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Happi Magazine</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label>
                                                       <input name="hear[]" value="IFT Directory" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">IFT Directory</span>
                                                 </label>
                                           </span>
                                           <span>
                                                 <label><input name="hear[]" value="Other" type="checkbox">&nbsp;<span class="wpcf7-list-item-label">Other</span>
                                                 </label>
                                           </span>
                                     </span>
                               </span>
                         </p>
                         <div style="display:inline-block;style:100px;">

                               <?php // Hear - Internet ?>

                               Internet Search? Specify if checked <span style="color:red;"></span>
                               <br>
                               <span class="wpcf7-form-control-wrap internetSearch">
                               <input id="required" name="internetSearch" value="" size="40" aria-invalid="false" type="text" disabled="">
                               </span>
                         </div>
                         <div style="display:inline-block;style:100px;">

                               <?php // Hear - Other ?>

                               Other? Specify if checked <span style="color:red;"></span>
                               <br>
                               <span class="wpcf7-form-control-wrap otherHear">
                               <input name="otherHear" value="" size="40" aria-invalid="false" type="text" disabled="">
                               </span>
                         </div>
                         <p></p>

                         <div style="display:inline-block;style:100px;">

                               <?php // Captcha ?>
                               <div id="captcha_goes_here" onload="prepCaptcha();">
                               </div>

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

                               <?php // Submit ?>

                               <input class="FormSubmit" value="Send" class="wpcf7-form-control" type="submit" onload="prepCaptcha();">
                               <img style="visibility: hidden;" alt="Sending ..." src="/wp-content/plugins/contact-form-7/images/ajax-loader.gif" class="ajax_loading">
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
<script src="/wp-content/themes/iTiTropicals-TBS/js/comtact-form.js" ></script>
