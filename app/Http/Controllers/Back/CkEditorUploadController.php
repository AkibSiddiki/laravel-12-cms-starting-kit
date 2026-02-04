<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CkEditorImageUploadRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CkEditorUploadController extends Controller
{
    public function store(CkEditorImageUploadRequest $request): JsonResponse
    {
        $directory = public_path('uploads/ck-images');
        File::ensureDirectoryExists($directory);

        $image = $request->file('upload');
        $filename = Str::uuid().'.'.$image->getClientOriginalExtension();

        $image->move($directory, $filename);

        return response()->json([
            'url' => asset('uploads/ck-images/'.$filename),
        ]);
    }
}
