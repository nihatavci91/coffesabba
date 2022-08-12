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
                    @if(url()->current() == route('products.create'))
                        Ürün Oluştur
                    @else
                        Ürün Düzenle
                    @endif
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Ürün</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-8 col-xl-9">
                            @error('name')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Ürün Adı</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control font-20" id="name" name="name"
                                       placeholder="Ürün Adı">
                            </div>
                            @error('description')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="description" class="col-sm-12 col-form-label">Ürün Açıklaması</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control font-20" id="description" name="description"
                                          placeholder="Ürün Açıklaması"></textarea>
                            </div>
                            @error('order')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="order" class="col-sm-12 col-form-label">Ürün Öncelik Değeri</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="order" id="order">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            @error('status')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label class="col-sm-12 col-form-label" for="status">Ürün Durum Bilgisi</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="status" id="status">
                                    <option value="active" selected>Aktif</option>
                                    <option value="passive">Pasif</option>
                                </select>
                            </div>
                            @error('images')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="images" class="col-sm-12 col-form-label">Ürün Resimleri</label>
                            <div class="col-sm-12">
                                <input type="file" id="images[]" name="images[]" multiple="true">
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            @error('category_id')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="category_id" class="col-sm-12 col-form-label">Ürün Kategorisi</label>
                            <div class="col-sm-12">
                            @foreach($categories as $category)
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="{{ $category->short }}"
                                           name="category_id" value="{{ $category->id }}">
                                    <label class="custom-control-label"
                                           for="{{ $category->short }}">{{ $category->name }}</label>
                                </div>
                            @endforeach
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
