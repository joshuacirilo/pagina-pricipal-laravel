<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('index', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//routes index

Route::get('/', function () {
 return view('JOSHUA.index-3');
})->name('index-3');


//----------------routas para grupo 75---------------------------


//trabajo social
Route::get('/grupo75/trabajo-social', function () {
    return view('grupo75.trabajo-social');
})->name('trabajo-social');

//---sistemas-redes-sociales
Route::get('/grupo75/sistemas-redes-sociales', function () {
    return view('grupo75.sistemas-redes-sociales');
})->name('sistemas-redes-sociales');


//---sistemas-auditoria
Route::get('/grupo75/auditoria', function () {
    return view('grupo75.auditoria');
})->name('auditoria');


//-------maestros auditoria-----


//instructor 1
Route::get('/grupo75/detalles-instructor-auditoria1', function () {
    return view('grupo75.detalles-instructor-auditoria1');
})->name('detalles-instructor-auditoria1');

//instructor 2
Route::get('/grupo75/detalles-instructor-auditoria2', function () {
    return view('grupo75.detalles-instructor-auditoria2');
})->name('detalles-instructor-auditoria2');


//instructor 3
Route::get('/grupo75/detalles-instructor-auditoria3', function () {
    return view('grupo75.detalles-instructor-auditoria3');
})->name('detalles-instructor-auditoria3');







//----------------------routes para grupo 74-------------------------

//administracion

Route::get('/grupo74/administracion', function () {
    return view('grupo74.administracion');
})->name('administracion');

//criminologia
Route::get('/grupo74/criminologia', function () {
    return view('grupo74.criminologia');
})->name('criminologia');

//derecho
Route::get('/grupo74/derecho', function () {
    return view('grupo74.derecho');
})->name('derecho');


//maestro 1
Route::get('/grupo74/detalles-instructor', function () {
    return view('grupo74.detalles-instructor');
})->name('detalles-instructor');



//-------maestros administracion-----


//instructor 1
Route::get('/grupo74/detalles-instructor-administracion1', function () {
    return view('grupo74.detalles-instructor-administracion1');
})->name('detalles-instructor-administracion1');

//instructor 2
Route::get('/grupo74/detalles-instructor-administracion2', function () {
    return view('grupo74.detalles-instructor-administracion2');
})->name('detalles-instructor-administracion2');



//instructor 3
Route::get('/grupo74/detalles-instructor-administracion3', function () {
    return view('grupo74.detalles-instructor-administracion3');
})->name('detalles-instructor-administracion3');






//--------routes para grupo 73 pruebas de conexion


//pagina de sistemas prueba


Route::get('/grupo73/sistemas', function () {
    return view('grupo73.sistemas');
})->name('sistemas');



//instructor 1 prueba
Route::get('/grupo73/detalles-instructor1', function () {
    return view('grupo73.detalles-instructor1');
})->name('detalles-instructor1');


//instructor 2 prueba
Route::get('/grupo73/detalles-instructor2', function () {
    return view('grupo73.detalles-instructor2');
})->name('detalles-instructor2');


//instructor 3 prueba
Route::get('/grupo73/detalles-instructor3', function () {
    return view('grupo73.detalles-instructor3');
})->name('detalles-instructor3');





Route::get('/index-2', function () {
return view('index-2');
})->name('index-2');

Route::get('/index-3', function () {
    return view('JOSHUA.index-3');
})->name('index-3');


Route::get('/index-4', function () {
return view('index-4');
})->name('index-4');

Route::get('/index-5', function () {
return view('index-5');
})->name('index-5');

Route::get('/index-6', function () {
return view('index-6');
})->name('index-6');

Route::get('/index-rtl', function () {
return view('index-rtl');
})->name('index-rtl');

//borrar esta
Route::get('/add-course', function () {
return view('add-course');
})->name('add-course');

Route::get('/blog-details', function () {
return view('blog-details');
})->name('blog-details');

//borrar esto
Route::get('/blog-grid', function () {
return view('blog-grid');
})->name('blog-grid');

Route::get('/blog-list', function () {
return view('blog-list');
})->name('blog-list');

Route::get('/blog-masonry', function () {
return view('blog-masonry');
})->name('blog-masonry');

Route::get('/blog-modern', function () {
return view('blog-modern');
})->name('blog-modern');

Route::get('/cart', function () {
return view('cart');
})->name('cart');

Route::get('/checkout', function () {
return view('checkout');
})->name('checkout');

Route::get('/coming-soon', function () {
return view('coming-soon');
})->name('coming-soon');

Route::get('/course-details', function () {
return view('course-details');
})->name('course-details');

Route::get('/course-grid', function () {
return view('course-grid');
})->name('course-grid');

Route::get('/course-lesson', function () {
return view('course-lesson');
})->name('course-lesson');

Route::get('/course-list', function () {
return view('course-list');
})->name('course-list');

Route::get('/error-404', function () {
return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
return view('error-500');
})->name('error-500');

Route::get('/faq', function () {
return view('faq');
})->name('faq');

Route::get('/forgot-password', function () {
return view('forgot-password');
})->name('forgot-password');

Route::get('/help-center', function () {
return view('help-center');
})->name('help-center');

Route::get('/index', function () {
return view('index');
})->name('index');

Route::get('/instructor-chat', function () {
return view('instructor-chat');
})->name('instructor-chat');

Route::get('/instructor-course', function () {
return view('instructor-course');
})->name('instructor-course');

Route::get('/instructor-dashboard', function () {
return view('instructor-dashboard');
})->name('instructor-dashboard');

Route::get('/instructor-earnings', function () {
return view('instructor-earnings');
})->name('instructor-earnings');

Route::get('/instructor-edit', function () {
return view('instructor-edit');
})->name('instructor-edit');

Route::get('/instructor-grid', function () {
return view('instructor-grid');
})->name('instructor-grid');

Route::get('/instructor-list', function () {
return view('instructor-list');
})->name('instructor-list');

Route::get('/instructor-notifications', function () {
return view('instructor-notifications');
})->name('instructor-notifications');

Route::get('/instructor-orders', function () {
return view('instructor-orders');
})->name('instructor-orders');

Route::get('/instructor-profile', function () {
return view('instructor-profile');
})->name('instructor-profile');

Route::get('/instructor-reviews', function () {
return view('instructor-reviews');
})->name('instructor-reviews');

Route::get('/instructor-security', function () {
return view('instructor-security');
})->name('instructor-security');

Route::get('/instructor-tickets', function () {
return view('instructor-tickets');
})->name('instructor-tickets');

Route::get('/job-category', function () {
return view('job-category');
})->name('job-category');

Route::get('/login', function () {
return view('login');
})->name('login');

Route::get('/new-password', function () {
return view('new-password');
})->name('new-password');

Route::get('/notifications', function () {
return view('notifications');
})->name('notifications');

Route::get('/pricing-plan', function () {
return view('pricing-plan');
})->name('pricing-plan');

Route::get('/privacy-policy', function () {
return view('privacy-policy');
})->name('privacy-policy');

Route::get('/register-step-five', function () {
return view('register-step-five');
})->name('register-step-five');

Route::get('/register-step-four', function () {
return view('register-step-four');
})->name('register-step-four');

Route::get('/register-step-one', function () {
return view('register-step-one');
})->name('register-step-one');

Route::get('/register-step-three', function () {
return view('register-step-three');
})->name('register-step-three');

Route::get('/register-step-two', function () {
return view('register-step-two');
})->name('register-step-two');

Route::get('/register', function () {
return view('register');
})->name('register');

Route::get('/setting-student-subscription', function () {
return view('setting-student-subscription');
})->name('setting-student-subscription');

Route::get('/student-profile', function () {
return view('student-profile');
})->name('student-profile');

Route::get('/students-grid', function () {
return view('students-grid');
})->name('students-grid');

Route::get('/students-list', function () {
return view('students-list');
})->name('students-list');

Route::get('/support', function () {
return view('support');
})->name('support');

Route::get('/term-condition', function () {
return view('term-condition');
})->name('term-condition');

Route::get('/under-construction', function () {
return view('under-construction');
})->name('under-construction');

Route::get('/verification-code', function () {
return view('verification-code');
})->name('verification-code');

Route::get('/view-invoice', function () {
return view('view-invoice');
})->name('view-invoice');

Route::get('/wishlist', function () {
return view('wishlist');
})->name('wishlist');

Route::get('/student-dashboard', function () {
return view('student-dashboard');
})->name('student-dashboard');

Route::get('/student-courses', function () {
return view('student-courses');
})->name('student-courses');

Route::get('/student-wishlist', function () {
return view('student-wishlist');
})->name('student-wishlist');

Route::get('/student-reviews', function () {
return view('student-reviews');
})->name('student-reviews');

Route::get('/student-quiz', function () {
return view('student-quiz');
})->name('student-quiz');

Route::get('/student-order-history', function () {
return view('student-order-history');
})->name('student-order-history');

Route::get('/student-qa', function () {
return view('student-qa');
})->name('student-qa');

Route::get('/student-referral', function () {
return view('student-referral');
})->name('student-referral');

Route::get('/student-messages', function () {
return view('student-messages');
})->name('student-messages');

Route::get('/student-tickets', function () {
return view('student-tickets');
})->name('student-tickets');

Route::get('/student-settings', function () {
return view('student-settings');
})->name('student-settings');

Route::get('/student-change-password', function () {
return view('student-change-password');
})->name('student-change-password');

Route::get('/student-social-profile', function () {
return view('student-social-profile');
})->name('student-social-profile');

Route::get('/student-linked-accounts', function () {
return view('student-linked-accounts');
})->name('student-linked-accounts');

Route::get('/student-notifications', function () {
return view('student-notifications');
})->name('student-notifications');

Route::get('/student-quiz-details', function () {
return view('student-quiz-details');
})->name('student-quiz-details');

Route::get('/instructor-enrolled-course', function () {
return view('instructor-enrolled-course');
})->name('instructor-enrolled-course');

Route::get('/instructor-announcements', function () {
return view('instructor-announcements');
})->name('instructor-announcements');

Route::get('/instructor-assignment', function () {
return view('instructor-assignment');
})->name('instructor-assignment');

Route::get('/instructor-change-password', function () {
return view('instructor-change-password');
})->name('instructor-change-password');

Route::get('/instructor-delete-account', function () {
return view('instructor-delete-account');
})->name('instructor-delete-account');

Route::get('/instructor-qa', function () {
return view('instructor-qa');
})->name('instructor-qa');

Route::get('/instructor-quiz-attempts-details', function () {
return view('instructor-quiz-attempts-details');
})->name('instructor-quiz-attempts-details');

Route::get('/instructor-quiz-attempts', function () {
return view('instructor-quiz-attempts');
})->name('instructor-quiz-attempts');

Route::get('/instructor-quiz-details', function () {
return view('instructor-quiz-details');
})->name('instructor-quiz-details');

Route::get('/instructor-quiz', function () {
return view('instructor-quiz');
})->name('instructor-quiz');

Route::get('/instructor-referral', function () {
return view('instructor-referral');
})->name('instructor-referral');

Route::get('/instructor-withdraw', function () {
return view('instructor-withdraw');
})->name('instructor-withdraw');

Route::get('/instructor-wishlist', function () {
return view('instructor-wishlist');
})->name('instructor-wishlist');

Route::get('/instructor-settings', function () {
return view('instructor-settings');
})->name('instructor-settings');

Route::get('/instructor-setting-withdraw', function () {
return view('instructor-setting-withdraw');
})->name('instructor-setting-withdraw');

Route::get('/instructor-setting-notifications', function () {
return view('instructor-setting-notifications');
})->name('instructor-setting-notifications');


Route::get('/blog-details-left-sidebar', function () {
return view('blog-details-left-sidebar');
})->name('blog-details-left-sidebar');

Route::get('/blog-details-right-sidebar', function () {
return view('blog-details-right-sidebar');
})->name('blog-details-right-sidebar');


//borrar esto
Route::get('/blog-left-sidebar', function () {
return view('blog-left-sidebar');
})->name('blog-left-sidebar');

Route::get('/blog-right-sidebar', function () {
return view('blog-right-sidebar');
})->name('blog-right-sidebar');

Route::get('/contact-us', function () {
return view('contact-us');
})->name('contact-us');

Route::get('/course-resume', function () {
return view('course-resume');
})->name('course-resume');

//borrar esto
Route::get('/blog-2-grid', function () {
return view('blog-2-grid');
 })->name('blog-2-grid');

Route::get('/blog-3-grid', function () {
 return view('blog-3-grid');
 })->name('blog-3-grid');


//borrar esto
Route::get('/blog-carousal', function () {
return view('blog-carousal');
})->name('blog-carousal');

Route::get('/course-watch', function () {
return view('course-watch');
})->name('course-watch');

Route::get('/instructor-payout', function () {
return view('instructor-payout');
})->name('instructor-payout');

Route::get('/instructor-social-profiles', function () {
return view('instructor-social-profiles');
})->name('instructor-social-profiles');

Route::get('/instructor-plans', function () {
return view('instructor-plans');
})->name('instructor-plans');

Route::get('/instructor-quiz-questions', function () {
return view('instructor-quiz-questions');
})->name('instructor-quiz-questions');

Route::get('/instructor-quiz-results', function () {
return view('instructor-quiz-results');
})->name('instructor-quiz-results');

Route::get('/course-category-2', function () {
return view('course-category-2');
})->name('course-category-2');

Route::get('/course-category-3', function () {
return view('course-category-3');
})->name('course-category-3');

Route::get('/course-category', function () {
return view('course-category');
})->name('course-category');

Route::get('/course-details-2', function () {
return view('course-details-2');
})->name('course-details-2');

Route::get('/instructor-certificate', function () {
return view('instructor-certificate');
})->name('instructor-certificate');

Route::get('/instructor-course-grid', function () {
return view('instructor-course-grid');
})->name('instructor-course-grid');

Route::get('/instructor-details', function () {
return view('instructor-details');
})->name('instructor-details');

Route::get('/instructor-integrations', function () {
return view('instructor-integrations');
})->name('instructor-integrations');

Route::get('/instructor-linked-accounts', function () {
return view('instructor-linked-accounts');
})->name('instructor-linked-accounts');

Route::get('/instructor-message', function () {
return view('instructor-message');
})->name('instructor-message');

Route::get('/lock-screen', function () {
return view('lock-screen');
})->name('lock-screen');

Route::get('/otp', function () {
return view('otp');
})->name('otp');

Route::get('/reset-password', function () {
return view('reset-password');
})->name('reset-password');

Route::get('/set-password', function () {
return view('set-password');
})->name('set-password');

Route::get('/student-details', function () {
return view('student-details');
})->name('student-details');

Route::get('/student-list', function () {
return view('student-list');
})->name('student-list');

Route::get('/student-quiz-questions', function () {
return view('student-quiz-questions');
})->name('student-quiz-questions');

Route::get('/students', function () {
return view('students');
})->name('students');

Route::get('/terms-and-conditions', function () {
return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/testimonials', function () {
return view('testimonials');
})->name('testimonials');


//borrar esto
Route::get('/become-an-instructor', function () {
return view('become-an-instructor');
})->name('become-an-instructor');

Route::get('/instructor-statements', function () {
return view('instructor-statements');
})->name('instructor-statements');

Route::get('/student-billing-address', function () {
return view('student-billing-address');
})->name('student-billing-address');

Route::get('/student-certificates', function () {
return view('student-certificates');
})->name('student-certificates');

Route::get('/about-us', function () {
    return view('about-us');
    })->name('about-us');
    Route::get('/become-an-instructor', function () {
        return view('become-an-instructor');
        })->name('become-an-instructor');
        Route::get('/instructor-statements', function () {
            return view('instructor-statements');
            })->name('instructor-statements');

