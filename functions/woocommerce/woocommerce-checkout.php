<?php


/**
 * Add Class to Checkout Fields
 * https://stackoverflow.com/a/41330111/20374350
 */

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields');
function addBootstrapToCheckoutFields($fields)
{
   foreach ($fields as &$fieldset) {
      foreach ($fieldset as &$field) {
         // if you want to add the form-group class around the label and the input
         $field['class'][] = 'form-floating mb-4';

         // add form-control to the actual input
         $field['input_class'][] = 'form-control';
      }
   }
   return $fields;
}


/** Forms Woo Codeweber*/

/**
 * Outputs a checkout/address form field.
 *
 * @param string $key Key.
 * @param mixed  $args Arguments.
 * @param string $value (default: null).
 * @return string
 */
function woocommerce_form_field($key, $args, $value = null)
{
   $defaults = array(
      'type'              => 'text',
      'label'             => '',
      'description'       => '',
      'placeholder'       => '',
      'maxlength'         => false,
      'required'          => false,
      'autocomplete'      => false,
      'id'                => $key,
      'class'             => array(),
      'label_class'       => array(),
      'input_class'       => array(),
      'return'            => false,
      'options'           => array(),
      'custom_attributes' => array(),
      'validate'          => array(),
      'default'           => '',
      'autofocus'         => '',
      'priority'          => '',
   );

   $args = wp_parse_args($args, $defaults);
   $args = apply_filters('woocommerce_form_field_args', $args, $key, $value);

   if (is_string($args['class'])) {
      $args['class'] = array($args['class']);
   }

   if ($args['required']) {
      $args['class'][] = 'validate-required';
      $required        = '&nbsp;<abbr class="required" title="' . esc_attr__('required', 'woocommerce') . '">*</abbr>';
   } else {
      $required = '&nbsp;<span class="optional">(' . esc_html__('optional', 'woocommerce') . ')</span>';
   }

   if (is_string($args['label_class'])) {
      $args['label_class'] = array($args['label_class']);
   }

   if (is_null($value)) {
      $value = $args['default'];
   }

   // Custom attribute handling.
   $custom_attributes         = array();
   $args['custom_attributes'] = array_filter((array) $args['custom_attributes'], 'strlen');

   if ($args['maxlength']) {
      $args['custom_attributes']['maxlength'] = absint($args['maxlength']);
   }

   if (!empty($args['autocomplete'])) {
      $args['custom_attributes']['autocomplete'] = $args['autocomplete'];
   }

   if (true === $args['autofocus']) {
      $args['custom_attributes']['autofocus'] = 'autofocus';
   }

   if ($args['description']) {
      $args['custom_attributes']['aria-describedby'] = $args['id'] . '-description';
   }

   if (!empty($args['custom_attributes']) && is_array($args['custom_attributes'])) {
      foreach ($args['custom_attributes'] as $attribute => $attribute_value) {
         $custom_attributes[] = esc_attr($attribute) . '="' . esc_attr($attribute_value) . '"';
      }
   }

   if (!empty($args['validate'])) {
      foreach ($args['validate'] as $validate) {
         $args['class'][] = 'validate-' . $validate;
      }
   }

   $field           = '';
   $label_id        = $args['id'];
   $sort            = $args['priority'] ? $args['priority'] : '';
   $field_container = '<p class="form-row %1$s form-floating mb-4 form-select-wrapper" id="%2$s" data-priority="' . esc_attr($sort) . '">%3$s</p>';

   switch ($args['type']) {
      case 'country':
         $countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

         if (1 === count($countries)) {

            $field .= '<strong>' . current(array_values($countries)) . '</strong>';

            $field .= '<input type="hidden" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="' . current(array_keys($countries)) . '" ' . implode(' ', $custom_attributes) . ' class="country_to_state" readonly="readonly" />';
         } else {
            $data_label = !empty($args['label']) ? 'data-label="' . esc_attr($args['label']) . '"' : '';

            $field = '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="country_to_state form-select country_select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder'] ? $args['placeholder'] : esc_attr__('Select a country / region&hellip;', 'woocommerce')) . '" ' . $data_label . '><option value="">' . esc_html__('Select a country / region&hellip;', 'woocommerce') . '</option>';

            foreach ($countries as $ckey => $cvalue) {
               $field .= '<option value="' . esc_attr($ckey) . '" ' . selected($value, $ckey, false) . '>' . esc_html($cvalue) . '</option>';
            }

            $field .= '</select>';

            $field .= '<noscript><button type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__('Update country / region', 'woocommerce') . '">' . esc_html__('Update country / region', 'woocommerce') . '</button></noscript>';
         }

         break;
      case 'state':
         /* Get country this state field is representing */
         $for_country = isset($args['country']) ? $args['country'] : WC()->checkout->get_value('billing_state' === $key ? 'billing_country' : 'shipping_country');
         $states      = WC()->countries->get_states($for_country);

         if (is_array($states) && empty($states)) {

            $field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

            $field .= '<input type="hidden" class="hidden" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="" ' . implode(' ', $custom_attributes) . ' placeholder="' . esc_attr($args['placeholder']) . '" readonly="readonly" data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '"/>';
         } elseif (!is_null($for_country) && is_array($states)) {
            $data_label = !empty($args['label']) ? 'data-label="' . esc_attr($args['label']) . '"' : '';

            $field .= '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="state_select form-select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder'] ? $args['placeholder'] : esc_html__('Select an option&hellip;', 'woocommerce')) . '"  data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '" ' . $data_label . '>
						<option value="">' . esc_html__('Select an option&hellip;', 'woocommerce') . '</option>';

            foreach ($states as $ckey => $cvalue) {
               $field .= '<option value="' . esc_attr($ckey) . '" ' . selected($value, $ckey, false) . '>' . esc_html($cvalue) . '</option>';
            }

            $field .= '</select>';
         } else {

            $field .= '<input type="text" class="input-text ' . esc_attr(implode(' ', $args['input_class'])) . '" value="' . esc_attr($value) . '"  placeholder="' . esc_attr($args['id']) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" ' . implode(' ', $custom_attributes) . ' data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '"/>';
         }

         break;
      case 'textarea':
         $field .= '<textarea name="' . esc_attr($key) . '" class="input-text ' . esc_attr(implode(' ', $args['input_class'])) . '" id="' . esc_attr($args['id']) . '" placeholder="' . esc_attr($args['id']) . '" ' . (empty($args['custom_attributes']['rows']) ? ' rows="2"' : '') . (empty($args['custom_attributes']['cols']) ? ' cols="5"' : '') . implode(' ', $custom_attributes) . '>' . esc_textarea($value) . '</textarea>';

         break;
      case 'checkbox':
         $field = '<label class="checkbox ' . implode(' ', $args['label_class']) . '" ' . implode(' ', $custom_attributes) . '>
						<input type="' . esc_attr($args['type']) . '" class="input-checkbox ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="1" ' . checked($value, 1, false) . ' /> ' . $args['label'] . $required . '</label>';

         break;
      case 'text':
      case 'password':
      case 'datetime':
      case 'datetime-local':
      case 'date':
      case 'month':
      case 'time':
      case 'week':
      case 'number':
      case 'email':
      case 'url':
      case 'tel':
         $field .= '<input type="' . esc_attr($args['type']) . '" class="input-text form-control ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" placeholder="' . esc_attr($args['id']) . '"  value="' . esc_attr($value) . '" ' . implode(' ', $custom_attributes) . ' required />';

         break;
      case 'hidden':
         $field .= '<input type="' . esc_attr($args['type']) . '" class="input-hidden form-control ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="' . esc_attr($value) . '" ' . implode(' ', $custom_attributes) . ' required />';

         break;
      case 'select':
         $field   = '';
         $options = '';

         if (!empty($args['options'])) {
            foreach ($args['options'] as $option_key => $option_text) {
               if ('' === $option_key) {
                  // If we have a blank option, select2 needs a placeholder.
                  if (empty($args['placeholder'])) {
                     $args['placeholder'] = $option_text ? $option_text : __('Choose an option', 'woocommerce');
                  }
                  $custom_attributes[] = 'data-allow_clear="true"';
               }
               $options .= '<option value="' . esc_attr($option_key) . '" ' . selected($value, $option_key, false) . '>' . esc_html($option_text) . '</option>';
            }

            $field .= '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder']) . '">
							' . $options . '
						</select>';
         }

         break;
      case 'radio':
         $label_id .= '_' . current(array_keys($args['options']));

         if (!empty($args['options'])) {
            foreach ($args['options'] as $option_key => $option_text) {
               $field .= '<input type="radio" class="input-radio ' . esc_attr(implode(' ', $args['input_class'])) . '" value="' . esc_attr($option_key) . '" name="' . esc_attr($key) . '" ' . implode(' ', $custom_attributes) . ' id="' . esc_attr($args['id']) . '_' . esc_attr($option_key) . '"' . checked($value, $option_key, false) . ' />';
               $field .= '<label for="' . esc_attr($args['id']) . '_' . esc_attr($option_key) . '" class="radio ' . implode(' ', $args['label_class']) . '">' . esc_html($option_text) . '</label>';
            }
         }

         break;
   }

   if (!empty($field)) {
      $field_html = '';

      if ($args['label'] && 'checkbox' !== $args['type']) {
         $field_html .= $field . '<label for="' . esc_attr($label_id) . '" class="' . esc_attr(implode(' ', $args['label_class'])) . '">' . wp_kses_post($args['label']) . $required . '</label>';
      }


      if ($args['description']) {
         $field_html .= '<span class="description" id="' . esc_attr($args['id']) . '-description" aria-hidden="true">' . wp_kses_post($args['description']) . '</span>';
      }


      $container_class = esc_attr(implode(' ', $args['class']));
      $container_id    = esc_attr($args['id']) . '_field';
      $field           = sprintf($field_container, $container_class, $container_id, $field_html);
   }

   /**
    * Filter by type.
    */
   $field = apply_filters('woocommerce_form_field_' . $args['type'], $field, $key, $args, $value);

   /**
    * General filter on form fields.
    *
    * @since 3.4.0
    */
   $field = apply_filters('woocommerce_form_field', $field, $key, $args, $value);

   if ($args['return']) {
      return $field;
   } else {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $field;
   }
}



