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
                <h4 class="page-title">Kupon Listesi</h4>
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
                                <h5 class="card-title mb-0">Tüm Kuponler</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kupon Adı</th>
                                    <th>Kupon Kodu</th>
                                    <th>Kupon Kullanım Sayısı</th>
                                    <th>Kupon Toplam Kullanım Limiti</th>
                                    <th>Kupon Tipi</th>
                                    <th>Kupon İndirim Yüzdesi</th>
                                    <th>Kupon Bitiş Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vouchers as $voucher)
                                    <tr>
                                        <th scope="row"># {{ $voucher->id }}</th>
                                        <td>{{ $voucher->name }}</td>
                                        <td class="text-success">{{ $voucher->code }}</td>
                                        <td>
                                            <span class="badge badge-secondary-inverse mr-2">{{$voucher->uses}}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary-inverse mr-2">{{$voucher->max_uses}}</span>
                                        </td>
                                        <td class="text-success">{{ getVoucherType($voucher->type) }}</td>
                                        <td class="text-primary">% {{ $voucher->discount_amount }}</td>
                                        <td class="text-danger">% {{ $voucher->expires_at }}</td>
                                        <td>
                                            <div class="button-list">
                                                <a href="{{ route('vouchers.edit', ['voucher' => $voucher]) }}"
                                                   class="btn btn-success-rgba">
                                                    <i class="feather icon-edit-2"></i>
                                                </a>
                                                <form method="POST" action="{{ route('vouchers.destroy', ['voucher' => $voucher]) }} ">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" href="page-category-detail.html" class="btn btn-danger-rgba">
                                                        <i class="feather icon-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if($vouchers->count() > 1)
                        <div class="card-footer ">
                            {{ $vouchers->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
@endsection
