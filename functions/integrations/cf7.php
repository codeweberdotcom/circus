<?php

/**
 * Integration with Contact Form 7
 */

// Load CSS & JS only when needed
// https://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
// https://orbitingweb.com/blog/prevent-cf7-from-loading-css-js/


add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    return $content;
});

add_filter('wpcf7_autop_or_not', '__return_false');



/**
 * Modal after sent CF7
 */
add_action('wp_footer', 'сf7_modal_after_sent');

function сf7_modal_after_sent()
{
    echo '<div class="modal fade" id="modal-0166" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body p-6">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <p class="mb-0">Спасибо за Ваше сообщение.<br>Оно успешно отправлено.</p>
        </div>
        <!--/.row -->
      </div>
      <!--/.modal-body -->
    </div>
    <!--/.modal-content -->
  </div>
  <!--/.modal-dialog -->
</div>
<!--/.modal -->';
?>

    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
            var myModal = new bootstrap.Modal(document.getElementById('modal-0166'), {
                keyboard: false
            })
            myModal.show();

            function CloseThankYouModal() {
                myModal.hide();
            }
            setTimeout(CloseThankYouModal, 5000);
        }, false);
    </script>
<?php
}



add_filter('wpcf7_form_class_attr', 'custom_custom_form_class_attr');

function custom_custom_form_class_attr($class)
{
    $class .= ' needs-validation';
    return $class;
}

// Filter Form Elements
// Include in your child theme/theme's functions.php
add_filter('wpcf7_form_elements', 'dd_wpcf7_form_elements_replace');
function dd_wpcf7_form_elements_replace($content)
{
    $content = preg_replace('/aria-required="true"/', 'aria-required="true"  required', $content);
    $content = preg_replace('/checked="checked"/', 'checked="checked" aria-required="true"  required', $content);

    return $content;
}

/**
 * Add social icons to footer CF7
 */

function social_icons()
{
    $social = '';
    // --- Single icon -----
    foreach (codeweber_socialicons() as $key => $value) {
        if (get_field('social_' . $key, 'option')) {
            $social .= '<a href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">
                <i class="fs-36 lh-1 ' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
            </a>';
        };
    };
    return $social;
}

add_filter('wpcf7_form_elements', function ($html) {


    $wpcf7 = WPCF7_ContactForm::get_current();
    $form_id = $wpcf7->id();

    $footer_cf7_forms = get_field('footer_cf7_forms', 'option');
    $cf7_array = array();
    if ($footer_cf7_forms) {
        foreach ($footer_cf7_forms as $post_ids) {
            $cf7_array[] = $post_ids;
        }
    }
    if (!empty(social_icons())) {
        $html = $html;
        if (in_array($form_id, $cf7_array)) {
            $icons_cf7 = social_icons();
            $html .= '<div class="divider-icon my-4 text-center">' . esc_html__('or', 'codeweber') . '</div>';
            $html .= '<nav class="nav social justify-content-center text-center">' . $icons_cf7 . '</nav>';
        }
    } else {
        $html = $html;
    }
    return $html;
});






/* --- Contact form 7 Demo Template Floating Plaeholder

<h2 class="mb-3 text-start">Заказ звонка</h2>
<p class="lead mb-6 text-start">Перезвоним в течение 15 минут</p>

<div class="form-floating mb-3">
    [text* text-name id:floatingName class:form-control placeholder "Ваше Имя"]
    <label for="floatingName">Ваше Имя</label>
</div>

<div class="form-floating mb-3">
    [tel* tel-463 id:floatingTel class:form-control placeholder "+7(000) 123 45 67"]
    <label for="floatingTel">+7(000) 123 45 67</label>
</div>

<div class="text-start mb-3 fs-13">
    Этот сайт защищен reCAPTCHA, и к нему применяется
    <a href="https://policies.google.com/privacy">Политика конфиденциальности</a> Google и
    <a href="https://policies.google.com/terms">Условия предоставления услуг</a>.
</div>
<button type="submit" class="btn btn-primary rounded-pill btn-login">Отправить</button>



/* Function floating CF7

add_filter('wpcf7_form_elements', function($content) {
$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\ /\1>/i', '\2', $content);
        $content = str_replace('<br />', '', $content);
        return $content;
        }); */