/**
 * Disable billing field
 * https://misha.agency/woocommerce/otklyuchit-polya-na-stranicze-oformleniya-zakaza.html
 */

add_filter('woocommerce_checkout_fields', 'codeweber_del_fields', 25);

function codeweber_del_fields($fields)
{

   // unset( $fields[ 'billing' ][ 'billing_first_name' ] ); // имя
   // unset( $fields[ 'billing' ][ 'billing_last_name' ] ); // фамилия
   // unset( $fields[ 'billing' ][ 'billing_phone' ] ); // телефон
   // unset( $fields[ 'billing' ][ 'billing_email' ] ); // емайл

   unset($fields['billing']['billing_company']); // компания
   // unset($fields['billing']['billing_country']); // страна
   // unset($fields['billing']['billing_address_1']); // адрес 1
   unset($fields['billing']['billing_address_2']); // адрес 2
   // unset($fields['billing']['billing_city']); // город
   // unset($fields['billing']['billing_state']); // регион, штат
   // unset($fields['billing']['billing_postcode']); // почтовый индекс
   //unset($fields['order']['order_comments']); // заметки к заказу

   unset($fields['shipping']['shipping_company']); // компания
   unset($fields['shipping']['shipping_address_2']); // адрес 2
   return $fields;
}



add_filter('woocommerce_billing_fields', 'codeweber_remove_billing_fields');
function codeweber_remove_billing_fields($fields)
{
   unset($fields['billing_address_2']); // or shipping_address_2 for woocommerce_shipping_fields hook
   return $fields;
}


