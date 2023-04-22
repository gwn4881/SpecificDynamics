<?php
  $path = '../..';
  $title = "Duncan Priestley";
  include($path . '/assets/includes/header.php');
?>
        <div class="staff_flex">
            <img src="<?php echo($path);?>/assets/images/matt.png" alt="Picture of Matt Marna">

            <section class="about">
                <h2>About <?php echo($title);?></h2>
                <p>
                    Hello I am Matt Marana, the Chief Technology Officer (CTO) here at Specific Dynamics. With years of
                    experience
                    in
                    the industry, driving innovation and implementing cutting-edge technologies that have revolutionized
                    the
                    company's operations is what I live for. As the CTO, I am responsible for developing and
                    implementing
                    the
                    company's technology strategy, leading the technology team, and ensuring the company stays ahead of
                    the
                    curve in terms of technology trends.
                </p>
                <h2>Contact info</h2>
                <ul class="contact_lists">
                    <li>Phone Number: (1)555-432-1390</li>
                    <li>Email: dpriestley@SpecificDynamics.org</li>
                </ul>
            </section>
        </div>
<?php 
include($path . '/assets/includes/footer.php');
?>