<?php

  if( ($_SERVER['REQUEST_METHOD'] == 'POST') ) :

      $formErrors = false;
      if(isset($_POST['human'])) :
        $human = filter_var($_POST['human'], FILTER_SANITIZE_STRING);
      endif;
      if(isset($_POST['first_name'])) :
        $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
      endif;
      if(isset($_POST['last_name'])) :
        $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
      endif;
      if(isset($_POST['company_name'])) :
        $company_name = filter_var($_POST['company_name'], FILTER_SANITIZE_STRING);
      endif;
      if(isset($_POST['company_website'])) :
        $company_website = $_POST['company_website'];
      endif;
      if(isset($_POST['email_address'])) :
        $email_address = $_POST['email_address'];
      endif;
      if(isset($_POST['phone_number'])) :
        $phone_number = $_POST['phone_number'];
      endif;
      if(isset($_POST['requirements'])) :
        $requirements = $_POST['requirements'];
      endif;

      // Regular Expressions
      if($human !== '7') :
        $error_hu = "<div class='error'>You answered the anti-spam question incorrectly!</div>";
        $formErrors = true;
      endif;
      if(!(preg_match("/[A-Za-z]+/", $first_name))) :
        $error_fn = '<div class="error">Sorry, Enter first name in desired format again. Only letters are allowed.</div>';
        $formErrors = true;
      endif;
      if(!(preg_match("/[A-Za-z]+/", $last_name))) :
        $error_ln = '<div class="error">Sorry, Enter last name in desired format again. Only letters are allowed.</div>';
        $formErrors = true;
      endif;
      if(!(preg_match("/[A-Za-z]+/", $company_name))) :
        $error_cn = '<div class="error">Sorry, Enter company name in desired format again. Only letters are allowed.</div>';
        $formErrors = true;
      endif;
      if(!(preg_match("/\d{3}[\-]\d{3}[\-]\d{4}/", $phone_number)) && !empty($phone_number)) :
        $error_pn = '<div class="error">Sorry, Enter phone number in desired format again, For e.g. 123-123-1234.</div>';
        $formErrors = true;
      endif;

      if(!($formErrors) && $human === '7') :
        // $to = "test@baustein.ca";
        // $subject = "From $first_name -- Baustein Landing Page";
        // $message = "Name: ".$first_name." ".$last_name."\nCompany Name: ".$company_name."\nCompany Website: ".$company_website."\nEmail Address: ".$email_address."\nPhone Number: ".$phone_number."\nMessage: ".$requirements;
        // if(mail($to, $subject, $message)) :
          $msg = "Thanks, Your form has been submitted.";
        // else:
        //   $msg = "Sorry, There were some errors found in the form.";
        // endif;
      endif;
  endif;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Build Your Wealth Management Client Base by Investing in Good Design</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="fonts/vendor/fonts.css" media="screen">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="vendor/css/bootstrap-select.min.css" media="screen">
    <link rel="stylesheet" href="vendor/css/aos.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script src="vendor/js/modernizr.min.js"></script>
    <!--[if lt IE 9]>
    <script src="vendor/js/html5shiv.min.js"></script>
    <script src="vendor/js/respond.min.js"></script><![endif]-->
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="icons/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/manifest.json">
    <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#777777">
    <link rel="shortcut icon" href="icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
    <meta name="msapplication-config" content="icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="home">
    <header class="banner">
      <div class="container">
        <div class="row">
          <div class="site-logo"><a href="http://baustein.ca" target="_blank" title="Visit Baustein Strategic Design Group Inc."><img src="images/logo.png" alt="Baustein Strategic Design Group Inc."></a></div>
          <nav class="site-navigation" role="navigation"><a class="navigation__lets_talk" href="#contact__link">Let's Talk<img src="images/icons/lets_talk.svg" alt="Let's Talk"></a><a class="navigation__phone" href="tel:+16474305262">+1 647 430 5262</a></nav>
        </div>
        <div class="row">
          <div class="site-banner">
            <h1 class="site-title">Build Your Wealth Management Client Base <span>by Investing in  <strong>Good Design.</strong></span></h1>
          </div>
        </div>
      </div>
    </header>
    <section class="features">
      <div class="container">
        <div class="row equal">
          <div class="feature-item"> 
            <div class="feature">
              <h2>First Impressions Matter</h2>
              <p>Clients form an opinion about your firm in less than 10 seconds based on the design of your brand identity, marketing materials, and digital presence.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature">
              <h2>Return On Investment</h2>
              <p>Research shows that every $100 invested in strategic design generates $235 in company revenue. Good design engages your clients and builds your business.</p>
            </div>
          </div>
          <div class="feature-item link">       
            <div class="feature">           
              <h2>Get the Report</h2>
              <p>5 Things every <span>Wealth Management Firm needs.</span></p><a href="https://www.designcouncil.org.uk/sites/default/files/asset/document/dc_lbbd_report_08.11.13_FA_LORES.pdf" target="_blank" title="Click here to get the Report"><img src="images/icons/logo_pdf.svg" alt="Get the Report"><span>Report</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="advertise">
        <div class="container">
            <div class="row">
              <div class="advertise_heading">
                <h2>A limited marketing budget does not mean limited access to good design.</h2>
                <p>For roughly the same cost of a full-time designer, you can access an entire design team, each person specializing in the different aspects of design that will cover all your company’s creative needs. Good design can add value to any business.</p>
              </div>
                <div class="advertise_content"><img src="images/icons/animation_designer.svg" alt="Sole Graphic Designer"><img src="images/icons/animation_arrow.svg" alt="Arrow"><img src="images/icons/animation_roles.svg" alt="Roles of a Designer"></div>
            </div>
        </div>
    </section>
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="services_heading">
            <h2>Baustein Strategic Design Group</h2>
            <p>
               Baustein is a multi-disciplinary creative partner – a <span>‘one-stop-shop’ </span>for all your firms’ marketing and creative needs. We specialize in creating memorable brand identities and professional design solutions for all your online and print materials.        </p>
          </div>
        </div>
        <div class="row">
          <div class="services_second">
            <ul>
              <li><img src="images/icons/extensive_experience.svg" alt="Extensive experience in corporate design"><span>Extensive design experience and a knowledgeable team</span></li>
              <li><img src="images/icons/access_to_team.svg" alt="Access to an entire team at an affordable rate"><span>Access to an entire team of experts at an affordable rate            </span></li>
              <li><img src="images/icons/customized_billing.svg" alt="Customized and transparent billing model"><span>Customized and transparent billing model          </span></li>
              <li><img src="images/icons/honest_approach.svg" alt="Honest, reliable and confidential approach"><span>Honest, reliable and confidential approach </span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="expertise">
        <div class="nav-tabs__bg">
            <ul class="nav nav-tabs" id="expertise_tab" role="tablist">
                <li class="active" role="presentation"><a href="#brand_development" aria-controls="brand_development" role="tab" data-toggle="tab">Brand Development<span class="visible-sm"><br></span></a></li>
                <li role="presentation"><a href="#marketing" aria-controls="marketing" role="tab" data-toggle="tab">Marketing<span class="visible-sm"><br></span></a></li>
                <li role="presentation"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Design & Imagery<span class="visible-sm"><br></span></a></li>
                <li role="presentation"><a href="#websites" aria-controls="websites" role="tab" data-toggle="tab">Website Design & Development</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="brand_development" role="tabpanel">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Branding & Visual Identity</h2>
                        <p>We offer a range of creative solutions including naming, brand positioning and visual identity design.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Logo & Wordmark Design</h2>
                        <p>Your logo or wordmark is the core of your brand identity. Our team of designers create appealing logos that will communicate the proper brand image and message to your clients.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Typographic Treatments</h2>
                        <p>A great brand identity requires an equally strong family of fonts that work well across all print and digital media.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Colour Palette</h2>
                        <p>A strategically selected colour palette ties all your marketing materials together. We will help you select the proper colour palette for your firm.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Visual Language</h2>
                        <p>The visual language and elements you use including photography, iconography, and other graphic elements define your brand voice. We can help you get it right.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Brand Guidelines</h2>
                        <p>Your brand guidelines define the use of your brand elements. Our design team can help you create a unified brand message across all channels and media.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="marketing" role="tabpanel">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Marketing Strategy</h2>
                        <p>Our team of strategists can help you identify your ideal types of clients and define the proper marketing tactics to reach them.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Lead Generation</h2>
                        <p>Baustein can create the proper print, social, and email marketing campaigns to reach your target audiences and build your client base.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Video Marketing</h2>
                        <p>Research shows that integrating video into your marketing activities can help increase client acquisition rates. We offer a complete video solution from concept development, to filming, post-production, and marketing. </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="design" role="tabpanel">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Marketing Collateral</h2>
                        <p>Properly designed marketing collateral will properly communicate your firm’s value and attract the right types of clients.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Corporate Brochures</h2>
                        <p>Our team can design and manage the print production of corporate and fund brochures that will appeal to your clients.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Presentations</h2>
                        <p>Talk to us if you need professional presentations created to pitch funds or different investment scenarious to your clients.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Factsheets</h2>
                        <p>We can help you communicate your fund information in a visually appealing way.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Investor Reports</h2>
                        <p>Good design can help you effectively communicate to investors.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Annual Reports</h2>
                        <p>Our design team can help tell your story with print, interactive, and web based annual reports.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Newsletters</h2>
                        <p>Want to stay in touch with your clients? We can design the right newsletter concept for your firm and help manage the delivery to your target audiences.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Print Ads</h2>
                        <p>Baustein can design print ad campaigns to target channel partners and investors.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Infographics</h2>
                        <p>Communicate important information and strategies to your clients with visually appealing infographics.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Photography</h2>
                        <p>Baustein’s photography solutions can cover all your requirements from stock images to custom created photography.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>Video</h2>
                        <p>Baustein provides a complete video design, filming, editing, production, and delivery solution that can enhance communication with your clients.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="websites" role="tabpanel">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Website Design & Build</h2>
                        <p>Our modern, responsive, mobile friendly websites are designed to communicate your information and engage your clients across all devices.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>SEO</h2>
                        <p>Our team will define the proper search engine optimisation program to increase your visibility in the most popular search engines.</p>
                    </div>
                    <div class="col-sm-4">
                        <h2>SEM</h2>
                        <p>When you want to generate new client leads, our team can create the proper online advertising campaigns to reach your target audiences as they use search.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
      <hr class="divider">
    </div>
    <section class="portfolio">
        <div class="container">
            <h2>Trusted by International Wealth Management Firms</h2>
        </div>
        <div class="tab_wrap">
            <ul id="portfolio_tab">
                <li class="portfolio-item">
                    <div class="item_first" href="#portfolio_first"><img class="hidden" src="images/project_first.jpg" alt="AFL Investments Limited"></div>
                </li>
                <li class="portfolio-item">
                    <div class="item_second" href="#portfolio_second"><img class="hidden" src="images/project_second.jpg" alt="NexGen Financial Corporation"></div>
                </li>
                <li class="portfolio-item">
                    <div class="item_third" href="#portfolio_third"><img class="hidden" src="images/project_third.jpg" alt="Cidel Group"></div>
                </li>
            </ul>
        </div>
    </section>
    <section class="contact" id="contact__link">
        <div class="container">
            <div class="row">
                <div class="contact_group">
                    <h2><span>To learn more about how </span><span>Baustein Strategic Design Group </span><span>can help meet your design objectives and grow your business. </span><span>Please get in touch.</span></h2>
                </div>
                <div class="contact_form">
                    <form id="form_contact" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#form_contact" method="POST" name="form_contact"
                      class="<?php
                        if(isset($error_fn) || isset($error_cn) || isset($error_ln) || isset($error_pn) || isset($error_hu)) {
                            echo 'form-error';
                        }
                      ?>"
                    >
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                              <input class="fill" required type="text" name="first_name" placeholder="First Name" id="first_name" value="<?php if(isset($first_name)) { echo $first_name; } ?>">
                              <?php
                                if(isset($error_fn)) :
                                  echo $error_fn;
                                endif;
                              ?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <input class="fill" required type="text" name="last_name" placeholder="Last Name" id="last_name" value="<?php if(isset($last_name)) { echo $last_name; } ?>">
                              <?php
                                if(isset($error_ln)) :
                                  echo $error_ln;
                                endif;
                              ?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <input class="fill" required type="text" name="company_name" placeholder="Company Name" id="company_name" value="<?php if(isset($company_name)) { echo $company_name; } ?>">
                              <?php
                                if(isset($error_cn)) :
                                  echo $error_cn;
                                endif;
                              ?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <input class="fill" required type="url" name="company_website" placeholder="Company Website" id="company_website" value="<?php if(isset($company_website)) { echo $company_website; } ?>">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <input class="fill" required type="email" name="email_address" placeholder="Email Address" id="email_address" value="<?php if(isset($email_address)) { echo $email_address; } ?>">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <input type="text" name="phone_number" placeholder="Phone Number e.g. 123-123-1234 (Optional)" id="phone_number" value="<?php if(isset($phone_number)) { echo $phone_number; } ?>" maxlength="12">
                              <?php
                                if(isset($error_pn)) :
                                  echo $error_pn;
                                endif;
                              ?>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea id="requirements" name="requirements" placeholder="Tell us about your requirements."></textarea>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group filled">
                            <label for="human">What is 5+2? (Anti-Spam)</label>
                            <input type="text" name="human" placeholder="Type your answer...">
                            <?php
                              if(isset($error_hu)) :
                                echo $error_hu;
                              endif;
                            ?>
                          </div>
                        </div>
                        <?php
                          if(isset($msg)) :
                            echo '<div class="report">'.$msg.'</div>';
                          endif;
                        ?>
                      </div>
                      <div id="success"></div>
                      <button type="submit" role="button" id="submit" name="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="brand"><img src="images/icons/logo_baustein_white.svg" alt="Baustein, A Design and Visual brand agency"></div>
                <div class="rgd"><small>Proud Member of</small><img src="images/icons/logo_rgd.svg" alt="Proud member of RGD"></div>
                <div class="address">
                    <p>222 Islington Ave., Studio 204<br>Toronto, ON M8V 3W7<br>Canada</p>
                </div>
            </div>
            <div class="row">
                <div class="phone"><a href="tel:+16474305292">+1 647 430 5292</a></div>
                <div class="copyright">
                    <p>Copyright © 2006 – 2017 Baustein Strategic Design Group Inc. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/aos.js"></script>
    <script src="vendor/js/jquery.validate.min.js"></script>
    <script src="vendor/js/additional-methods.min.js"></script>
    <script src="vendor/js/jquery.ns-autogrow.min.js"></script>
    <script src="vendor/js/tabcollapse.js"></script>
    <script src="vendor/js/google-sheet.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>
