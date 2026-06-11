<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #1f2937;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 {
            color: white;
            margin: 0;
            font-size: 20px;
        }
        .navbar form button {
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
        }
        .content {
            padding: 40px;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h2 {
            color: #1f2937;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>لوحة التحكم</h1>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">تسجيل الخروج</button>
        </form>
    </div>
    <div class="content">
        <div class="card">
            <h2>مرحباً، {{ auth()->user()->name }} 👋</h2>
            <p>أنت الآن داخل لوحة التحكم بنجاح.</p>
        </div>
    </div>
</body>
</html>