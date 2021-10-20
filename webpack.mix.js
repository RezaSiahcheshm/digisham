const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.options({
//     processCssUrls: false
// });
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/home/bootstrap-number-input.js', 'public/js')
    .css('resources/sass/home/bootstrap-rtl.css', 'public/css')
    .css('resources/sass/home/style.css', 'public/css')
    .css('resources/fonts/diroz-font.css', 'public/fonts')

    /*
        ========================
                Assets
        ========================
    */
    .sass('resources/sass/admin/assets/structure.scss', 'public/css/admin')
    .sass('resources/sass/admin/assets/loader.scss', 'public/css/admin')
    .sass('resources/sass/admin/assets/main.scss', 'public/css/admin')
    .sass('resources/sass/admin/assets/scrollspyNav.scss', 'public/css/admin/')

    // Dashboard
    .css('resources/sass/admin/assets/dashboard/dash_1.css', 'public/css/admin/dashboard')
    .css('resources/sass/admin/assets/dashboard/dash_2.css', 'public/css/admin/dashboard')

    // Apps
    .sass('resources/sass/admin/assets/apps/contacts.scss', 'public/css/admin/apps')
    .sass('resources/sass/admin/assets/apps/invoice.scss', 'public/css/admin/apps')
    // .sass('resources/sass/admin/assets/apps/mailbox.scss', 'public/css/admin/apps')
    .sass('resources/sass/admin/assets/apps/mailing-chat.scss', 'public/css/admin/apps')
    .sass('resources/sass/admin/assets/apps/notes.scss', 'public/css/admin/apps')
    .sass('resources/sass/admin/assets/apps/scrumboard.scss', 'public/css/admin/apps')
    .sass('resources/sass/admin/assets/apps/todolist.scss', 'public/css/admin/apps')

    // Authentication
    .sass('resources/sass/admin/assets/authentication/form-1.scss', 'public/css/admin/authentication')
    .sass('resources/sass/admin/assets/authentication/form-2.scss', 'public/css/admin/authentication')

    // Components
    .sass('resources/sass/admin/assets/components/custom-carousel.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/custom-countdown.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/custom-counter.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/custom-list-group.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/custom-media_object.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/custom-modal.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/custom-sweetalert.scss', 'public/css/admin/components')
    .sass('resources/sass/admin/assets/components/cards/card.scss', 'public/css/admin/components/cards')
    .sass('resources/sass/admin/assets/components/tabs-accordian/custom-accordions.scss', 'public/css/admin/components/tabs-accordian')
    .sass('resources/sass/admin/assets/components/tabs-accordian/custom-tabs.scss', 'public/css/admin/components/tabs-accordian')
    .sass('resources/sass/admin/assets/components/timeline/custom-timeline.scss', 'public/css/admin/components/timeline')

    // Element
    .sass('resources/sass/admin/assets/elements/alert.scss', 'public/css/admin/elements/')
    // .sass('resources/sass/admin/assets/elements/avatar.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/breadcrumb.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/custom-pagination.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/custom-tree_view.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/infobox.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/miscellaneous.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/popover.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/search.scss', 'public/css/admin/elements/')
    .sass('resources/sass/admin/assets/elements/tooltip.scss', 'public/css/admin/elements/')

    // Forms
    .sass('resources/sass/admin/assets/forms/bootstrap-form.scss', 'public/css/admin/forms/')
    .sass('resources/sass/admin/assets/forms/custom-clipboard.scss', 'public/css/admin/forms/')
    .sass('resources/sass/admin/assets/forms/switches.scss', 'public/css/admin/forms/')
    .sass('resources/sass/admin/assets/forms/theme-checkbox-radio.scss', 'public/css/admin/forms/')

    // Pages
    .sass('resources/sass/admin/assets/pages/coming-soon/style.scss', 'public/css/admin/pages/coming-soon/')
    .sass('resources/sass/admin/assets/pages/error/style-400.scss', 'public/css/admin/pages/error/')
    .sass('resources/sass/admin/assets/pages/error/style-500.scss', 'public/css/admin/pages/error/')
    .sass('resources/sass/admin/assets/pages/error/style-503.scss', 'public/css/admin/pages/error/')
    .sass('resources/sass/admin/assets/pages/error/style-maintanence.scss', 'public/css/admin/pages/error/')
    .sass('resources/sass/admin/assets/pages/faq/faq.scss', 'public/css/admin/pages/faq/')
    .sass('resources/sass/admin/assets/pages/faq/faq2.scss', 'public/css/admin/pages/faq/')
    .sass('resources/sass/admin/assets/pages/privacy/privacy.scss', 'public/css/admin/pages/privacy/')
    .sass('resources/sass/admin/assets/pages/contact_us.scss', 'public/css/admin/pages/')
    .sass('resources/sass/admin/assets/pages/helpdesk.scss', 'public/css/admin/pages/')

    // Tables
    .sass('resources/sass/admin/assets/tables/table-basic.scss', 'public/css/admin/tables/')
    .css('resources/sass/admin/assets/tables/custom-table.css', 'public/css/admin/tables/')

    // Users
    .sass('resources/sass/admin/assets/users/account-setting.scss', 'public/css/admin/users/')
    .sass('resources/sass/admin/assets/users/user-profile.scss', 'public/css/admin/users/')

    // Widgets
    .sass('resources/sass/admin/assets/widgets/modules-widgets.scss', 'public/css/admin/widgets/')

    /*
        ========================
                Plugins
        ========================
    */

    // Animate
    .sass('resources/sass/admin/plugins/animate/animate.scss', 'public/plugins/animate/')

    // Autocomplete
    .sass('resources/sass/admin/plugins/autocomplete/autocomplete.scss', 'public/plugins/autocomplete/')

    // Bootstrap Range Slider
    .sass('resources/sass/admin/plugins/bootstrap-range-Slider/bootstrap-slider.scss', 'public/plugins/bootstrap-range-Slider/')

    // Bootstrap Select
    .sass('resources/sass/admin/plugins/bootstrap-select/bootstrap-select.min.scss', 'public/plugins/bootstrap-select/')

    // Bootstrap Touchspin
    .sass('resources/sass/admin/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.scss', 'public/plugins/bootstrap-touchspin/')

    // Drag and Drop
    .sass('resources/sass/admin/plugins/drag-and-drop/dragula/dragula.scss', 'public/plugins/drag-and-drop/dragula/')
    .sass('resources/sass/admin/plugins/drag-and-drop/dragula/example.scss', 'public/plugins/drag-and-drop/dragula/')

    // Dropify
    .sass('resources/sass/admin/plugins/dropify/dropify.min.scss', 'public/plugins/dropify/')

    // Editors
    .sass('resources/sass/admin/plugins/editors/markdown/simplemde.min.scss', 'public/plugins/editors/markdown/')
    .sass('resources/sass/admin/plugins/editors/quill/quill.bubble.scss', 'public/plugins/editors/quill/')
    .sass('resources/sass/admin/plugins/editors/quill/quill.snow.scss', 'public/plugins/editors/quill/')

    // File Upload
    .sass('resources/sass/admin/plugins/file-upload/file-upload-with-preview.min.scss', 'public/plugins/file-upload/')

    // Flatpickr
    .sass('resources/sass/admin/plugins/flatpickr/custom-flatpickr.scss', 'public/plugins/flatpickr/')

    // Fullcalendar
    .sass('resources/sass/admin/plugins/fullcalendar/custom-fullcalendar.advance.scss', 'public/plugins/fullcalendar/')
    .sass('resources/sass/admin/plugins/fullcalendar/fullcalendar.min.scss', 'public/plugins/fullcalendar/')
    .sass('resources/sass/admin/plugins/fullcalendar/fullcalendar.scss', 'public/plugins/fullcalendar/')

    // Jquery Step
    .sass('resources/sass/admin/plugins/jquery-step/jquery.steps.scss', 'public/plugins/jquery-step/')

    // jVector
    .sass('resources/sass/admin/plugins/jvector/jquery-jvectormap-2.0.3.scss', 'public/plugins/jvector/')

    // lightbox
    .sass('resources/sass/admin/plugins/lightbox/custom-photswipe.scss', 'public/plugins/lightbox/')
    .sass('resources/sass/admin/plugins/lightbox/photoswipe.scss', 'public/plugins/lightbox/')

    // Loaders
    .sass('resources/sass/admin/plugins/loaders/custom-loader.scss', 'public/plugins/loaders/')

    // noUiSlider
    .sass('resources/sass/admin/plugins/noUiSlider/custom-nouiSlider.scss', 'public/plugins/noUiSlider/')

    // Perfect Scrollbar
    .sass('resources/sass/admin/plugins/perfect-scrollbar/perfect-scrollbar.scss', 'public/plugins/perfect-scrollbar/')

    // Pricing Table
    .sass('resources/sass/admin/plugins/pricing-table/css/component.scss', 'public/plugins/pricing-table/')

    // Select2
    .sass('resources/sass/admin/plugins/select2/select2.min.scss', 'public/plugins/select2/')

    // SweetAlerts
    .sass('resources/sass/admin/plugins/sweetalerts/sweetalert.scss', 'public/plugins/sweetalerts/')
    .sass('resources/sass/admin/plugins/sweetalerts/sweetalert2.min.scss', 'public/plugins/sweetalerts/')

    // DataTable
    .sass('resources/sass/admin/plugins/table/datatable/custom_dt_custom.scss', 'public/plugins/table/datatable/')
    .sass('resources/sass/admin/plugins/table/datatable/custom_dt_html5.scss', 'public/plugins/table/datatable/')
    .sass('resources/sass/admin/plugins/table/datatable/custom_dt_miscellaneous.scss', 'public/plugins/table/datatable/')
    .sass('resources/sass/admin/plugins/table/datatable/custom_dt_multiple_tables.scss', 'public/plugins/table/datatable/')
    .sass('resources/sass/admin/plugins/table/datatable/datatables.scss', 'public/plugins/table/datatable/')
    // .sass('resources/sass/admin/plugins/table/datatable/datatables-light.scss', 'public/plugins/table/datatable/')
    .sass('resources/sass/admin/plugins/table/datatable/dt-global_style.scss', 'public/plugins/table/datatable/')
    // .sass('resources/sass/admin/plugins/table/datatable/dt-global_style-light.scss', 'public/plugins/table/datatable/')

    // Tag Input
    .sass('resources/sass/admin/plugins/tagInput/tags-input.scss', 'public/plugins/tagInput/');
