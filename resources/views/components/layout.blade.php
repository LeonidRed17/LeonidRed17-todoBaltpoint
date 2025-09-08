<html>
<head>
    <title>{{ $title ?? 'Задачник' }}</title>
</head>
<body>
<h1>Задачи</h1>
<hr/>
<div class="content">
{{ $slot }}
</div>
</body>
</html>
