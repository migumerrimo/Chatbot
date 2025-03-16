<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatPink</title>
    <style>
        body {
            background-color: #ffcccb; /* Rosa claro */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            background-color: #ff69b4; /* Rosa intenso */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .chat-container {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #ffe6e6; /* Rosa muy claro */
        }

        .chat-message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
        }

        .chat-message.bot {
            background-color: #ff69b4; /* Rosa intenso */
            color: white;
            align-self: flex-start;
        }

        .chat-message.user {
            background-color: #ffffff; /* Blanco */
            color: #333;
            align-self: flex-end;
        }

        .input-container {
            background-color: #ff69b4; /* Rosa intenso */
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .input-container input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .input-container button {
            background-color: #ff1493; /* Rosa más oscuro */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .input-container button:hover {
            background-color: #ff0066; /* Rosa más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="header">
        Bienvenido a ChatPink<br>
        <small>Powered by Google APIs</small>
    </div>

    <div class="chat-container">
        <div class="chat-message bot">
            ¡Hola!, ¿en qué puedo ayudarte?
        </div>
    </div>

    <div class="input-container">
        <input type="text" placeholder="Escribe aquí...">
        <button>Enviar</button>
    </div>
</body>
</html>