add_filter('woocommerce_shipping_fields', 'codeweber_remove_shipping_fields');
function codeweber_remove_shipping_fields($fields)
{
   unset($fields['shipping_address_2']); // or shipping_address_2 for woocommerce_shipping_fields hook
   return $fields;
}


// /**
//  * Reorder billing fields
//  * https://stackoverflow.com/a/45310503/20374350
//  */
// add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields", 1);
// function custom_override_checkout_fields($fields)
// {
//    $fields['billing']['billing_first_name']['priority'] = 10;
//    $fields['billing']['billing_last_name']['priority'] = 20;
//    $fields['billing']['billing_company']['priority'] = 30;
//    $fields['billing']['billing_country']['priority'] = 40;
//    $fields['billing']['billing_state']['priority'] = 50;
//    $fields['billing']['billing_address_1']['priority'] = 60;
//    $fields['billing']['billing_address_2']['priority'] = 70;
//    $fields['billing']['billing_city']['priority'] = 55;
//    $fields['billing']['billing_postcode']['priority'] = 90;
//    $fields['billing']['billing_email']['priority'] = 100;
//    $fields['billing']['billing_phone']['priority'] = 110;
//    return $fields;
// }


add_filter('woocommerce_default_address_fields', 'custom_override_default_locale_fields');
function custom_override_default_locale_fields($fields)
{
   $fields['state']['priority'] = 50;
   $fields['city']['priority'] = 55;
   $fields['address_1']['priority'] = 52;
   $fields['address_2']['priority'] = 70;
   return $fields;
}


