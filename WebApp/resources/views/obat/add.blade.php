@extends('layout.main')
@section('content')
<div class="section-header">
    <h1>{{ $title }}</h1>
</div>

@if ($errors->any())
<div class="alert alert-danger" style="padding-bottom: 2px">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('obat') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="section-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Upload Foto Obat</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div id="image-preview" class="image-preview" style="height: 250px">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" accept="image/*" name="image" id="image-upload" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div style="width: 100%; margin: 10px" id='myDiv'>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Obat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_obat">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Komposisi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="komposisi"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Khasiat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="khasiat"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Aturan Pakai</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="aturanPakai"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Peringatan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="peringatan"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
@endsection
@push('scripts')
<script>
    $("select").selectric();
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
        $(".inputtags").tagsinput('items');
</script>
@endpush