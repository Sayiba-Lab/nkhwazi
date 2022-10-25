<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
	@include('partial.head')
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
