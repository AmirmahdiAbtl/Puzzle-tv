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

mix.js('resources/js/app.js', 'public/js')

    .js('resources/plugins/global/plugins.bundle.js', 'public/plugins/global/')
    .js('resources/plugins/custom/prismjs/prismjs.bundle.js', 'public/plugins/custom/prismjs/')
    .js('resources/js/scripts.bundle.js', 'public/js/')
    .js('resources/plugins/custom/fullcalendar/fullcalendar.bundle.js', 'public/plugins/custom/fullcalendar/')
    .js('resources/plugins/custom/datatables/datatables.bundle.js', 'public/plugins/custom/datatables/')

    .js('resources/plugins/custom/tinymce/tinymce.bundle.js', 'public/plugins/custom/tinymce/')
    .js('resources/plugins/custom/tinymce/plugins/table/plugin.js', 'public/plugins/custom/tinymce/plugins/table/')
    .js('resources/plugins/custom/tinymce/plugins/code/plugin.js', 'public/plugins/custom/tinymce/plugins/code/')
    .js('resources/plugins/custom/tinymce/plugins/print/plugin.js', 'public/plugins/custom/tinymce/plugins/print/')
    .js('resources/plugins/custom/tinymce/plugins/preview/plugin.js', 'public/plugins/custom/tinymce/plugins/preview/')
    .js('resources/plugins/custom/tinymce/plugins/paste/plugin.js', 'public/plugins/custom/tinymce/plugins/paste/')
    .js('resources/plugins/custom/tinymce/plugins/importcss/plugin.js', 'public/plugins/custom/tinymce/plugins/importcss/')
    .js('resources/plugins/custom/tinymce/plugins/searchreplace/plugin.js', 'public/plugins/custom/tinymce/plugins/searchreplace/')
    .js('resources/plugins/custom/tinymce/plugins/autosave/plugin.js', 'public/plugins/custom/tinymce/plugins/autosave/')
    .js('resources/plugins/custom/tinymce/plugins/save/plugin.js', 'public/plugins/custom/tinymce/plugins/save/')
    .js('resources/plugins/custom/tinymce/plugins/directionality/plugin.js', 'public/plugins/custom/tinymce/plugins/directionality/')
    .js('resources/plugins/custom/tinymce/plugins/visualblocks/plugin.js', 'public/plugins/custom/tinymce/plugins/visualblocks/')
    .js('resources/plugins/custom/tinymce/plugins/fullscreen/plugin.js', 'public/plugins/custom/tinymce/plugins/fullscreen/')
    .js('resources/plugins/custom/tinymce/plugins/visualchars/plugin.js', 'public/plugins/custom/tinymce/plugins/visualchars/')
    .js('resources/plugins/custom/tinymce/plugins/image/plugin.js', 'public/plugins/custom/tinymce/plugins/image/')
    .js('resources/plugins/custom/tinymce/plugins/link/plugin.js', 'public/plugins/custom/tinymce/plugins/link/')
    .js('resources/plugins/custom/tinymce/plugins/template/plugin.js', 'public/plugins/custom/tinymce/plugins/template/')
    .js('resources/plugins/custom/tinymce/plugins/codesample/plugin.js', 'public/plugins/custom/tinymce/plugins/codesample/')
    .js('resources/plugins/custom/tinymce/plugins/charmap/plugin.js', 'public/plugins/custom/tinymce/plugins/charmap/')
    .js('resources/plugins/custom/tinymce/plugins/hr/plugin.js', 'public/plugins/custom/tinymce/plugins/hr/')
    .js('resources/plugins/custom/tinymce/plugins/anchor/plugin.js', 'public/plugins/custom/tinymce/plugins/anchor/')
    .js('resources/plugins/custom/tinymce/plugins/nonbreaking/plugin.js', 'public/plugins/custom/tinymce/plugins/nonbreaking/')
    .js('resources/plugins/custom/tinymce/plugins/pagebreak/plugin.js', 'public/plugins/custom/tinymce/plugins/pagebreak/')
    .js('resources/plugins/custom/tinymce/plugins/toc/plugin.js', 'public/plugins/custom/tinymce/plugins/toc/')
    .js('resources/plugins/custom/tinymce/plugins/imagetools/plugin.js', 'public/plugins/custom/tinymce/plugins/imagetools/')
    .js('resources/plugins/custom/tinymce/plugins/wordcount/plugin.js', 'public/plugins/custom/tinymce/plugins/wordcount/')
    .js('resources/plugins/custom/tinymce/plugins/insertdatetime/plugin.js', 'public/plugins/custom/tinymce/plugins/insertdatetime/')
    .js('resources/plugins/custom/tinymce/plugins/advlist/plugin.js', 'public/plugins/custom/tinymce/plugins/advlist/')
    .js('resources/plugins/custom/tinymce/plugins/textpattern/plugin.js', 'public/plugins/custom/tinymce/plugins/textpattern/')
    .js('resources/plugins/custom/tinymce/plugins/noneditable/plugin.js', 'public/plugins/custom/tinymce/plugins/noneditable/')
    .js('resources/plugins/custom/tinymce/plugins/help/plugin.js', 'public/plugins/custom/tinymce/plugins/help/')
    .js('resources/plugins/custom/tinymce/plugins/emoticons/plugin.js', 'public/plugins/custom/tinymce/plugins/emoticons/')
    .js('resources/plugins/custom/tinymce/plugins/emoticons/js/emojis.js', 'public/plugins/custom/tinymce/plugins/emoticons/js/')
    .js('resources/plugins/custom/tinymce/plugins/quickbars/plugin.js', 'public/plugins/custom/tinymce/plugins/quickbars/')
    .js('resources/plugins/custom/tinymce/plugins/autolink/plugin.js', 'public/plugins/custom/tinymce/plugins/autolink/')
    .js('resources/plugins/custom/tinymce/plugins/media/plugin.js', 'public/plugins/custom/tinymce/plugins/media/')
    .js('resources/plugins/custom/tinymce/plugins/lists/plugin.js', 'public/plugins/custom/tinymce/plugins/lists/')
    

    /* Theme Pages Scripts */
    .js('resources/js/pages/widgets.js', 'public/js/pages')
    .js('resources/js/pages/custom/login/login-general.js', 'public/js/pages')
    .js('resources/js/ir-city-select.js', 'public/js/pages')
    .js('resources/js/pages/crud/forms/widgets/select2.js', 'public/js/pages')
    .js('resources/js/pages/custom/projects/add-project.js', 'public/js/pages')
    .js('resources/js/pages/crud/forms/widgets/form-repeater.js', 'public/js/pages')
    .js('resources/js/pages/crud/forms/editors/tinymce.js', 'public/js/pages')
    .js('resources/js/pages/crud/forms/widgets/clipboard.js', 'public/js/pages')

    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])

    /* Theme Plugins */
    .postCss('resources/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css', 'public/plugins/custom/fullcalendar/', [])
    .postCss('resources/plugins/custom/datatables/datatables.bundle.css', 'public/plugins/custom/datatables/', [])
    .postCss('resources/plugins/global/plugins.bundle.rtl.css', 'public/plugins/global/', [])
    .postCss('resources/plugins/custom/prismjs/prismjs.bundle.rtl.css', 'public/plugins/custom/prismjs/', [])
    .postCss('resources/css/style.bundle.rtl.css', 'public/css', [])

    /* Theme Pages Styles */
    .postCss('resources/css/pages/login/login-2.rtl.css', 'public/css/pages/', [])
    .postCss('resources/css/pages/wizard/wizard-1.rtl.css', 'public/css/pages/', [])
    .postCss('resources/plugins/custom/tinymce/skins/ui/oxide/skin.min.css', 'public/plugins/custom/tinymce/skins/ui/oxide/', [])
    .postCss('resources/plugins/custom/tinymce/skins/ui/oxide/content.min.css', 'public/plugins/custom/tinymce/skins/ui/oxide/', [])
    .postCss('resources/plugins/custom/tinymce/skins/content/default/content.css', 'public/plugins/custom/tinymce/skins/content/default/', [])


    /* Theme Files */
    .postCss('resources/css/themes/layout/header/base/light.rtl.css', 'public/css/header/base/', [])
    .postCss('resources/css/themes/layout/header/menu/light.rtl.css', 'public/css/header/menu/', [])
    .postCss('resources/css/themes/layout/brand/dark.rtl.css', 'public/css/brand/', [])
    .postCss('resources/css/themes/layout/aside/dark.rtl.css', 'public/css/aside/', []).version()
    ;