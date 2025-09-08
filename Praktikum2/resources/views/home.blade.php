<!DOCTYPE html>
<html>
<head>
    <title>Profile Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f5f5f5;
        }
        
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 15px;
        }
        
        .info-item {
            margin: 15px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        
        .info-item strong {
            color: #555;
        }
        
        .hobbies-title {
            margin: 20px 0 10px 0;
            color: #333;
            font-size: 18px;
        }
        
        .hobby-item {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            margin: 5px;
            border-radius: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tentangku</h1>
        
        <div class="info-item">
            <strong>Nama:</strong> {{ $nama }}
        </div>
        
        <div class="info-item">
            <strong>Umur:</strong> {{ $umur }} tahun
        </div>
        
        <div class="hobbies-title">
            <strong>Hobi:</strong>
        </div>
        
        @foreach($hobi as $h)
            <span class="hobby-item">{{ $h }}</span>
        @endforeach
    </div>
</body>
</html>