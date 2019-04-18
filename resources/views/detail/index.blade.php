<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('')}}">
	@include('detail.css')
</head>
<body>
	@include('layout.header')
	@include('detail.detail')
	@include('detail.related')
	@include('layout.footer')
	@include('detail.js')
</body>
</html>