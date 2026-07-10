<?php $title = "Dazzle Creations"; ?>

<?php $description = ""; ?>

<?php $canonical = "http://dazzle-creations"; ?>

<?php $keywords = "";?>

<?php $pageclass = "homePage"; ?>
<?php include "includes/header.php"; ?>

<section class="contact_sect common_padding">

<div class="hero_section">
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class='hero_text'>
                    <h1>Contact <span>Us</span></h1>
                    <p class='para_light'>We’re here to transform creative dreams into stunning realities. Every print we craft is more than ink and material it carries your story, your brand, and your vision. For us, this isn’t just work, it’s a passion that drives everything we do.</p>
                </div>
            </div>
        </div>
     </div>
</div>

<div class="contact-bg">
    <div class="contact--form-area ">
        <div class="container-fluid">
     
            <form class="contact-form pt-2 mb-md-0 mb-3" action="enquiry_with_smtp.php" method="POST">
                <div class="row d-md-flex d-block mb-md-3">
                    <div class="col">
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col">
                        <input type="email" name="email_address" class="form-control" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="row d-md-flex d-block mb-md-3">
                    <div class="col">
                        <textarea class="form-control" rows="4" columns='4' name="message" placeholder="Message" required></textarea>
                    </div>
                </div>
                <input type="hidden" name="email_sp" value="">
                <div class="d-flex align-items-md-center align-items-center justify-content-center flex-md-row flex-column">
                <div class='center_div mt-3'>
                    <button type="submit" class="submit_btn text-center mx-auto ">SUBMIT</button>
                </div>
                </div>
            </form>
        </div>
     </div>
 </div> 

</div>

<div class="contact_detials">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-12">
                <h3>Lets print something amazing together !</h3>
            </div>
       </div>
       <div class="row">        
           <div class="col-md-3 d-flex flex-column pb-sm-2">
               <span class='mb-3'><i class="bi bi-telephone-fill"></i> Phone</span>
               <a href="tel:+919071517777">+91 90715 17777</a>
           </div>
           <div class="col-md-3 d-flex flex-column">
               <span class='mb-3'><i class="bi bi-envelope-at-fill"></i> Email</span>
               <a href="mailto:info@dazzlecreations.in">info@dazzlecreations.in</a>
           </div>
       </div>
 
    </div>
</div>
</section>

<?php include "includes/footer.php"; ?>