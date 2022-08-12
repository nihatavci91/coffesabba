@extends('panel.layouts.app')

@section('body')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-12">
                @if(session()->has('deleteSuccess'))
                    <div class="alert alert-success text-center">
                        {{ session('deleteSuccess') }}
                    </div>
                @endif
                <h4 class="page-title">Kategori Listesi</h4>
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
                                <h5 class="card-title mb-0">Tüm Kategoriler</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kategori Adı</th>
                                    <th>Kategori Kısa Adı</th>
                                    <th>Üst Kategori</th>
                                    <th>Kategori Durumu</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th scope="row"># {{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td class="text-success">{{ $category->short }}</td>
                                        <td><span
                                                class="badge badge-secondary-inverse mr-2">{{$category->parent ? $category->parent->name : '-'}}</span>
                                        </td>
                                        <td><span
                                                class="badge badge-primary-inverse mr-2">{{$category->status == 1 ? 'Aktif' : 'Pasif'}}</span>
                                        </td>
                                        <td>
                                            <div class="button-list">
                                                <a href="{{ route('category.edit', ['category' => $category]) }}"
                                                   class="btn btn-success-rgba"><i
                                                        class="feather icon-edit-2"></i></a>
                                                <form method="POST"
                                                      action="{{ route('category.destroy', ['category' => $category]) }} ">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" href="page-category-detail.html"
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
                    @if($categories->count() > 1)
                        <div class="card-footer ">
                            {{ $categories->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
@endsection
