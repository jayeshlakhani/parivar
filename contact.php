<!-- Header -->
<?php include_once("template/header.php") ?>
<!-- Body Part -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14683.980412524936!2d69.9048845876524!3d23.060641108939485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950c451ab7b4937%3A0xa5d5403fb511b927!2sKhedoi%2C+Gujarat+370130!5e0!3m2!1sen!2sin!4v1545213740515" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="wrapper form_body">
  <div class="container contact-form">
    <form method="post">
        <h3>Drop Us a Message</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number" value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
            </div>
        </div>
    </form>
  </div>
</div>


<!-- Body Part -->
<!-- Footer -->
<?php include_once("template/footer.php") ?>
