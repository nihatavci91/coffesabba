@extends('panel.layouts.app')

@section('body')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-12">
                @if(session()->has('deleteSuccess'))
                    <div class="alert alert-success text-center">
                        Ürün Başarı İle Silindi
                    </div>
                @endif
                <h4 class="page-title">Ürün Listesi</h4>
            </div>
        </div>
    </div>

    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title mb-0">Tüm Ürünler</h5>
                            </div>
                            <div class="col-6">
                                <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item">
                                        <div class="form-group mb-0 amount-spent-select">
                                            <select class="form-control" id="formControlSelect">
                                                <option value="" selected>Hepsi</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Resim</th>
                                    <th>Ürün Adı</th>
                                    <th>Ürün Sırası</th>
                                    <th>Kategori</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row"># {{ $product->id }}</th>
                                        <td><img
                                                src="{{ !empty($product->images) ? asset('product_images/' . $product->images[0]->image):  asset('panel-assets/images/ecommerce/product_02.svg') }}"
                                                class="img-fluid" width="35"
                                                alt="product"></td>
                                        <td>{{ $product->name }}</td>
                                        <td class="text-success">{{ $product->order }}</td>
                                        <td><span
                                                class="badge badge-secondary-inverse mr-2">{{$product->category->name}}</span>
                                        </td>
                                        <td>
                                            <div class="button-list">
                                                <a href="{{ route('products.edit', ['product' => $product]) }}"
                                                   class="btn btn-success-rgba"><i
                                                        class="feather icon-edit-2"></i></a>
                                                <form method="POST"
                                                      action="{{ route('products.destroy', ['product' => $product]) }} ">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if($products->count() > 1)
                        <div class="card-footer ">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
@endsection
