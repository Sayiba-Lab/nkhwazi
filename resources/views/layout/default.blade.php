<!DOCTYPE html>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<html lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
	@include('partial.head')
    <script>
        const BASE_URL = "https://sayibaguy.com/nkhwazi/api/v1"
    </script>
</head>
<body class="{{ (!empty($bodyClass)) ? $bodyClass : '' }}">
	<!-- BEGIN #app -->
	<div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}">
	    @includeWhen(empty($appHeaderHide), 'partial.header')

		@includeWhen(empty($appSidebarHide), 'partial.sidebar')

		@if (empty($appContentHide))
            <!-- BEGIN #content -->
            <div id="content" class="app-content  {{ (!empty($appContentClass)) ? $appContentClass : '' }}">
                <div class="row">
                    <div class="col-12">
                        <h4>{{$title}} / {{$subtitle}}</h4>
                        <hr>
                    </div>
                </div>
                @yield('content')

            </div>
            <!-- END #content -->
		@else
            @yield('content')

		@endif

		@includeWhen(!empty($appFooter), 'partial.footer')
	</div>
	<!-- END #app -->

	@include('partial.scroll-top-btn')

	@include('partial.scripts')

    </div>
</body>
</html>
