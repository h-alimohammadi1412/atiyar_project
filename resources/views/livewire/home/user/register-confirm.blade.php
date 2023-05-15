<div class="align-items-center d-flex justify-content-between" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered mt-10" role="document" style="width: 428px; height: 400px;">
        <div class="modal-content w-100">
            <div class="modal-header bg-secondary">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab"
                            role="tab" aria-selected="true"><i class="ci-user me-2 mt-n1"></i>ورود / ثبت نام</a>
                    </li>
                </ul>
            </div>
            <div class="modal-body tab-content py-4">
                <form wire:submit.prevent="userActiveCode" class="needs-validation tab-pane fade show active"
                    autocomplete="off" novalidate id="signin-tab">
                    <div class="mb-3 pt-4 text-center">
                        <img src="{{ asset('img/weblogo.png') }}" width="142" alt="آتی یار">
                    </div>
                    <div class="mb-3 pt-4">
                        <label class="form-label " for="si-email">کد تایید برای شماره {{ $user->email_phone }}
                            پیامک شد</label>
                        <input wire:model.lazy="input_active_code" class="form-control" type="text" id="si-email"
                            required>
                        @if ($errors->any())
                            <div class="alert alert-danger bg-body border-0 mt-2">
                                <ul class="list-inline text-center">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button class="btn btn-primary btn-shadow d-block w-100" style="margin-top: 4rem !important;"
                            type="submit">ورود</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@section('sccript')
    <script></script>
@endsection
