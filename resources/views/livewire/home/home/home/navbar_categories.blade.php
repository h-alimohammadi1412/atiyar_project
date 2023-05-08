<ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"
            data-bs-auto-close="outside"><i class="ci-menu align-middle mt-n1 me-2"></i>دسته بندی کالاها</a>
        <ul class="dropdown-menu">
            @foreach (\App\Models\Category::where('parent_id', 0)->with('getChild.getChild')->get() as $category)
                <li class="dropdown mega-dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="{{ $category->icon }} opacity-60 fs-lg mt-n1 me-2"></i>{{ $category->title }}
                    </a>
                    <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                        @foreach ($category->getChild as $categoryChild)
                                            <li class="widget-list-item pb-1">
                                                <a class="widget-list-link" href="#">{{ $categoryChild->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="mega-dropdown-column py-4 px-3">
                                <div class="widget widget-links">
                                    <h6 class="fs-base mb-3">تجهیزات جانبی</h6>
                                    <ul class="widget-list">
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">مانیتور</a></li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">کیف</a>
                                        </li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">باتری</a></li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">مانیتور</a></li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">کیف</a>
                                        </li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">باتری</a></li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">مانیتور</a></li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">کیف</a>
                                        </li>
                                        <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                href="#">باتری</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2"
                                    href="#"><img src="/storage/{{ $category->img }} " alt="کامپیوتر و تجهیزات"></a>
                                <div class="fs-sm mb-3">شروع میشود از <span
                                        class='fw-medium'>149.<small>80</small></span>
                                </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                    تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
