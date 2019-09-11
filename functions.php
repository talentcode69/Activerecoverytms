<?php
/* Determine Env */
include 'vendor/autoload.php';
$env = "dev";
if (strpos(site_url(), "http://wordpress") !== false) {
    $env = "dev";
} else {
    $env = "live";
}
/* Determine Env End */

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

function is_test_data($test_name, $test_email, $test_phone){
  $test_phone_number = preg_replace('/\D/', "", trim($test_phone));
  $test_name_case = strtolower($test_name);

  if($test_email === "test@test.com" || $test_phone_number === "1111111111"){
      return true;
  }
}

function wpt_register_js()
{
    global $env;

    wp_enqueue_script("jquery");
    wp_register_script('jquery.bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', '');
    wp_enqueue_script('jquery.bootstrap.min');

    if ($env == "dev") {
        wp_enqueue_script("frontpage", get_template_directory_uri() ."/assets/js/custom/front-page.js?v=" . time());
    } else {
        wp_enqueue_script("frontpage", get_template_directory_uri() ."/assets/js/custom/front-page.js?cached=false");
    }

    wp_enqueue_script("footerprofessionalform", get_template_directory_uri() ."/assets/js/custom/footer-form.js?cache=false" );
    wp_enqueue_script("flagcapture", get_template_directory_uri() ."/assets/js/custom/flag-capture.js" );
}

add_action('init', 'wpt_register_js');

function wpt_register_css()
{
    global $env;

    if ($env == "dev") {
        wp_register_style('style', get_template_directory_uri() . '/style.min.css?v=' . time());
    } else {
        wp_register_style('style', get_template_directory_uri() . '/style.min.css');
    }

    wp_register_style('fontAwesome', 'https://pro.fontawesome.com/releases/v5.10.1/css/all.css');
    wp_enqueue_style('fontAwesome');

    wp_register_style('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap.min');
}

add_action('wp_enqueue_scripts', 'wpt_register_css');


require_once 'wp-bootstrap-navwalker.php';

function custom_excerpt_more_link($more)
{
    return '...<br><a href="' . get_the_permalink() . '" class="read-more-link" rel="nofollow">Read More</a>';
}

add_filter('excerpt_more', 'custom_excerpt_more_link');

function set_custom_excerpt_length()
{
    return 40;
}
add_filter('excerpt_length', 'set_custom_excerpt_length', 10);


