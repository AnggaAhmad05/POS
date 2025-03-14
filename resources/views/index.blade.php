@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manager Kategori</div>
            <div class="card-body">
                {{ $dataTable=>table() }}
            </div>
        </div>
    </div>
@endsection
 @push('scripts')
    {{ $dataTable->scripts() }}    
 @endpush















{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales - POS Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .transaction-form {
            display: flex;
            flex-direction: column;
        }
        .transaction-form input, .transaction-form button {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .transaction-form button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .transaction-form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sales Transaction</h1>
    </div>
    <div class="container">
        <h2>Process Your Sale</h2>
        <form class="transaction-form">
            <input type="text" placeholder="Product Name" required>
            <input type="number" placeholder="Quantity" required>
            <input type="text" placeholder="Customer Name" required>
            <button type="submit">Submit Transaction</button>
        </form>
    </div>
</body>
</html> --}}