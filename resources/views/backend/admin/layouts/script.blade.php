        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('backend/assets/plugins/global/plugins.bundle1036.js?v=2.1.1') }}"></script>
		<script src="{{ asset('backend/assets/plugins/custom/prismjs/prismjs.bundle1036.js?v=2.1.1') }}"></script>
		<script src="{{ asset('backend/assets/js/scripts.bundle1036.js?v=2.1.1') }}"></script>
		<script src="{{ asset('backend/scripts/upload_img.js') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('backend/assets/js/pages/widgets1036.js?v=2.1.1') }}"></script>
		<!--end::Page Scripts-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('backend/assets/js/pages/features/miscellaneous/sweetalert21036.js') }}"></script>
		<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
		@yield('scripts')

		<script>
			$(document).ready(function() {
			$('#mySummernote').summernote({
				height: 150,
			});
			});
		</script>

		<script>
			$('#lfm').filemanager('image');
		</script>
	</body>
	<!--end::Body-->
	</html>