function my_custom_sidebar()
{
    register_sidebar(array(
        'name' => __('Blog', 'blog-sidebar'),
        'id' => 'custom-side-bar',
        'description' => __('Blog Sidebar', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
	    register_sidebar(array(
        'name' => __('Header left', 'blog-sidebar'),
        'id' => 'header-left',
        'description' => __('Header left', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
		    register_sidebar(array(
        'name' => __('Header right', 'blog-sidebar'),
        'id' => 'header-right',
        'description' => __('Header right', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
	register_sidebar(array(
        'name' => __('Footer Widget First', 'blog-sidebar'),
        'id' => 'footer-widget-first',
        'description' => __('Footer First', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
	register_sidebar(array(
        'name' => __('Footer Widget Second', 'blog-sidebar'),
        'id' => 'footer-widget-second',
        'description' => __('Footer Second', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
	register_sidebar(array(
        'name' => __('Footer Widget Third', 'blog-sidebar'),
        'id' => 'footer-widget-third',
        'description' => __('Footer Third', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
	register_sidebar(array(
        'name' => __('Footer Widget Fourth', 'blog-sidebar'),
        'id' => 'footer-widget-fourth',
        'description' => __('Footer Fourth', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
	register_sidebar(array(
        'name' => __('Bottom Footer', 'blog-sidebar'),
        'id' => 'bottom-footer',
        'description' => __('Bottom Footer', 'blog-sidebar'),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'my_custom_sidebar');
function cookieDisplay()
{
    if (isset($_COOKIE['score'])) {
        echo $_COOKIE['score'];
    } else {
        echo "not working";
    }
}
add_shortcode('cookieDisplay', 'cookieDisplay');

add_action('wp_ajax_request_consultation', 'request_consultation_update');
add_action('wp_ajax_nopriv_request_consultation', 'request_consultation_update');

// if you want both logged in and anonymous users to get the emails, use both hooks above


function request_consultation_update(){
    if (isset($_POST['action']) && $_POST['action'] == "request_consultation") {

        //send email
        $your_name           = $_POST["Name"];
        $your_email          = $_POST["Email"];
        $your_phone          = $_POST["Phone"];
        $your_score          = $_POST["Score"];
        $your_message        = $_POST["PHQ9 Range"];
        $medication          = $_POST["Medication"];
        $gacid               = $_POST["Google Analytics"];
        $form_name           = $_POST["action"];
        $seeing_psychiatrist = $_POST["Psychiatrist"];

        $to      = $your_email;
        $subject = "Your request for a free consultation from Active Recovery TMS";
        $message = "Active Recovery TMS has received your request for a follow-up consultation related to treating depression with TMS. <br><br> A representative of Active Recovery TMS will reach out to you via email and/or phone shortly to schedule your consultation. <br><br> <a href='https://activerecoverytms.com/phq-9-test-online/?utm_medium=email&utm_source=phq9contactfollow' target='_blank'>Click here</a>  to review the results of your PHQ-9 quiz. <br><br> We look forward to helping you along your road to recovery from depression. <br><br> Dr Jonathan Horey <br><br> Medical Director <br><br> Active Recovery TMS <br><br> 503-719-4648 <br><br> ------- <br><br> This e-mail was sent from a contact form on Active Recovery TMS (https://activerecoverytms.com)";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $message, $headers);


        // to tms
        $to_tms = "";
        if(is_test_data($your_name, $your_email, $your_phone)){
          $to_tms = "spedraza@iteratemarketing.com";
        } else {
            $to_tms = "leads@activerecoverytms.com, joe@iteratemarketing.com, activerecovery@iteratemarketing.com, dgrano1001@gmail.com";
        }

        $subject_tms = "Lead Generated From PHQ-9 Assessment";
        $message_tms = "From: " . $your_email . "<br><br> Name: " . $your_name . "<br><br> Phone: " . $your_phone . "<br><br> Score: " . $your_score . "<br><br>Has Tried Prescription Medication: " . $medication . "<br><br>" . " Generated through  PHQ-9 Online Assessment";
        $headers_tms = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to_tms, $subject_tms, $message_tms, $headers_tms);
        die();

    }
}

add_action('wp_ajax_mail_before_submit', 'mycustomtheme_send_mail_before_submit');
add_action('wp_ajax_nopriv_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

function mycustomtheme_send_mail_before_submit()
{

    if (isset($_POST['action']) && $_POST['action'] == "mail_before_submit") {

        //send email
        $your_name           = $_POST["Name"];
        $your_email          = $_POST["Email"];
        $your_phone          = $_POST["Phone"];
        $your_score          = $_POST["Score"];
        $your_message        = $_POST["PHQ9 Range"];
        $medication          = $_POST["Medication"];
        $gacid               = $_POST["Google Analytics"];
        $form_name           = $_POST["action"];
        $seeing_psychiatrist = $_POST["Psychiatrist"];

        $to      = $your_email;
        $subject = "Your Request for a Free Consultation from Active Recovery TMS";
        $message = "Dear " . $your_name . ", <br><br> " . join(".<br><br>", explode(".", $your_message)) . "<a href='https://activerecoverytms.com/phq-9-test-online/?utm_medium=email&utm_source=phq9follow' target='_blank'>Click here</a>  to review your results and obtain a free consultation on the benefits of TMS for your situation <br><br> Dr Jonathan Horey <br><br> Medical Director <br><br> Active Recovery TMS <br><br> 503-719-4648 <br><br> ------- <br><br> This e-mail was sent from a contact form on Active Recovery TMS (https://activerecoverytms.com)";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $message, $headers);


         // to tms
         $to_tms = "";
         if(is_test_data($your_name, $your_email, $your_phone)){
           $to_tms = "spedraza@iteratemarketing.com";
         } else {
           $to_tms = "leads@activerecoverytms.com, joe@iteratemarketing.com, activerecovery@iteratemarketing.com, dgrano1001@gmail.com";
         }

        if($your_score >= 15 && $medication === "Yes"){
            $subject_tms = "PHQ-9 Online Completion - Please Contact";
        } else {
          $subject_tms = "PHQ-9 Online Assessment Completion";
        }
        $message_tms = "From: " . $your_email . "<br><br> Name: " . $your_name . "<br><br> Phone: " . $your_phone . "<br><br> Score: " . $your_score . "<br><br>Has Tried Prescription Medication: " . $medication . "<br><br>" . " Generated through  PHQ-9 Online Assessment";
        $headers_tms = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to_tms, $subject_tms, $message_tms, $headers_tms);

        die();
    }

    echo 'error';
    die();
}

add_action('wp_ajax_front_page_form', 'artms_front_page_form_submission');
add_action('wp_ajax_nopriv_front_page_form', 'artms_front_page_form_submission');

function artms_front_page_form_submission(){
    if (isset($_POST['action']) && $_POST['action'] == "front_page_form") {

        $your_name      = $_POST["Name"];
        $your_email     = $_POST["Email"];
        $your_phone     = $_POST["Phone"];
        $your_interest  = $_POST["Topic"];
        $location       = $_POST["Location"];
        $gacid          = $_POST["Google Analytics"];
        $medication     = $_POST["Medication"];
        $campaign       = $_POST["UTM Campaign"];
        $source         = $_POST["UTM Source"];
        $medium         = $_POST["UTM Medium"];
        $keyword         = $_POST["UTM Term"];
        $form_name      = $_POST["action"];

        $to      = $your_email;
        $subject = "Your request for a free consultation from Active Recovery TMS";
        $message = "Dear " . $your_name . ", <br><br> Active Recovery TMS has received your request for a consultation related to treating depression with TMS. <br><br> A representative of Active Recovery TMS will reach out to you via email and/or phone shortly to schedule your consultation. <br><br> <a href='https://activerecoverytms.com/phq-9-test-online/?utm_medium=email&utm_source=formfollowup' target='_blank'>Click here</a>  to access our free PHQ-9 depression self evaluation quiz. <br><br> We look forward to helping you along your road to recovery from depression. <br><br> Dr Jonathan Horey <br><br> Medical Director <br><br> Active Recovery TMS <br><br> 503-719-4648 <br><br> ------- <br><br> This e-mail was sent from a contact form on Active Recovery TMS (https://activerecoverytms.com)";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $message, $headers);

        // to tms
        $to_tms = "spedraza@iteratemarketing.com";

        if(is_test_data($your_name, $your_email, $your_phone)){
          $to_tms = "spedraza@iteratemarketing.com";
        } else {
          $to_tms = "leads@activerecoverytms.com, joe@iteratemarketing.com, activerecovery@iteratemarketing.com, dgrano1001@gmail.com";
        }

        $subject_tms = "Lead from Book a Free Consultation Form";
        $message_tms = "From: " . $your_email . "<br><br> Name: " . $your_name . "<br><br> Phone: " . $your_phone . " <br><br>Has Tried Prescription Medication: " . $medication . "<br><br> Generated through Free Consultation Form <br><br>";
        $headers_tms = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to_tms, $subject_tms, $message_tms, $headers_tms);

        echo "sent";
        $jsonData = array(
            'FormMeds' => "00 YES",
            'FormCampaign'=> $campaign,
            'formMedium' => $medium,
            'formSource' => $source,
            'formEmail' => $your_email,
            'formFirst' => $your_name,
            'formLast' => '',
            'formPhone' => $your_phone,
            'FormKeyword' => $keyword,
            'FormLeadSource' => '00 WEBSITE',
            'FormLeadStatus' => '81 A Form Lead',
            'FormTeam' => '70 Outbound Telesales',
            'formName' => '00 HEADER',
            'formRequest' => '00 Schedule a consultation',
            'FormURL' => $location
        );

        $jsonDataEncoded = json_encode($jsonData);
        $ch = curl_init('https://new.vanillasoft.net/web/post.aspx?id=54227');
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Access-Control-Allow-Origin: *','Access-Control-Allow-Headers: Origin','Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);
        wp_die();
    }
}

add_action('wp_ajax_footer_professional_form', 'artms_footer_professional_submission');
add_action('wp_ajax_nopriv_footer_professional_form', 'artms_footer_professional_submission');

function artms_footer_professional_submission(){
    if (isset($_POST['action']) && $_POST['action'] == "footer_professional_form") {

        $your_name      = $_POST["Name"];
        $your_email     = $_POST["Email"];
        $your_phone     = $_POST["Phone"];
        $your_interest  = $_POST["Topic"];
        $location       = $_POST["Location"];
        $gacid          = $_POST["Google Analytics"];
        $form_name      = $_POST["action"];
        $footer_med     = $_POST["Medication"];

        $to      = $your_email;
        $subject = "Your request to talk to an Active Recovery TMS Professional";
        $message = "Dear " . $your_name . ", <br><br> Active Recovery TMS is happy to answer any question you might have about major depressive disorder and drug resistant depression and its treatment using non-pharmaceutical, non-surgical and non-invasive transcranial magnetic stimulation or TMS. <br><br> A representative of Active Recovery TMS will reach out to you via email and/or phone shortly to schedule your consultation. <br><br> <a href='https://activerecoverytms.com/phq-9-test-online/?utm_medium=email&utm_source=formfollowup' target='_blank'>Click here</a> to access our free PHQ-9 depression self evaluation quiz. <br><br> We look forward to helping you along your road to recovery from depression. <br><br> Dr Jonathan Horey <br><br> Medical Director <br><br>  Active Recovery TMS <br><br> 503-719-4648 <br><br> ------- <br><br> This e-mail was sent from a contact form on Active Recovery TMS (https://activerecoverytms.com)";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $message, $headers);

        // to tms
        if(is_test_data($your_name, $your_email, $your_phone)){
          $to_tms = "spedraza@iteratemarketing.com";
        } else {
          $to_tms = "leads@activerecoverytms.com, joe@iteratemarketing.com, activerecovery@iteratemarketing.com, dgrano1001@gmail.com";
        }

        $subject_tms = "Lead from Talk to A Professional Form";
        $message_tms = "From: " . $your_email . "<br><br> Name: " . $your_name . "<br><br> Phone: " . $your_phone . "<br><br> Interested In: " . $your_interest . "<br><br> Has tried Prescription Medication? " . $footer_med . "<br><br>Generated through Footer Professional Form";
        $headers_tms = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to_tms, $subject_tms, $message_tms, $headers_tms);

        echo "sent";
        wp_die();
    }
}

function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

}
add_action( 'init', 'disable_emojis' );

function custom_post_type() {
    $supports = array(
        'title', // post title
        'editor', // post content
        //'author', // post author
        'thumbnail', // featured images
        //'excerpt', // post excerpt
        'custom-fields', // custom fields
        //'comments', // post comments
        //'revisions', // post revisions
        //'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('Videos', 'plural'),
        'singular_name' => _x('Video', 'singular'),
        'menu_name' => _x('Videos', 'admin menu'),
        'name_admin_bar' => _x('Videos', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Video'),
        'new_item' => __('New Video'),
        'edit_item' => __('Edit Video'),
        'view_item' => __('View Video'),
        'all_items' => __('All Videos'),
        'search_items' => __('Search Video'),
        'not_found' => __('No Video Found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'videos'),
        'has_archive' => true,
        'hierarchical' => false
    );

    register_post_type('videos', $args);
}

add_action('init', 'custom_post_type');

function faq_custom_post_type() {
    $supports = array(
        'title', // post title
        'editor', // post content
        //'author', // post author
        'thumbnail', // featured images
        //'excerpt', // post excerpt
        'custom-fields', // custom fields
        //'comments', // post comments
        //'revisions', // post revisions
        //'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('FAQ\'s', 'plural'),
        'singular_name' => _x('FAQ', 'singular'),
        'menu_name' => _x('FAQ\'s', 'admin menu'),
        'name_admin_bar' => _x('FAQ\'s', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New FAQ'),
        'new_item' => __('New FAQ'),
        'edit_item' => __('Edit FAQ'),
        'view_item' => __('View FAQ'),
        'all_items' => __('All FAQ\'s'),
        'search_items' => __('Search FAQ'),
        'not_found' => __('No FAQ Found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faqs'),
        'has_archive' => true,
        'hierarchical' => false
    );

    register_post_type('faq', $args);
}

add_action('init', 'faq_custom_post_type');


function prefix_wcount(){
    ob_start();
    the_content();
    $content = ob_get_clean();
    return sizeof(explode(" ", $content));
}
