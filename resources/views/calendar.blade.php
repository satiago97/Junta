<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles

    <style>
        .card {
    background: #fff;
    border-radius: 2px;
    box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    margin-bottom: 200px;
}
        </style>
</head>
<body>

<div class="container mx-auto card">
    <livewire:appointments-calendar
        before-calendar-view="header"
    />
</div>

@livewireScripts
@livewireCalendarScripts
</body>
</html>