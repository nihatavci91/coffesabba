@extends('panel.layouts.app')

@section('body')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-12">
                @if(session()->has('successMessage'))
                    <div class="alert alert-success text-center">
                        {{ session('successMessage') }}
                    </div>
                @endif
                @if(session()->has('errorMessage'))
                    <div class="alert alert-danger text-center">
                        {{ session('errorMessage') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger text-center">
                        Lütfen Bilgileri Kontrol Ediniz
                    </div>
                @endif
            </div>
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">
                    Hakkımızda Sayfası Düzenle
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Hakkımızda</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('pageconfig.update') }}" method="POST"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$about->id}}">
                    <div class="row">
                        <div class="form-group col-lg-12 col-xl-12">
                            @error('description')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="description" class="col-sm-12 col-form-label">Hakkımızda Açıklaması</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control font-20" id="description" name="description"
                                          placeholder="Hakkımızda Açıklaması" required>{{$about->description}}</textarea>
                            </div>

                            @error('input_1')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Input Adı - 1</label>
                            <div class="col-sm-12">
                                <input value="{{ $about->input_1 }}" type="text" class="form-control font-20" id="input_1"
                                       name="input_1"
                                       placeholder="Input Adı" required>
                            </div>

                            @error('input_2')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Input Adı - 2</label>
                            <div class="col-sm-12">
                                <input value="{{ $about->input_2 }}" type="text" class="form-control font-20" id="input_2"
                                       name="input_2"
                                       placeholder="Input Adı" required>
                            </div>

                            @error('input_3')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Input Adı - 3</label>
                            <div class="col-sm-12">
                                <input value="{{ $about->input_3 }}" type="text" class="form-control font-20" id="input_3"
                                       name="input_3"
                                       placeholder="Input Adı" required>
                            </div>

                            @error('images')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="images" class="col-sm-12 col-form-label">Ürün Resimleri</label>
                            <div class="col-sm-12">
                                <input type="file" id="images[]" name="images[]" multiple="true" value="{{ asset('about_images/' .$about->image_url_1) }}">
                            </div>
                            @if($about->image_url_1)
                                <div class="col-sm-12 mt-3">
                                    <img class="p-1" width="100" src="{{ asset('about_images/' .$about->image_url_1) }}">
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary pull-right">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Edit Stock Modal -->
@endsection

@section('js')
@endsection
