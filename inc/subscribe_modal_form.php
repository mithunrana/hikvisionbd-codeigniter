<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Subscribe to Newsletter</h4>
         </div>
         
         <div class="modal-body" id="subscribeDiv">
            <div class="alert alert-success" id="success-alert" style="display:none"> Thanking You For Subscribing Us..</div>
            <form class="custom-form subscribe_now" id="form_subscribe_now">
               <div class="text-center newsletter-img">
                  <img src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/img/newsletter.png" alt="newsletter img" class="img-responsive">
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <p class="note-txt text-center">You can signup to our newsletter and be alerted! 
                     Simply enter the details below and click subscribe.
                  </p>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label>Name :</label>
                        <input type="text" class="form-control" name="subscriber_name" id="subscriber_name" value="">
                        <div class="validation-alert" id="subscriber_name_alert"></div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label>Email :</label>
                        <input type="email" class="form-control" name="subscriber_email" id="subscriber_email" value="">
                        <div class="validation-alert" id="subscriber_email_alert"></div>
                     </div>
                  </div>

                  <div class="clearfix"></div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label>Phone :</label>
                        <input type="tel" class="form-control" name="subscriber_phone" id="subscriber_phone" value="">
                        <div class="validation-alert" id="subscriber_phone_alert"></div>
                     </div> 
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label>Company :</label>
                        <input type="text" class="form-control" name="subscriber_company" id="subscriber_company" value="">
                        <div class="validation-alert" id="subscriber_company_alert"></div>
                     </div>
                  </div>

                  <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div id="form_errors" class="validationAlert" style="display:none"> * All fields are required </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer" id="subscribeDiv1">
            <button type="button" class="btn btn-red" id="subscriber_save">Subscribe</button>
         </div>
         
      </div>
   </div>
</div>