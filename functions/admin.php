<?php

add_action('admin_head', 'my_custom_fonts'); // admin_head is a hook my_custom_fonts is a function we are adding it to the hook

function my_custom_fonts()
{
    echo '<style>
    body {
    background: #f0f0f1!important;
    color: #3c434a!important;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif!important;
    font-size: 13px!important;
    line-height: 1.4em!important;
    min-width: 600px!important;
}
.block-editor .edit-post-sidebar .acf-fields > .acf-field {
    margin: 5px;
}
.acf-tab-group {
    padding: 5px 5px 0;
}
.acf-label.acf-accordion-title {
    background: lightgray;
    font-weight: 800!important;
    letter-spacing: 1px;
}
body {
    display: block;
    flex-direction: unset;
}



.acf-flexible-content .layout .acf-fc-layout-handle {
            /*background-color: #00B8E4;*/
            background-color: #202428;
            color: #eee;
        }

        .acf-repeater.-row > table > tbody > tr > td,
        .acf-repeater.-block > table > tbody > tr > td {
            border-top: 2px solid #202428;
        }

        .acf-repeater .acf-row-handle {
            vertical-align: top !important;
            padding-top: 16px;
        }

        .acf-repeater .acf-row-handle span {
            font-size: 20px;
            font-weight: bold;
            color: #202428;
        }

        .imageUpload img {
            width: 75px;
        }

        .acf-repeater .acf-row-handle .acf-icon.-minus {
            top: 30px;
        }
        .acf_postbox {
            background-color: #0473AA;
            border-radius: 5px;
        }
        .acf_postbox input[type=text],
        .acf_postbox input[type=search],
        .acf_postbox input[type=radio],
        .acf_postbox input[type=tel],
        .acf_postbox input[type=time],
        .acf_postbox input[type=url],
        .acf_postbox input[type=week],
        .acf_postbox input[type=password],
        .acf_postbox input[type=checkbox],
        .acf_postbox input[type=color],
        .acf_postbox input[type=date],
        .acf_postbox input[type=datetime],
        .acf_postbox input[type=datetime-local],
        .acf_postbox input[type=email],
        .acf_postbox input[type=month],
        .acf_postbox input[type=number],
        .acf_postbox select,
        .acf_postbox textarea {
            border-radius: 5px;
        }

        .acf_postbox p.label {
            text-shadow: none;
        }

        .acf_postbox h2.hndle,
        .acf_postbox p.label label,
        .acf_postbox p.label,
        .acf_postbox .toggle-indicator {
            color: #ffffff;
        }

        /*---- Date Picker Style ----*/

        .ui-acf .ui-datepicker select.ui-datepicker-month,
        .ui-acf .ui-datepicker select.ui-datepicker-year {
            border-radius: 5px;
        }

        .ui-acf .ui-state-default{
            border: 1px solid #ffffff!important;
            background: none!important;
        }

        .ui-acf .ui-datepicker .ui-state-active, .ui-acf .ui-state-default:hover {
            background: #2EA2CC!important;
            color: #ffffff;
        }

        .ui-acf .ui-widget-header {
           background: #3e3e3e;
        }

        .ui-acf .ui-datepicker .ui-datepicker-buttonpane {
            background: #0473AA;
            border-top: none;
        }

        .ui-acf .ui-datepicker .ui-datepicker-buttonpane button {
            text-shadow: none;
            color: #ffffff;
            text-decoration: underline;
            border: none!important;
        }

        .acf-repeater.-row > table > tbody > tr:nth-child(2n) > td,
.acf-repeater.-block > table > tbody > tr:nth-child(2n) > td,
.acf-repeater.-row > table > tbody > tr:nth-child(2n) > td tr > td,
.acf-repeater.-block > table > tbody > tr:nth-child(2n) > td tr > td {
    border-top: 2px solid #46474A;
    background: #ebebed;
}

.acf-repeater.-row > table > tbody > tr:nth-child(2n) .acf-row-handle span,
.acf-repeater.-block > table > tbody > tr:nth-child(2n) .acf-row-handle span,
.acf-repeater.-row > table > tbody > tr:nth-child(2n) > td .acf-row-handle span,
.acf-repeater.-block > table > tbody > tr:nth-child(2n) > td .acf-row-handle span{
    color: #46474A;
}   
  </style>';
}


/**
 * New Column THumb Post Image in admin
 */
function posts_custom_columns($column_name, $id)
{
    if ($column_name === 'riv_post_thumbs') {
        if (has_post_thumbnail()) {
            echo the_post_thumbnail('cw_icon_lg');
        } else {
            _e('No Thumbnail For Post', 'codeweber');
        }
        echo "<style> .column-riv_post_thumbs img{ max-height: 100px; max-width: 100px;} </style>";
    }
}
