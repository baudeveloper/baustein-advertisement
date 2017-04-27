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
        $to = "tej@baustein.ca";
        $subject = "From $first_name -- Baustein Landing Page";
        $message = "Name: ".$first_name." ".$last_name."\nCompany Name: ".$company_name."\nCompany Website: ".$company_website."\nEmail Address: ".$email_address."\nPhone Number: ".$phone_number;
        if(mail($to, $subject, $message)) :
          $msg = "Thanks, Your form has been submitted.";
        else:
          $msg = "Sorry, There were some errors found in the form.";
        endif;
      endif;
  endif;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home - Baustein</title>
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
                <div class="site-logo">
                    <a href="http://baustein.ca" target="_blank" title="Visit Baustein Strategic Design Group Inc."><img src="images/logo.png" alt="Baustein Strategic Design Group Inc."></a>
                </div>
                <nav class="site-navigation" role="navigation"><a class="navigation__lets_talk" href="#contact__link">Let's Talk<img src="images/icons/lets_talk.svg" alt="Let's Talk"></a><a class="navigation__phone" href="tel:+16474305262">+1 647 430 5262</a></nav>
            </div>
            <div class="row">
                <div class="site-banner">
                    <h1 class="site-title">Build your Wealth Management Client Base by Investing in<span>Good Design.</span></h1>
                </div>
            </div>
        </div>
    </header>
    <section class="features">
        <div class="container">
            <div class="row equal">
                <div class="feature-item"> <img class="thumb hidden" src="images/feature_first.png" alt="First Impressions Matter">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2>First Impressions Matter</h2>
                        </div>
                        <div class="panel-body">
                            <p>Potential clients form an opinion your firm in less than 10 seconds based on the design of your brand and communication materials.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-item"><img class="thumb hidden" src="images/feature_second.png" alt="First Impressions Matter">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2>Return on Investment</h2>
                        </div>
                        <div class="panel-body">
                            <p>75% of people judget the credibility of a business based on design. Research shows that every $100 invested in design generates $235 in company revenue.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-item link">
                    <a class="panel" href="http://www.pdf995.com/samples/pdf.pdf" target="_blank">
                        <div class="panel-heading">
                            <h2>Get the Report</h2><img class="icon" src="images/icons/logo_pdf.svg" alt="PDF File">
                        </div>
                        <div class="panel-body"><img class="child_thumb" src="images/icons/logo_report.svg" alt="Get the report">
                            <p class="hidden">Testing paragraph</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="advertise">
        <div class="container">
            <div class="row">
                <div class="advertise_heading">
                    <h2>A limited marketing budget does not mean limited access to good design.</h2>
                    <p>For roughly the same cost of a full-time designer, you can access an entire design team, each person specializing in the different aspects of design that will cover all your company’s creative needs. Good design can add value to any
                        business.
                    </p>
                </div>
                <div class="advertise_content"><img src="images/icons/animation_designer.svg" alt="Good design" data-aos="fade-right" data-aos-delay="1000"><img src="images/icons/animation_arrow.svg" alt="Good design" data-aos="fade-right" data-aos-delay="2000"><img src="images/icons/animation_roles.svg"
                        alt="Good design" data-aos="fade-right" data-aos-delay="3000"></div>
            </div>
        </div>
    </section>
    <section class="portfolio">
      <div class="tab_wrap">
        <ul class="nav nav-tabs" id="portfolio_tab" data-tabs="tabs">
          <li class="portfolio-item"><a class="item_first" data-toggle="tab" href="#portfolio_first"><img class="hidden" src="images/project_first.png" alt="AFL Investments Limited"><span>See More<i class="fa fa-chevron-down" aria-hidden="true"></i></span></a></li>
          <li class="portfolio-item"><a class="item_second" data-toggle="tab" href="#portfolio_second"><img class="hidden" src="images/project_second.png" alt="NexGen Financial Corporation"><span>See More<i class="fa fa-chevron-down" aria-hidden="true"></i></span></a></li>
          <li class="portfolio-item"><a class="item_third" data-toggle="tab" href="#portfolio_third"><img class="hidden" src="images/project_third.png" alt="Mavrix Fund Management Inc."><span>See More<i class="fa fa-chevron-down" aria-hidden="true"></i></span></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="portfolio_first">
            <div class="row">
              <div class="portfolio_sidebar"> <span class="client_name">AFL Investments Limited</span><span class="client_location">Hamilton, Bermuda</span><span class="client_services">Logo, Factsheets, Introductory Brochure</span><span class="client_tags">Branding, Reporting, Website (not shown)</span></div>
              <div class="portfolio_gallery"><img src="images/portfolio_layout_afl.png" alt="AFL Investments Limited"></div>
            </div><a class="close" href="#"><span>&times;</span></a>
          </div>
          <div class="tab-pane" id="portfolio_second">
            <div class="row">
              <div class="portfolio_sidebar"> <span class="client_name">NexGen Financial Corporation</span><span class="client_location">Toronto, Canada</span><span class="client_services">Logo, Factsheets, Introductory Brochure</span><span class="client_tags">Branding, Reporting, Website (not shown)</span></div>
              <div class="portfolio_gallery"><img src="images/portfolio_layout_nexgen.png" alt="NexGen Financial Corporation"></div>
            </div><a class="close" href="#"><span>&times;</span></a>
          </div>
          <div class="tab-pane" id="portfolio_third">
            <div class="row">
              <div class="portfolio_sidebar"> <span class="client_name">Mavrix Fund Management Inc.</span><span class="client_location">Toronto, Canada</span><span class="client_services">Logo, Factsheets, Introductory Brochure</span><span class="client_tags">Branding, Reporting, Website (not shown)</span></div>
              <div class="portfolio_gallery"><img src="images/portfolio_layout_mavirix.png" alt="Mavrix Fund Management Inc."></div>
            </div><a class="close" href="#"><span>&times;</span></a>
          </div>
        </div>
      </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="services_heading">
                    <h2>
                        Baustein is a multi-disciplinary creative partner, offering you a <span>‘one-stop-shop’ </span>for all your firms’ marketing and sales material needs. We specialize in creating strong brands and professional design solutions for
                        online and print materials.</h2>
                </div>
            </div>
            <div class="row">
                <div class="services_first">
                    <p>Title 1</p>
                    <ul>
                        <li> <img src="images/icons/brand_development.svg" alt="Brand Development"><span>Brand Development            </span></li>
                        <li><img src="images/icons/marketing_strategy.svg" alt="Marketing Strategy"><span>Marketing Strategy            </span></li>
                        <li><img src="images/icons/print_design.svg" alt="Print Design"><span>Print Design            </span></li>
                        <li><img src="images/icons/website_design.svg" alt="Website Design"><span>Website Design            </span></li>
                        <li><img src="images/icons/website_development.svg" alt="Website Development"><span>Website Development            </span></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="services_second">
                    <p>Title 2</p>
                    <ul>
                        <li><img src="images/icons/extensive_experience.svg" alt="Extensive experience and a knowledgeable team"><span>Extensive experience and a knowledgeable team            </span></li>
                        <li><img src="images/icons/access_to_team.svg" alt="Access to an entire team at affordable rates"><span>Access to an entire team at affordable rates            </span></li>
                        <li><img src="images/icons/timely_execution.svg" alt="Timely execution of your urgent projects"><span>Timely execution of your urgent projects            </span></li>
                        <li><img src="images/icons/customized_billing.svg" alt="Customized and transparent billing model"><span>Customized and transparent billing model            </span></li>
                        <li><img src="images/icons/impressive_list.svg" alt="Impressive list of premium design services"><span>Impressive list of premium design services          </span></li>
                        <li><img src="images/icons/honest_approach.svg" alt="Honest, reliable and confidential approach"><span>Honest, reliable and confidential approach       </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact__link">
        <div class="container">
            <div class="row">
                <div class="contact_group">
                    <h2>Get Started.</h2>
                    <h3>Let’s talk about how design can help grow your business.</h3>
                    <p>I would like to book a conference call to discuss my wealth management firm’s needs.</p>
                </div>
                <div class="contact_form">
                    <form id="form_contact" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#form_contact" method="POST" name="form_contact"
                      class="<?php
                        if(isset($error_fn) || isset($error_cn) || isset($error_ln) || isset($error_pn) || isset($error_hu)) {
                            echo 'form-error';
                        }
                      ?>"
                    >
                        <div class="form-group">
                            <input class="fill" required type="text" name="first_name" placeholder="First Name" id="first_name" value="<?php if(isset($first_name)) { echo $first_name; } ?>">
                            <?php
                              if(isset($error_fn)) :
                                echo $error_fn;
                              endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <input class="fill" required type="text" name="last_name" placeholder="Last Name" id="last_name" value="<?php if(isset($last_name)) { echo $last_name; } ?>">
                            <?php
                              if(isset($error_ln)) :
                                echo $error_ln;
                              endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <input class="fill" required type="text" name="company_name" placeholder="Company Name" id="company_name" value="<?php if(isset($company_name)) { echo $company_name; } ?>">
                            <?php
                              if(isset($error_cn)) :
                                echo $error_cn;
                              endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <input class="fill" required type="url" name="company_website" placeholder="Company Website" id="company_website" value="<?php if(isset($company_website)) { echo $company_website; } ?>">
                        </div>
                        <div class="form-group">
                            <input class="fill" required type="email" name="email_address" placeholder="Email Address" id="email_address" value="<?php if(isset($email_address)) { echo $email_address; } ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" placeholder="Phone Number e.g. 123-123-1234 (Optional)" id="phone_number" value="<?php if(isset($phone_number)) { echo $phone_number; } ?>" maxlength="12">
                            <?php
                              if(isset($error_pn)) :
                                echo $error_pn;
                              endif;
                            ?>
                        </div>
                        <div class="form-group filled">
                          <label for="human">What is 5+2? (Anti-Spam)</label>
                          <input type="text" name="human" placeholder="Type your answer...">
                          <?php
                            if(isset($error_hu)) :
                              echo $error_hu;
                            endif;
                          ?>
                        </div>
                        <?php
                          if(isset($msg)) :
                            echo '<div class="report">'.$msg.'</div>';
                          endif;
                        ?>
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
                <div class="phone"><a href="tel:6474305292">647 430 5292</a></div>
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
    <script src="js/custom.min.js"></script>
</body>

</html>
