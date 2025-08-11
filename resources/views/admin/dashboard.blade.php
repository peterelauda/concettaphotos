<!-- Font -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">

<!-- Content -->
<section id="notification-admin" class="position-fixed end-0 p-3" style="top: 100px; z-index: 1055;">
    @if(session('success'))
        <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-delay="4000">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    @endif
</section>

<x-app-layout>
    <div class="container p-4" style="margin-top: 210px;">
        <h1 class="aesthetic-text-1 display-6 mb-2">Admin Dashboard</h1>

        <p class="custom-text-0 mb-5" style="font-size: 2rem;">Welcome, Admin!</p>

        <h2 class="custom-text-3 mb-3" style="font-size: 1.7rem;">Concettalk Upload</h2>

        <form action="{{ isset($concettalk) ? route('concettalks.update', $concettalk) : route('concettalks.store') }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($concettalk)) @method('PUT') @endif

            <div class="mb-3">
                <label for="image_url" class="form-label custom-text-0">File (Image / Video (Thumbnail Showed to
                    First Frame of Video))</label>

                <div id="preview-container" class="border border-secondary rounded p-2 text-center"
                    ondrop="handleDrop(event)" ondragover="handleDragOver(event)" ondragleave="handleDragLeave(event)"
                    onclick="document.getElementById('image_url').click();" style="cursor: pointer;">

                    <input type="file" name="image_url" id="image_url" accept="image/*,video/*" class="visually-hidden"
                        onchange="previewFile(event)" required>

                    <div id="preview-content" class="d-flex justify-content-center align-items-center flex-column w-100"
                        style="min-height: 350px;">
                        <div id="upload-hint" class="text-muted py-5">
                            <p class="mb-0 custom-text-0">Click or Drag to upload an image or video</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="caption" class="form-label custom-text-0">Caption (Use Point (.) / Read Mark (?, !) to
                    Separate Title with Caption)</label>
                <input id="caption" type="hidden" name="caption"
                    value="{{ old('caption', $concettalk->caption ?? '') }}" required>
                <trix-editor class="custom-text-0" input="caption" style="min-height: 200px;"></trix-editor>
            </div>

            <div class="mb-4">
                <label for="category" class="form-label custom-text-0">Category</label>
                <select name="category" id="category" class="form-select custom-text-0" required>
                    <option value="">-- Select Category --</option>
                    <option value="vlog" {{ old('category', $concettalk->category ?? '') == 'Vlog' ? 'selected' : '' }}>
                        Vlog</option>
                    <option value="location" {{ old('category', $concettalk->category ?? '') == 'Location' ? 'selected' : '' }}>Location</option>
                </select>
            </div>

            <button class="btn btn-primary mb-5" type="submit">Submit</button>
        </form>

        <div class="container mt-5 px-0">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
                @foreach($concettalks as $item)
                    <div class="col mb-4">
                        <div class="card border-1 shadow-sm rounded-4" style="height: auto;">
                            @if(Str::contains($item->image_url, ['.mp4', '.mov', '.webm']))
                                <video class="w-100 rounded-top-4" preload="metadata" muted playsinline>
                                    <source src="{{ asset('storage/' . $item->image_url) }}" type="video/mp4">
                                </video>
                            @else
                                <img src="{{ asset('storage/' . $item->image_url) }}" class="card-img-top rounded-top-4"
                                    alt="Thumbnail">
                            @endif

                            <div class="card-body px-3 py-3 d-flex flex-column justify-content-start" style="height: auto;">
                                <div class="mb-3">
                                    <span class="badge bg-primary custom-text-2">{{ $item->category }}</span>

                                    @php
                                        // Remove HTML tags but keep some formatting
                                        $rawCaption = strip_tags($item->caption, '<strong><em><u><p><br>');

                                        // Force line breaks to be treated as sentence separators
                                        $normalized = preg_replace("/(\r\n|\n|\r)/", ". ", $rawCaption);

                                        // Break sentences based on punctuation or end of phrase (including emojis/emoticons)
                                        preg_match_all('/[^.?!\n]+(?:[.?!\n]+|$)/u', $normalized, $sentences);

                                        // If no sentences are recognized, use the entire caption
                                        if (empty($sentences[0])) {
                                            $sentences[0][] = $rawCaption;
                                        }

                                        // Take only the first 3 sentences
                                        $previewSentences = implode(' ', array_slice($sentences[0], 0, 3));
                                    @endphp

                                    <div class="custom-text-0 text-start mt-3">
                                        <span class="caption-preview">{!! $previewSentences !!}</span>
                                        <span class="caption-full d-none">{!! $rawCaption !!}</span>
                                        @if(count($sentences[0]) > 3)
                                            <a href="#" class="read-more-toggle d-block mt-2 custom-text-5"
                                                onclick="toggleCaption(this); return false;">Read more</a>
                                        @endif
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-3">
                                    <button class="btn btn-sm btn-outline-primary"
                                        onclick="openEditModal({{ $item->id }}, '{{ $item->caption }}', '{{ $item->category }}')">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger"
                                        onclick="openDeleteModal({{ $item->id }})">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container mt-5 px-0">
            <h2 class="custom-text-3 mb-3" style="font-size: 1.7rem;">All Inquiries</h2>

            @if($inquiries->isEmpty())
                <p class="custom-text-0">Client hasn't submitted any inquiries yet.</p>
            @else
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4 g-4">
                    @foreach ($inquiries as $inquiry)
                        <div class="col mb-4">
                            <div class="card border-1 shadow-sm rounded-4 h-100">
                                <div class="card-body px-3 py-3 d-flex flex-column justify-content-between"
                                    style="height: 100%;">
                                    <div>
                                        <h5 class="card-title mb-2 custom-text-3">{{ $inquiry->full_name }}</h5>
                                        <p class="text-muted mb-2 custom-text-0">{{ $inquiry->email }}</p>
                                        <p class="card-text small mb-3 custom-text-0">
                                            <strong>Phone:</strong> {{ $inquiry->phone_number }}<br>
                                            <strong>Domicile:</strong> {{ $inquiry->domicile }}<br>
                                            <strong>Country:</strong> {{ $inquiry->country }}<br>
                                            <strong>Message:</strong>
                                            {{ $inquiry->message }}<br>
                                            <strong>Preference:</strong> {{ $inquiry->preference ?? '—' }}<br>
                                            <strong>Category:</strong> {{ $inquiry->category }}<br>
                                            <strong>Payment Method:</strong> {{ $inquiry->payment_method }}<br>
                                            <strong>Reference:</strong> {{ $inquiry->reference }}<br>

                                        </p>
                                    </div>

                                    <div class="mt-auto d-flex justify-content-between align-items-center custom-text-0">
                                        <small class="text-muted">Submitted at
                                            {{ $inquiry->created_at->format('d M Y H:i') }}</small>
                                        <a href="mailto:{{ $inquiry->email }}" class="btn btn-sm btn-outline-primary">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <section id="footer" class="pt-5 mt-5">
        @include('partials.footer')
    </section>

    <!-- Modal Edit -->
    <div id="editModal" class="modal d-none p-4" tabindex="-1"
        style="position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:1000; justify-content:center; align-items:center;">
        <div class="bg-white p-4 rounded-4 w-100" style="max-width: 500px; max-height: 50%; overflow-y: auto;">
            <div class="d-flex justify-content-end">
                <button class="img-modal-close" onclick="closeEditModal()">&times;</button>
            </div>

            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" id="edit_id" />

                <div class="mb-3">
                    <label for="edit_caption" class="form-label custom-text-0">Caption</label>
                    <input type="hidden" name="caption" id="edit_caption" required />
                    <trix-editor input="edit_caption" class="custom-text-0" style="min-height: 200px;"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="edit_category" class="form-label custom-text-0">Category</label>
                    <select name="category" id="edit_category" class="form-select custom-text-0" required>
                        <option value="">-- Select Category --</option>
                        <option value="vlog">Vlog</option>
                        <option value="location">Location</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="edit_image_url" class="form-label custom-text-0">Replace File</label>
                    <input type="file" name="image_url" id="edit_image_url" accept="image/*,video/*"
                        class="form-control">
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger" onclick="closeEditModal()">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal d-none p-4" tabindex="-1" style="position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5);
    z-index:1000; justify-content:center; align-items:center;">


        <div class="bg-white p-4 rounded-4 w-100" style="max-width: 400px;">
            <div class="d-flex justify-content-end">
                <button class="img-modal-close" onclick="closeDeleteModal()">&times;</button>
            </div>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')

                <div class="mb-3 text-center">
                    <p class="custom-text-0 mb-0" style="font-size: 1.1rem;">
                        Are you sure you want to delete this Concettalk?
                    </p>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-danger px-4">Yes</button>
                    <button type="button" class="btn btn-primary px-4" onclick="closeDeleteModal()">No</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>

