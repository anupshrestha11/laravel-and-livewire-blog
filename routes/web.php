<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// * Home Page route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [HomeController::class, 'slug'])->name('slug');

// * dashboard route only
Route::prefix("dashboard")->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('posts', PostController::class, ['as' => 'dashboard']);
});

// * upload ckeditor image
Route::post('/upload', function (Request $request) {

    if ($request->hasFile('upload')) {
        $orgName   = $request->file('upload')->getClientOriginalName();
        $fileName  = pathinfo($orgName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName  = $fileName . '_' . time() . '.' . $extension;

        $request->file('upload')->move(public_path('images'), $fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url             = asset('images/' . $fileName);
        $msg             = 'Image Uploaded Successfully';
        $response        = "
        <script>
        window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url', '$msg')
        </script>
        ";

        @header('Content-type: text/html; charset=utf-8');
        echo $response;
    }

})->name('upload');
