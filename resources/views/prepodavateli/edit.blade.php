<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center">
            {{ __('Изменить Преподавателя') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Преподаватели</title>
    <!-- Подключение Bootstrap через CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение FontAwesome через CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004084;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('prepodavateli.update', $prepodavatel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $prepodavatel->surname }}" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $prepodavatel->name }}" required>
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label">Отчество</label>
                <input type="text" class="form-control" id="patronymic" name="patronymic" value="{{ $prepodavatel->patronymic }}" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Предмет</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ $prepodavatel->subject }}" required>
            </div>
            <div class="mb-3">
                <label for="group" class="form-label">Группа</label>
                <input type="text" class="form-control" id="group" name="group" value="{{ $prepodavatel->group }}" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Возраст</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $prepodavatel->age }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $prepodavatel->phone }}" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Изменить</button>
        </form>
    </div>

    <!-- Подключение Bootstrap JS и Popper.js через CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>