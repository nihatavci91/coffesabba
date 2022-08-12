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
                    Kupon Oluştur
                </h4>
            </div>
        </div>
    </div>
    <div class="contentbar">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Kupon</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('vouchers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            @error('name')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="name" class="col-sm-12 col-form-label">Kupon Adı (Zorunlu)</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control font-20" id="name" name="name"
                                       placeholder="Kupon Adı" value="{{ old('name') }}">
                            </div>

                            @error('description')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="short" class="col-sm-12 col-form-label">Kupon Açıklaması</label>
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control font-20" id="description" name="description"
                                       placeholder="Kupon Açıklama">{{ old('description') }}</textarea>
                            </div>

                            @error('max_uses')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="max_uses" class="col-sm-12 col-form-label">Kupon Toplam Kullanım Limiti</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control font-20" id="max_uses" name="max_uses"
                                       placeholder="Boş Bırakılırsa Limitsiz Olarak Tanımlanır" value="{{ old('max_uses') }}">
                            </div>

                            @error('max_uses_user')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="max_uses_user" class="col-sm-12 col-form-label">Bir Kullanıcı Bu Kuponu Kaç Kez Kullanabilir ?</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control font-20" id="max_uses_user" name="max_uses_user"
                                       placeholder="Boş Bırakılırsa Limitsiz Olarak Tanımlanır" value="{{ old('max_uses_user') }}">
                            </div>

                            @error('type')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label class="col-sm-12 col-form-label" for="type">Kupon Tipi (Zorunlu)</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="type" id="type">
                                    <option value="" selected>Seçiniz</option>
                                    <option value="2">{{ getVoucherType(2) }}</option>
                                    <option value="3">{{ getVoucherType(3) }}</option>
                                    <option value="4">{{ getVoucherType(4) }}</option>
                                </select>
                            </div>

                            @error('discount_amount')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="discount_amount" class="col-sm-12 col-form-label">İndirim Yüzdesi (Zorunlu)</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control font-20" id="discount_amount" name="discount_amount"
                                       placeholder="Örneğin: 10" value="{{ old('discount_amount') }}">
                            </div>

                            @error('products')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="products" class="col-sm-12 col-form-label">Bağlı Olacağı Ürünler</label>
                            <div class="col-sm-12">
                                <select class="select2-multi-select form-control" multiple="multiple" name="products[]" id="products">
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @error('users')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label for="users" class="col-sm-12 col-form-label">Bağlı Olacağı Kullanıcılar (E-Mail)</label>
                            <div class="col-sm-12">
                                <select class="select2-multi-select form-control" multiple="multiple" name="users[]" id="users">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->email }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @error('status')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label class="col-sm-12 col-form-label" for="status">Kupon Durum Bilgisi (Zorunlu)</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="status" id="status">
                                    <option value="" selected>Seçiniz</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                                </select>
                            </div>

                            @error('starts_at')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label class="col-sm-12 col-form-label" for="start_date">Kupon Başlangıç Tarihi (Zorunlu)</label>
                            <div class="col-sm-12">
                                <input type="text" id="starts_at" name="starts_at" class="datepicker-here form-control"  value="{{ old('starts_at') }}" placeholder="gg/aa/yyyy" aria-describedby="basic-addon2"/>
                            </div>

                            @error('expires_at')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                            @enderror
                            <label class="col-sm-12 col-form-label" for="start_date">Kupon Bitiş Tarihi (Zorunlu)</label>
                            <div class="col-sm-12">
                                <input type="text" id="expires_at" name="expires_at" class="datepicker-here form-control" value="{{ old('expires_at') }}" placeholder="gg/aa/yyyy" aria-describedby="basic-addon2"/>
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

@section('js')
    <script>
        $(document).ready(function() {
            $('#users').select2();
            $('#products').select2();

            $('#starts_at').datepicker({
                language: 'en',
                dateFormat: 'dd/mm/yyyy',
            });

            $('#expires_at').datepicker({
                language: 'en',
                dateFormat: 'dd/mm/yyyy',
            });

        });
    </script>
@endsection