<script src="{{ asset('js/custom.js') }}"></script>

<script>
    function openEditModal(id, caption, category) {
        document.getElementById('edit_id').value = id;
        document.getElementById('edit_caption').value = caption;
        document.querySelector('trix-editor[input="edit_caption"]').editor.loadHTML(caption);
        document.getElementById('edit_category').value = category.toLowerCase();
        document.getElementById('editForm').action = '/concettalks/' + id;

        const modal = document.getElementById('editModal');
        modal.classList.remove('d-none');
        modal.classList.add('d-flex');
    }

    function closeEditModal() {
        const modal = document.getElementById('editModal');
        modal.classList.remove('d-flex');
        modal.classList.add('d-none');
    }

    function openDeleteModal(id) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');

        form.action = '/concettalks/' + id;
        modal.classList.remove('d-none');
        modal.style.display = 'flex';
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');

        modal.classList.add('d-none');
        modal.style.display = 'none';
    }

    // Image/Video Preview
    function handleDragOver(event) {
        event.preventDefault();
        event.currentTarget.classList.add("border-primary");
    }

    function handleDragLeave(event) {
        event.preventDefault();
        event.currentTarget.classList.remove("border-primary");
    }

    function handleDrop(event) {
        event.preventDefault();
        event.stopPropagation();

        event.currentTarget.classList.remove("border-primary");

        const files = event.dataTransfer.files;
        if (files.length > 0) {

            const input = document.getElementById('image_url');

            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(files[0]);
            input.files = dataTransfer.files;

            previewFile(files[0]);

        }
    }

    function previewFile(eventOrFile) {
        const previewContent = document.getElementById('preview-content');
        previewContent.innerHTML = ''; // Remove previous content

        let file;
        if (eventOrFile instanceof File) {
            file = eventOrFile;
        } else {
            file = eventOrFile.target.files[0];
        }

        if (!file) return;

        const reader = new FileReader();
        reader.onload = function (e) {
            let element;

            if (file.type.startsWith('video/')) {
                element = document.createElement('video');
                element.src = e.target.result;
                element.controls = true;
            } else if (file.type.startsWith('image/')) {
                element = document.createElement('img');
                element.src = e.target.result;
            }

            if (element) {
                element.style.width = 'auto';
                element.style.height = '350px';
                element.classList.add('rounded', 'mt-2');
                previewContent.appendChild(element);
            }
        };

        reader.readAsDataURL(file);
    }

    function toggleCaption(link) {
        const container = link.closest('.custom-text-0');
        const preview = container.querySelector('.caption-preview');
        const full = container.querySelector('.caption-full');

        if (full.classList.contains('d-none')) {
            // Show full caption
            preview.classList.add('d-none');
            full.classList.remove('d-none');
            link.textContent = 'Read less';
        } else {
            // Show preview, scroll to .container
            full.classList.add('d-none');
            preview.classList.remove('d-none');
            link.textContent = 'Read more';

            // Scroll to the closest .col
            const nearestContainer = link.closest('.col');
            if (nearestContainer) {
                const offset = 140; // scroll offset in px

                const rect = nearestContainer.getBoundingClientRect();
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                window.scrollTo({
                    top: rect.top + scrollTop - offset,
                    behavior: 'smooth'
                });
            }
        }
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>