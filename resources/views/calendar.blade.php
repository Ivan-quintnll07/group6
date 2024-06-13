
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Tareas</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        .calendar {
            border-collapse: collapse;
        }
        .calendar th,
        .calendar td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .task-list {
            margin-left: 20px;
            list-style-type: none;
        }
        .task-list li {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Calendar Section -->
        <table class="calendar">
            <thead>
                <tr>
                    <th colspan="7">Mes</th>
                </tr>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>M</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                    <th>D</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fill in the calendar days here -->
                <!-- Example: <tr><td>1</td><td>2</td>...</tr> -->
            </tbody>
        </table>
        <!-- Task List Section -->
        <ul class="task-list">
            <!-- Example tasks: -->
            <li>Clean the garden <i class="far fa-trash-alt"></i></li>
            <!-- Add more tasks here -->
        </ul>
    </div>
</body>
</html>
