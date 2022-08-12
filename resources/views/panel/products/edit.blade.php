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
                    Ürün Düzenle
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
                <form action="{{ route('products.update', ['product' => $product]) }}" method="POST"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-8 col-xl-9">
                            @error('name')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Ürün Adı</label>
                            <div class="col-sm-12">
                                <input value="{{ $product->name }}" type="text" class="form-control font-20" id="name"
                                       name="name"
                                       placeholder="ürün Adı">
                            </div>
                            @error('description')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="description" class="col-sm-12 col-form-label">Ürün Açıklaması</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control font-20" id="description" name="description"
                                          placeholder="Ürün Açıklaması">{{ $product->description }}</textarea>
                            </div>
                            @error('order')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="order" class="col-sm-12 col-form-label">Ürün Öncelik Değeri</label>
                            <div class="col-sm-12">
                                <select value="{{ $product->order }}" class="form-control" name="order" id="order">
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
                                <select value="{{ $product->status }}" class="form-control" name="status" id="status">
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
                            @if($product->images->count() > 0)
                                <div class="col-sm-12 mt-3">
                                    @foreach($product->images as $image)
                                        <img class="p-1" width="100"
                                             src="{{ asset('product_images/' . $image->image) }}">
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            @error('category_id')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="category_id" class="col-sm-12 col-form-label">Ürün Kategorisi</label>
                            <div class="col-sm-12">
                                @foreach($categories as $category)
                                    <div class="custom-control custom-radio">
                                        <input
                                            {{ $product->category_id === $category->id ? 'checked' : '' }} type="radio"
                                            class="custom-control-input" id="{{ $category->short }}"
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
    <div class="contentbar">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Stok Durum</h5>
            </div>
            <div class="card-body">
                <button class="btn btn-secondary mb-3" data-toggle="modal" data-target="#newStock">Yeni Stok Kaydı
                </button>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>#</th>
                        <th>Gramaj</th>
                        <th>Fiyat</th>
                        <th>Adet</th>
                        <th>İşlemler</th>
                    </tr>
                    @foreach($stocks as $index => $stock)
                        <tr>

                            <td>{{ $index + 1 }}</td>
                            <td>{{ $stock->weight }}</td>
                            <td>{{ $stock->price }}</td>
                            <td>{{ $stock->quantity }}</td>
                            <td>
                                <div class="button-list">
                                    <button class="btn btn-success-rgba"
                                            data-toggle="modal" data-target="#editStock_{{$stock->id}}"
                                    ><i
                                            class="feather icon-edit-2"></i></button>
                                    <form method="POST"
                                          action="{{ route('stock.destroy', ['stock' => $stock]) }} ">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" href="page-product-detail.html"
                                                class="btn btn-danger-rgba"><i
                                                class="feather icon-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

    <!-- New Stock Modal -->
    <div class="modal fade bd-example-modal-lg" id="newStock" tabindex="-1" role="dialog"
         aria-labelledby="newStockModelLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newStockModelLabel">Yeni Stock Kaydı</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('stock.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="modal-body">
                        <label for="price" class="col-sm-12 col-form-label">Fiyat</label>
                        <div class="col-sm-12">
                            <input type="number" step="0.01" class="form-control font-20" id="price"
                                   name="price"
                                   placeholder="Fiyat">
                        </div>
                        <label for="quantity" class="col-sm-12 col-form-label">Adet</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control font-20" id="quantity"
                                   name="quantity"
                                   placeholder="Adet">
                        </div>
                        <label for="weight" class="col-sm-12 col-form-label">Gramaj</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="weight" id="weight">
                                <option value="250">250</option>
                                <option value="500">500</option>
                                <option value="750">750</option>
                                <option value="1000">1000</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                        <button id="saveStock" type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Stock Modal -->
    @foreach($stocks as $stock)
        <div class="modal fade bd-example-modal-lg" id="editStock_{{$stock->id}}" tabindex="-1" role="dialog"
             aria-labelledby="editStockModelLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editStockModelLabel">Yeni Stock Kaydı</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('stock.update', ['stock' => $stock]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="modal-body">
                            <label for="price" class="col-sm-12 col-form-label">Fiyat</label>
                            <div class="col-sm-12">
                                <input type="number" step="0.01" class="form-control font-20" id="price"
                                       name="price"
                                       placeholder="Fiyat" value="{{ $stock->price  }}">
                            </div>
                            <label for="quantity" class="col-sm-12 col-form-label">Adet</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control font-20" id="quantity"
                                       name="quantity"
                                       placeholder="Adet"
                                       value="{{ $stock->quantity }}"
                                >
                            </div>
                            <label for="weight" class="col-sm-12 col-form-label">Gramaj</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="weight" id="weight">
                                    <option value="250" {{ $stock->weight == '250' ? 'selected' : '' }}>250</option>
                                    <option value="500" {{ $stock->weight == '500' ? 'selected' : '' }}>500</option>
                                    <option value="750" {{ $stock->weight == '750' ? 'selected' : '' }}>750</option>
                                    <option value="1000" {{ $stock->weight == '1000' ? 'selected' : '' }}>1000</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                            <button id="updateStock" type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('js')
@endsection
