<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Box</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .chat-box {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .chat-header {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .chat-body {
            padding: 10px;
            height: 300px;
            overflow-y: auto;
        }

        .message {
            margin-bottom: 15px;
        }

        .message.sender {
            text-align: right;
        }

        .message.receiver {
            text-align: left;
        }

        .message p {
            padding: 8px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin: 0;
            display: inline-block;
            max-width: 80%;
        }

        .input-box {
            display: flex;
            margin-top: 10px;
        }

        .input-box input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
        }

        .input-box button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="chat-box">
        <div class="chat-header">Chat Box</div>
        <div class="chat-body" id="chatBody">
            <?php include('get_messages.php'); ?>
        </div>
        <div class="input-box">
            <form action="send_message.php" method="post">
                <input type="text" name="message" placeholder="Type your message..." required>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

</body>
</html>
