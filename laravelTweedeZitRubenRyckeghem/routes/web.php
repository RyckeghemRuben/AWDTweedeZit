<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', function () {
    return view('other.about');
})->name('about');

Auth::routes();

Route::get('/app', 'HomeController@index')->name('loggedin');


//item route
Route::get('/item/{id}', function ($id) {

    if($id=='1'){

        $data= [
            'titel' => 'Boardgames voor jong en oud',
            'staat' => 'Gebruikt'
        ];

    }elseif ($id=='2'){
        $data= [
            'titel' => 'Gitaar van Gibson in goede staat',
            'staat' => 'Gebruikt'
        ];
    }elseif ($id=='3'){
        $data= [
            'titel' => 'Rode voetbal van Nike',
            'staat' => 'Nieuw'
        ];
    }


    return view('content.item',['nieuweVar'=>$data]);
})->name('item');

//item create
Route::post('/itemcreate',function (\Illuminate\Http\Request $request,
                                    Illuminate\Validation\Factory $validator){
   $validation = $validator->make($request->all(),[
        'title' => 'required|max:20',
        'content' => 'required|min:10'
    ]);

   if($validation->fails()){

       return redirect()->back()->withErrors($validation);

   }else{

       $title = $request->input('title');
       return redirect('adminindex')->with('forminput', $title);
   }


})->name('itemcreate');

//admin routes
Route::name('admin.')->group(function (){

    Route::get('/admincreate', function () {
        return view('admin.create');
    })->name('create');

    Route::get('/adminedit', function () {
        return view('admin.edit');
    })->name('edit');

    Route::get('/adminindex', function () {
        return view('admin.index');
    })->name('index');

});
