<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacts</title>
        <style>
            
            body { font-family: Arial, sans-serif; height: 100%; margin: 0;}
            .navbar {
                background: #1f2937;
                padding: 14px 24px;
                box-shadow: 0 2px 10px rgba(0 , 0 , 0 , 0 , 0.15);
            }
            .nav-container {
                display:flex;
                gap:20px;
                align-items:center;
            }
            .nav-link {
                color: #ffffff;
                text-decoration: none;
                font-size: 16px;
                font-weight: 500;
                padding: 8px 12px;
                border-radius: 6px;
                transition: all 0.2s ease-in-out;
            }
            .nav-link:hover {
                background: #374151;
                color: #ffffff;
                transform: translateY(-1px);
            }
            .nav-link.active {
                background: #3b82f6;
                color: white;
            }
            h1 {
                text-align:center;
                padding:10px;
                font-size:50px;
            }
            a {
                text-decoration:none;
            }
            .btn {
                display: inline-block;
                padding: 8px 14px;
                margin-right: 6px;
                border: none;
                border-radius: 5px;
                color: white;
                text-decoration: none;
                font-size: 14px;
                cursor: pointer;
            }
            .inline {
                display: inline;
            }
            .btn-detail {
                background-color: #f1c40f;
                color: black;
            }
            .btn-edit {
                background-color: #2ecc71;
            }
            .btn-delete {
                background-color: #e74c3c;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                font-family: Arial, sans-serif;
                background-color: #ffffff;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            table thead {
                background-color: #2c3e50;
                color: white;
            }
            table thead th {
                padding: 12px 15px;
                text-align: left;
                font-size: 20px;
                text-align:center;
            }

            table tbody td {
                padding: 12px 15px;
                border-bottom: 1px solid #eee;
                font-size: 20px;
                text-align:center;
            }

            table tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            h2{
                margin:30px;
            }

            table tbody tr:hover {
                background-color: #f1f7ff;
                transition: 0.2s;
            }

            table tbody tr:last-child td {
                border-bottom: none;
            }

            .auth-form {
                background: #ffffff;
                padding: 30px;
                width: 320px;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            }
            .auth-form input {
                width: 100%;
                padding: 10px 12px;
                margin-bottom: 12px;
                border: 1px solid #ddd;
                border-radius: 6px;
                font-size: 14px;
                outline: none;
            }
            .auth-form label {
                text-align: center;
                margin-bottom: 20px;
                color: #2c3e50;
            }
            .auth-form button {
                width: 100%;
                padding: 10px;
                background-color: #3498db;
                color: white;
                border: none;
                border-radius: 6px;
                font-size: 15px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="nav-container">
                <a href="/contacts" class="nav-link">Contacts</a>
                <a href="/contacts/create" class="nav-link">Add Contact</a>
            </div>
        </nav>

        @yield('content')
    </body>
</html>