/**
 * Change country field class
 */
// change country class
add_filter('woocommerce_default_address_fields', 'country_class_change');

function country_class_change($address_fields)
{
   // change country class
   $address_fields['first_name']['class'] = array('col-md-6');
   $address_fields['last_name']['class'] = array('col-md-6');
   $address_fields['country']['class'] = array('col-md-6');
   $address_fields['postcode']['class'] = array('col-md-12 col-xl-3');
   $address_fields['state']['class'] = array('col-md-6');
   $address_fields['city']['class'] = array('col-md-6 col-lg-6 col-xl-4');
   $address_fields['address_1']['class'] = array('col-md-6 col-xl-5');
   $address_fields['']['class'] = array('col-md-6');
   return $address_fields;
}


/**
 * Add Regions Russia
 */
/**
 * @snippet       Регионы России для добавления в доставкее и на странице оформления заказа
 * @sourcecode    https://wpruse.ru/my-plugins/dobavit-regiony-dostavki-v-woocommerce/
 * @testedwith    WooCommerce 3.8
 * @author        Artem Abramovich
 * @see           https://ru.wordpress.org/plugins/wc-city-select/
 */
/*add_filter('woocommerce_states', 'awrr_states_russia');
function awrr_states_russia($states)
{
   $states['RU'] = array(
      '01' => 'Республика Адыгея',
      '02' => 'Республика Башкортостан',
      '03' => 'Республика Бурятия',
      '04' => 'Республика Алтай',
      '05' => 'Республика Дагестан',
      '06' => 'Республика Ингушетия',
      '07' => 'Республика Кабардино-Балкария',
      '08' => 'Республика Калмыкия',
      '09' => 'Республика Карачаево-Черкессия',
      '10' => 'Республика Карелия',
      '11' => 'Республика Коми',
      '12' => 'Республика Марий Эл',
      '13' => 'Республика Мордовия',
      '14' => 'Республика Саха',
      '15' => 'Республика Северная Осетия — Алания',
      '16' => 'Республика Татарстан',
      '17' => 'Республика Тыва',
      '18' => 'Удмуртская Республика',
      '19' => 'Республика Хакасия',
      '20' => 'Чеченская республика',
      '21' => 'Чувашская Республика',
      '22' => 'Алтайский край',
      '23' => 'Краснодарский край',
      '24' => 'Красноярский край',
      '25' => 'Приморский край',
      '26' => 'Ставропольский край',
      '27' => 'Хабаровский край',
      '28' => 'Амурская область',
      '29' => 'Архангельская область',
      '30' => 'Астраханская область',
      '31' => 'Белгородская область',
      '32' => 'Брянская область',
      '33' => 'Владимирская область',
      '34' => 'Волгоградская область',
      '35' => 'Вологодская область',
      '36' => 'Воронежская область',
      '37' => 'Ивановская область',
      '38' => 'Иркутская область',
      '39' => 'Калининградская область',
      '40' => 'Калужская область',
      '41' => 'Камчатский край',
      '42' => 'Кемеровская область',
      '43' => 'Кировская область',
      '44' => 'Костромская область',
      '45' => 'Курганская область',
      '46' => 'Курская область',
      '47' => 'Ленинградская область',
      '48' => 'Липецкая область',
      '49' => 'Магаданская область',
      '50' => 'Московская область',
      '51' => 'Мурманская область',
      '52' => 'Нижегородская область',
      '53' => 'Новгородская область',
      '54' => 'Новосибирская область',
      '55' => 'Омская область',
      '56' => 'Оренбургская область',
      '57' => 'Орловская область',
      '58' => 'Пензенская область',
      '59' => 'Пермский край',
      '60' => 'Псковская область',
      '61' => 'Ростовская область',
      '62' => 'Рязанская область',
      '63' => 'Самарская область',
      '64' => 'Саратовская область',
      '65' => 'Сахалинская область',
      '66' => 'Свердловская область',
      '67' => 'Смоленская область',
      '68' => 'Тамбовская область',
      '69' => 'Тверская область',
      '70' => 'Томская область',
      '71' => 'Тульская область',
      '72' => 'Тюменская область',
      '73' => 'Ульяновская область',
      '74' => 'Челябинская область',
      '75' => 'Забайкальский край',
      '76' => 'Ярославская область',
      '77' => 'Москва',
      '78' => 'Санкт-Петербург',
      '79' => 'Еврейская автономная область',
      '82' => 'Республика Крым',
      '83' => 'Ненецкий автономный округ',
      '86' => 'Ханты-Мансийский автономный округ — Югра',
      '87' => 'Чукотский автономный округ',
      '89' => 'Ямало-Ненецкий автономный округ',
      '92' => 'Севастополь',
      '93' => 'Донецкая Народная Республика',
      '94' => 'Луганская Народная Республика',
   );
   return $states;
}*/


