@extends('panel.layouts.app')

@section('body')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-12">
                @if($errors->any())
                    <div class="alert alert-danger text-center">
                        Lütfen Bilgileri Kontrol Ediniz
                    </div>
                @endif
            </div>
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">
                    Kategori Oluştur
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Kategori</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            @error('name')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Kategori Adı (Zorunlu)</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control font-20" id="name" name="name"
                                       placeholder="Kategori Adı">
                            </div>
                            @error('short')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="short" class="col-sm-12 col-form-label">Kategori Kısa Adı (Zorunlu)</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control font-20" id="short" name="short"
                                       placeholder="Kategori Kısa Adı (Ana: Kategori, Kısa: kategori)">
                            </div>
                            @error('parent_id')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="parent_id" class="col-sm-12 col-form-label">Bağlı Olduğu Kategori</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="parent_id" id="parent_id">
                                    <option value="">Ana Kategori</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('status')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label class="col-sm-12 col-form-label" for="status">Kategori Durum Bilgisi (Zorunlu)</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="status" id="status">
                                    <option value="" selected>Seçiniz</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary pull-right">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
