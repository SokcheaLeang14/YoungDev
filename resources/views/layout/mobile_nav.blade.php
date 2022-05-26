<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="assets/media/logos/logo-light.png" />
	</a>
	<!--end::Logo-->
	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">
		<!--begin::Aside Mobile Toggle-->
		<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
			<span></span>
		</button>
		<!--end::Aside Mobile Toggle-->
		<!--begin::Topbar Mobile Toggle-->
		<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl">
				<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
						<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</button>
		<!--end::Topbar Mobile Toggle-->
	</div>
	<!--end::Toolbar-->
</div>	
<!--end::Header Mobile-->
<!--begin::Quick Panel-->
<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
	<!--begin::Header-->
	<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
		<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Notifications</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
			</li>
		</ul>
		<div class="offcanvas-close mt-n1 pr-5">
			<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
				<i class="ki ki-close icon-xs text-muted"></i>
			</a>
		</div>
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="offcanvas-content px-10">
		<div class="tab-content">
			<!--begin::Tabpane-->
			<div class="tab-pane fade show pt-2 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
				<!--begin::Nav-->
				<div class="navi navi-icon-circle navi-spacer-x-0">
					<!--begin::Item-->
					<a href="#" class="navi-item">
						<div class="navi-link rounded">
							<div class="symbol symbol-50 mr-3">
								<div class="symbol-label">
									<i class="flaticon-bell text-success icon-lg"></i>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold font-size-lg">5 new user generated report</div>
								<div class="text-muted">Reports based on sales</div>
							</div>
						</div>
					</a>
					<!--end::Item-->
				</div>
				<!--end::Nav-->
			</div>
			<!--end::Tabpane-->
			<!--begin::Tabpane-->
			<div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
				<form class="form">
					<!--begin::Section-->
					<div>
						<h5 class="font-weight-bold mb-3">Customer Care</h5>
						<div class="form-group mb-0 row align-items-center">
							<label class="col-8 col-form-label">Enable Notifications:</label>
							<div class="col-4 d-flex justify-content-end">
								<span class="switch switch-success switch-sm">
									<label>
										<input type="checkbox" checked="checked" name="select" />
										<span></span>
									</label>
								</span>
							</div>
						</div>
					</div>
					<!--end::Section-->
					<div class="separator separator-dashed my-6"></div>
					<!--begin::Section-->
					<div class="pt-2">
						<h5 class="font-weight-bold mb-3">Reports</h5>
						<div class="form-group mb-0 row align-items-center">
							<label class="col-8 col-form-label">Generate Reports:</label>
							<div class="col-4 d-flex justify-content-end">
								<span class="switch switch-sm switch-danger">
									<label>
										<input type="checkbox" checked="checked" name="select" />
										<span></span>
									</label>
								</span>
							</div>
						</div>
					</div>
					<!--end::Section-->
					<div class="separator separator-dashed my-6"></div>
					<!--begin::Section-->
					<div class="pt-2">
						<h5 class="font-weight-bold mb-3">Memebers</h5>
						<div class="form-group mb-0 row align-items-center">
							<label class="col-8 col-form-label">Enable Member singup:</label>
							<div class="col-4 d-flex justify-content-end">
								<span class="switch switch-sm switch-primary">
									<label>
										<input type="checkbox" checked="checked" name="select" />
										<span></span>
									</label>
								</span>
							</div>
						</div>
					</div>
					<!--end::Section-->
				</form>
			</div>
			<!--end::Tabpane-->
		</div>
	</div>
	<!--end::Content-->
</div>
<!--end::Quick Panel-->
		