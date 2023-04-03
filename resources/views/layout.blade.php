@extends('profile.profil')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-3">Activities</h5>
        <div class="acitivity-timeline">
            <div class="acitivity-item d-flex">
                <div class="flex-shrink-0">
                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Oliver Phillips <span class="badge bg-soft-primary text-primary align-middle">New</span></h6>
                    <p class="text-muted mb-2">We talked about a project on linkedin.</p>
                    <small class="mb-0 text-muted">Today</small>
                </div>
            </div>
            <div class="acitivity-item py-3 d-flex">
                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                    <div class="avatar-title bg-soft-success text-success rounded-circle">
                        N
                    </div>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Nancy Martino <span class="badge bg-soft-secondary text-secondary align-middle">In Progress</span></h6>
                    <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i> Create new project Buildng product</p>
                    <div class="avatar-group mb-2">
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Christi">
                            <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-xs" />
                        </a>
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                            <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-xs" />
                        </a>
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle bg-light text-primary">
                                    R
                                </div>
                            </div>
                        </a>
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="more">
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">
                                    2+
                                </div>
                            </div>
                        </a>
                    </div>
                    <small class="mb-0 text-muted">Yesterday</small>
                </div>
            </div>
            <div class="acitivity-item py-3 d-flex">
                <div class="flex-shrink-0">
                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Natasha Carey <span class="badge bg-soft-success text-success align-middle">Completed</span>
                    </h6>
                    <p class="text-muted mb-2">Adding a new event with attachments</p>
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="row border border-dashed gx-2 p-2 mb-2">
                                <div class="col-4">
                                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/small/img-2.jpg') }}" alt="" class="img-fluid rounded" />
                                </div>
                                <!--end col-->
                                <div class="col-4">
                                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/small/img-3.jpg') }}" alt="" class="img-fluid rounded" />
                                </div>
                                <!--end col-->
                                <div class="col-4">
                                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/small/img-4.jpg') }}" alt="" class="img-fluid rounded" />
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <small class="mb-0 text-muted">25 Nov</small>
                </div>
            </div>
            <div class="acitivity-item py-3 d-flex">
                <div class="flex-shrink-0">
                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-6.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Bethany Johnson</h6>
                    <p class="text-muted mb-2">added a new member to velzon dashboard</p>
                    <small class="mb-0 text-muted">19 Nov</small>
                </div>
            </div>
            <div class="acitivity-item py-3 d-flex">
                <div class="flex-shrink-0">
                    <div class="avatar-xs acitivity-avatar">
                        <div class="avatar-title rounded-circle bg-soft-danger text-danger">
                            <i class="ri-shopping-bag-line"></i>
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Your order is placed <span class="badge bg-soft-danger text-danger align-middle ms-1">Out of Delivery</span></h6>
                    <p class="text-muted mb-2">These customers can rest assured their order has been placed.</p>
                    <small class="mb-0 text-muted">16 Nov</small>
                </div>
            </div>
            <div class="acitivity-item py-3 d-flex">
                <div class="flex-shrink-0">
                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-7.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Lewis Pratt</h6>
                    <p class="text-muted mb-2">They all have something to say
                        beyond the words on the page. They can come across as
                        casual or neutral, exotic or graphic. </p>
                    <small class="mb-0 text-muted">22 Oct</small>
                </div>
            </div>
            <div class="acitivity-item py-3 d-flex">
                <div class="flex-shrink-0">
                    <div class="avatar-xs acitivity-avatar">
                        <div class="avatar-title rounded-circle bg-soft-info text-info">
                            <i class="ri-line-chart-line"></i>
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Monthly sales report</h6>
                    <p class="text-muted mb-2">
                          <span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a>
                    </p>
                    <small class="mb-0 text-muted">15 Oct</small>
                </div>
            </div>
            <div class="acitivity-item d-flex">
                <div class="flex-shrink-0">
                    <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/users/avatar-8.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">New ticket received <span class="badge bg-soft-success text-success align-middle">Completed</span></h6>
                    <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket.</p>
                    <small class="mb-0 text-muted">26 Aug</small>
                </div>
            </div>
        </div>
    </div>
    <!--end card-body-->
</div>

@endsection