/**
 * Shows the product price on sale (if any) in the checkout table
 */
add_filter('woocommerce_cart_item_subtotal', 'show_sale_price_at_checkout', 10, 3);
function show_sale_price_at_checkout($subtotal, $cart_item, $cart_item_key)
{

   // gets the product object
   $product = $cart_item['data'];
   // get the quantity of the product in the cart
   $quantity = $cart_item['quantity'];

   // check if the object exists
   if (!$product) {
      return $subtotal;
   }

   // check if the product is on sale
   if ($product->is_on_sale() && !empty($product->get_sale_price())) {
      // shows sale price and regular price       
      $price = wc_format_sale_price(
         // regular price
         wc_get_price_to_display(
            $product,
            array(
               'price' => $product->get_regular_price(),
               'qty' => $quantity
            )
         ),
         // sale price
         wc_get_price_to_display(
            $product,
            array(
               'price' => $product->get_sale_price(),
               'qty' => $quantity
            )
         )
      ) . $product->get_price_suffix();
   } else {
      // shows regular price
      $price = wc_price(
         // regular price
         wc_get_price_to_display(
            $product,
            array(
               'price' => $product->get_regular_price(),
               'qty' => $quantity
            )
         )
      ) . $product->get_price_suffix();
   }
   return $price;
}
