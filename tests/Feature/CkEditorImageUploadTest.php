<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

it('uploads a valid image and returns its public url', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('admin.upload.ckeditor'), [
        'upload' => UploadedFile::fake()->image('photo.jpg'),
    ]);

    $response->assertOk()->assertJsonStructure(['url']);

    $url = $response->json('url');
    $path = parse_url($url, PHP_URL_PATH);
    $filename = basename($path);
    $filePath = public_path('uploads/ck-images/'.$filename);

    expect(File::exists($filePath))->toBeTrue();

    File::delete($filePath);
});

it('rejects non-image uploads', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('admin.upload.ckeditor'), [
        'upload' => UploadedFile::fake()->create('doc.pdf', 10, 'application/pdf'),
    ]);

    $response->assertStatus(422)->assertJsonValidationErrors(['upload']);
});

it('rejects images larger than 2mb', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('admin.upload.ckeditor'), [
        'upload' => UploadedFile::fake()->image('big.jpg')->size(3000),
    ]);

    $response->assertStatus(422)->assertJsonValidationErrors(['upload']);
});
