<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('')}}">
	@include('shoppage.css')
	@include('detail.css')
	
</head>
<body>
	@include('layout.header')
	<div class="site-section" style="padding-top: 140px">
        <div class="container">
            <div class="row mb-5">
                @include('shoppage.content')
            	@include('shoppage.fillter')
            </div>
        </div>
    </div>
    @include('shoppage.js')
    {{-- @include('detail.js') --}}
</body>
</html>