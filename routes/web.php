<?php

Route::get('', function () {
    return view('home');
})->name('/');

Route::get('nosotros', function () {
    return view('about');
})->name('about');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('servicios', function () {
    return view('service');
})->name('service');


Route::post('messages', function () {

	$data = request()->all();
	Mail::send("emails.message", $data, function ($message) use ($data){
		$message->from($data['email'], $data['name'])
				->to('alienlegion@gmail.com','alienlegion')
				->subject($data['subject']);
	});
	return back()->with('flash', $data['name'].', tu mensaje a sido recibido');
})->name('messages');
