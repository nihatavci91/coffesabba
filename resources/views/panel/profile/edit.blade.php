@extends('panel.layouts.app')


@section('body')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-12">
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="alert alert-danger text-center">
                        Lütfen Bilgileri Kontrol Ediniz
                    </div>
                @endif
            </div>
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">
                    Profil Düzenle
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Profil Bilgileri</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-lg-6 col-xl-6 col-sm-12">
                            @error('name')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">İsim</label>
                            <div class="col-sm-12">
                                <input value="{{ $user->name }}" type="text" class="form-control font-20" id="name" name="name"
                                       placeholder="ürün Adı">
                            </div>
                            @error('password')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="order" class="col-sm-12 col-form-label">Şifre</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control font-20" id="password" name="password"
                                       placeholder="Şifre">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 col-sm-12">
                            @error('email')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                                <input value="{{ $user->email }}" type="text" class="form-control font-20" id="email" name="email"
                                       placeholder="Email">
                            </div>
                            <label for="order" class="col-sm-12 col-form-label">Şifre</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control font-20" id="password_confirmation" name="password_confirmation"
                                       placeholder="Şifre Tekrarı">
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
