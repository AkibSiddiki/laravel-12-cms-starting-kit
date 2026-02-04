@extends('back.layout.app')
@section('title', 'Demo Edit/Create Page')
@section('page-header')
    <x-page-header pretitle="Demo" title="Demo Edit/Create Page" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row gy-3">
            <div class="col-12">
                <div class="card p-4">
                    <h2 class="h3 mb-3">CKEditor 5 Demo</h2>
                    <label class="form-label" for="editor">Content</label>
                    <textarea id="editor" class="form-control" rows="8">
<h2>Welcome to the demo</h2>
<p>Try editing this text using the toolbar above.</p>
                    </textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-4">
                    <h2 class="h3 mb-3">Select2 Demo</h2>
                    <label class="form-label" for="tags">Tags</label>
                    <select id="tags" class="form-select" multiple>
                        <option value="news">News</option>
                        <option value="product">Product</option>
                        <option value="events">Events</option>
                        <option value="guides">Guides</option>
                        <option value="marketing">Marketing</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush
@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        class LaravelUploadAdapter {
            constructor(loader, options) {
                this.loader = loader;
                this.options = options;
                this.abortController = new AbortController();
            }

            upload() {
                return this.loader.file.then((file) => {
                    return new Promise((resolve, reject) => {
                        const formData = new FormData();

                        formData.append('upload', file);

                        fetch(this.options.uploadUrl, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': this.options.csrfToken,
                                'Accept': 'application/json',
                            },
                            body: formData,
                            credentials: 'same-origin',
                            signal: this.abortController.signal,
                        })
                            .then(async (response) => {
                                const data = await response.json().catch(() => ({}));

                                if (!response.ok) {
                                    return reject(data.message ?? 'Image upload failed.');
                                }

                                if (!data.url) {
                                    return reject('Invalid upload response.');
                                }

                                return resolve({
                                    default: data.url,
                                });
                            })
                            .catch(() => {
                                return reject('Image upload failed.');
                            });
                    });
                });
            }

            abort() {
                this.abortController.abort();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const editorElement = document.querySelector('#editor');

            if (editorElement) {
                ClassicEditor.create(editorElement).then((editor) => {
                    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                        return new LaravelUploadAdapter(loader, {
                            uploadUrl: '{{ route('admin.upload.ckeditor') }}',
                            csrfToken: '{{ csrf_token() }}',
                        });
                    };
                });
            }

            const tagsElement = $('#tags');

            if (tagsElement.length) {
                tagsElement.select2({
                    placeholder: 'Select tags',
                    width: '100%',
                });
            }
        });
    </script>
@endpush
