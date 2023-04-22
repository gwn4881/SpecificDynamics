<?php
  $path = '../..';
  $title = "Anthony Austin";
  include($path . '/assets/includes/header.php');
?>
        <div class="staff_flex">
            <img src="<?php echo($path);?>/assets/images/matt.png" alt="Picture of Matt Marna">

            <section class="about">
                <h2>About <?php echo($title);?></h2>
                <p>
                Anthony Austin, Lead Engineer. I’ve been apart of a team conducting research used for the military for 5 years. I served directly with the United States Military designing and creating various vehicles and weapons for land and air. As the lead engineer I can promise a product that is effective so anybody that uses it will never regret it. Me and my team love what we do and will only think of and implement better products and services in the future.
                </p>
                <h2>Contact info</h2>
                <ul class="contact_lists">
                    <li>Phone Number: (1)555-432-1392</li>
                    <li>Email: aaustin@SpecificDynamics.org</li>
                </ul>
            </section>
        </div>
<?php 
include($path . '/assets/includes/footer.php');
?>