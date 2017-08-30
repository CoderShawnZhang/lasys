var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
//卧槽，我写 mix.copy的时间好浪费，还不如直接手动复制过去。
elixir(function(mix) {
    // jQuery
    mix.copy('node_modules/jquery/dist/jquery.min.js','resources/assets/backend/js/');//后台
    mix.copy('node_modules/jquery/dist/jquery.min.js','resources/assets/frontend/js/');//前台

    // Bootstrap 强悍的前段开发框架
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js','resources/assets/backend/js/');
    mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css','resources/assets/backend/css/');
    mix.copy('node_modules/bootstrap/dist/fonts/','public/assets/backend/fonts/');

    // AdminLTE  AdminLTE 是一个完全的响应式管理模板，基于Bootstrap3框架
    mix.copy('node_modules/admin-lte/diss/img/','public/assets/backend/images/');
    mix.copy('node_modules/admin-lte/dist/js/app.min.js','resources/assets/backend/js/adminlte.min.js');
    mix.copy('node_modules/admin-lte/dist/css/AdminLTE.min.css','resources/assets/backend/css/adminlte.min.css');
    mix.copy('node_modules/admin-lte/dist/css/skins/skin-black.min.css','resources/assets/backend/css/adminlte-skin.min.css');

    mix.copy('node_modules/admin-lte/plugins/*','public/assets/backend/plugins/');
    mix.copy('node_modules/admin-lte/plugins/select2/select2.min.css','resources/assets/backend/css/');
    mix.copy('node_modules/admin-lte/plugins/select2/select2.full.min.js','resources/assets/backend/js/');
    mix.copy('node_modules/admin-lte/plugins/daterangepicker/moment.min.js','resources/assets/backend/js/');
    mix.copy('node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js','resources/assets/backend/js/');
    mix.copy('node_modules/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css','resources/assets/backend/css/');

    // Font-Awesome  一套绝佳的图标字体库和CSS框架
    mix.copy('node_modules/font-awesome/css/font-awesome.min.css','resources/assets/backend/css/');
    mix.copy('node_modules/font-awesome/fonts/','public/build/assets/backend/fonts/');
    mix.copy('node_modules/font-awesome/fonts/','public/build/assets/frontend/fonts/');

    // Login Background Images
    mix.copy('resources/assets/images/background/','public/assets/backend/images/background/');

    // SweetAlter  炫酷的前段弹框框架
    mix.copy('node_modules/sweetalert/dist/sweetalert.css','resources/assets/backend/css');
    mix.copy('node_modules/sweetalert/dist/sweetalert.min.js','resources/assets/backend/js');

    // DropzoneJS  文件拖拽上传插件
    // mix.copy('node_modules/dropzone/dist/min/basic.min.css','public/assets/backend/plugins/dropzone/');
    // mix.copy('node_modules/dropzone/dist/min/dropzone.min.js','public/assets/backend/plugins/dropzone/');
    // mix.copy('node_modules/dropzone/dist/min/dropzone.min.js','public/assets/backend/plugins/dropzone/');
    // mix.copy('node_modules/dropzone/dist/min/dropzone-amd-module.min.js','public/assets/backend/plugins/dropzone/');

    // Home Page Assets
    // mix.copy('resources/assets/frontend/*','public/assets/frontend/');
    // mix.copy('resources/assets/frontend/fonts/*','public/build/assets/frontend/css/fonts/');
    // mix.copy('resources/assets/frontend/img/testimonials/Testimonials.jpg','public/build/assets/frontend/img/testimonials/');
    // mix.copy('resources/assets/frontend/plugins/Lightbox/dist/images/*','public/build/assets/frontend/images/');
    // mix.copy('node_modules/font-awesome/css/font-awesome.min.css','resources/assets/frontend/css/');
    //

    // 合并后台的CSS样式文件
    mix.styles([
            'select2.min.css',
            'daterangepicker-bs3.css',
            'bootstrap.min.css',
            'font-awesome.min.css',
            'adminlte.min.css',
            'adminlte-skin.min.css',
            'sweetalert.css',
            'common.css'
        ],
        'public/assets/backend/css/app.min.css',
        'resources/assets/backend/css'
    );

    // 生成版本和缓存清除
    mix.version([
        'assets/backend/js/app.min.js',
        'assets/backend/css/app.min.css',
        'assets/frontend/js/app.min.js',
        'assets/frontend/css/app.min.css'
    ]);
});
