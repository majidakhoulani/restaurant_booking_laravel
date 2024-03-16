<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChefController;
use App\Http\Controllers\Backend\BlogCategoryControler;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\SettingController;
// use App\Http\Controllers\Backend\CommentControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('frontend.master');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//************Frontend Routes**************//
Route::get('/', [UserController::class, 'HomePage'])->name('home');
Route::post('/user-reservate', [UserController::class, 'StoreReservation'])->name('user.reserve');
Route::get('/all/blog', [UserController::class, 'AllBlog'])->name('all.blog');
Route::get('/blog/details/{id}',[UserController::class, 'BlogDetails'])->name('blog.details');
Route::post('/user/add/comment',[UserController::class, 'AddComment'])->name('user.add.comment');

//************Backend Routes***************//
Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

//Category Routes
Route::get('/admin/all/category', [CategoryController::class, 'AllCategory'])->name('admin.all.category');
Route::get('/admin/add/category', [CategoryController::class, 'AddCategory'])->name('admin.add.category');
Route::post('/admin/store/category', [CategoryController::class, 'StoreCategory'])->name('admin.store.category');
Route::get('/admin/edit/category/{id}', [CategoryController::class, 'EditCategory'])->name('admin.edit.category');
Route::post('/admin/update/category', [CategoryController::class, 'UpdateCategory'])->name('admin.update.category');
Route::get('/admin/delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('admin.delete.category');

//Food Routes
Route::get('/admin/all/food', [CategoryController::class, 'AllFood'])->name('admin.all.food');
Route::get('/admin/add/food', [CategoryController::class, 'AddFood'])->name('admin.add.food');
Route::post('/admin/store/food', [CategoryController::class, 'StoreFood'])->name('admin.store.food');
Route::get('/admin/edit/food/{id}', [CategoryController::class, 'EditFood'])->name('admin.edit.food');
Route::post('/admin/update/food', [CategoryController::class, 'UpdateFood'])->name('admin.update.food');
Route::get('/admin/delete/food/{id}', [CategoryController::class, 'DeleteFood'])->name('admin.delete.food');

//Chef Routes
Route::get('/admin/all/chef', [ChefController::class, 'AllChef'])->name('admin.all.chef');
Route::get('/admin/add/chef', [ChefController::class, 'AddChef'])->name('admin.add.chef');
Route::post('/admin/store/chef', [ChefController::class, 'StoreChef'])->name('admin.store.chef');
Route::get('/admin/edit/chef/{id}', [ChefController::class, 'EditChef'])->name('admin.edit.chef');
Route::post('/admin/update/chef', [ChefController::class, 'UpdateChef'])->name('admin.update.chef');
Route::get('/admin/delete/chef/{id}', [ChefController::class, 'DeleteChef'])->name('admin.delete.chef');

//BlogCategory Routes
Route::get('/admin/all/blog', [BlogCategoryControler::class, 'AllBlog'])->name('admin.all.blog');
Route::get('/admin/add/blog', [BlogCategoryControler::class, 'AddBlog'])->name('admin.add.blog');
Route::post('/admin/store/blog', [BlogCategoryControler::class, 'StoreBlog'])->name('admin.store.blog');
Route::get('/admin/edit/blog/{id}', [BlogCategoryControler::class, 'EditBlog'])->name('admin.edit.blog');
Route::post('/admin/update/blog', [BlogCategoryControler::class, 'UpdateBlog'])->name('admin.update.blog');
Route::get('/admin/delete/blog/{id}', [BlogCategoryControler::class, 'DeleteBlog'])->name('admin.delete.blog');
//Post Routes
Route::get('/admin/all/post', [BlogCategoryControler::class, 'AllPost'])->name('admin.all.post');
Route::get('/admin/add/post', [BlogCategoryControler::class, 'AddPost'])->name('admin.add.post');
Route::post('/admin/store/post', [BlogCategoryControler::class, 'StorePost'])->name('admin.store.post');
Route::get('/admin/edit/post/{id}', [BlogCategoryControler::class, 'EditPost'])->name('admin.edit.post');
Route::post('/admin/update/post', [BlogCategoryControler::class, 'UpdatePost'])->name('admin.update.post');
Route::get('/admin/delete/post/{id}', [BlogCategoryControler::class, 'DeletePost'])->name('admin.delete.post');
//Comments Routes
Route::get('/admin/all/comment', [BlogCategoryControler::class, 'AllComment'])->name('admin.all.comment');
Route::get('/admin/add/comment', [BlogCategoryControler::class, 'AddComment'])->name('admin.add.comment');
Route::post('/admin/store/comment', [BlogCategoryControler::class, 'StoreComment'])->name('admin.store.comment');
Route::get('/admin/edit/comment/{id}', [BlogCategoryControler::class, 'EditComment'])->name('admin.edit.comment');
Route::post('/admin/update/comment', [BlogCategoryControler::class, 'UpdateComment'])->name('admin.update.comment');
Route::get('/admin/delete/comment/{id}', [BlogCategoryControler::class, 'DeleteComment'])->name('admin.delete.comment');
//Testimolials Routes
Route::get('/admin/all/testimonial', [TestimonialController::class, 'AllTestimonial'])->name('admin.all.testimonial');
Route::get('/admin/add/testimonial', [TestimonialController::class, 'AddTestimonial'])->name('admin.add.testimonial');
Route::post('/admin/store/testimonial', [TestimonialController::class, 'StoreTestimonial'])->name('admin.store.testimonial');
Route::get('/admin/edit/testimonial/{id}', [TestimonialController::class, 'EditTestimonial'])->name('admin.edit.testimonial');
Route::post('/admin/update/testimonial', [TestimonialController::class, 'UpdateTestimonial'])->name('admin.update.testimonial');
Route::get('/admin/delete/testimonial/{id}', [TestimonialController::class, 'DeleteTestimonial'])->name('admin.delete.testimonial');
//Setting Routes
Route::get('/admin/all/setting', [SettingController::class, 'AllSetting'])->name('admin.all.setting');
Route::get('/admin/add/setting', [SettingController::class, 'AddSetting'])->name('admin.add.setting');
Route::post('/admin/store/setting', [SettingController::class, 'StoreSetting'])->name('admin.store.setting');
Route::get('/admin/edit/setting/{id}', [SettingController::class, 'EditSetting'])->name('admin.edit.setting');
Route::post('/admin/update/setting', [SettingController::class, 'UpdateSetting'])->name('admin.update.setting');
Route::get('/admin/delete/setting/{id}', [SettingController::class, 'DeleteSetting'])->name('admin.delete.setting');




require __DIR__.'/auth.php';

