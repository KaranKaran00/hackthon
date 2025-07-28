<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post Notice</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: rgba(136, 1, 1, 0.35) 0px 8px 25px;
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus,
        textarea:focus {
            border-color: #4a90e2;
            outline: none;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: rgb(168, 12, 6);
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #fa0202;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Post Announcements</h2>
        <form method="post" action="email.php">
            <label for="title">Title:</label>
            <input type="text" name="subject" id="title">

            <label for="category">Category:</label>
            <select name="category" id="category">
                <option value="Exams">Exams</option>
                <option value="Events">Events</option>
                <option value="Holidays">Holidays</option>
            </select>

            <label for="content">Content:</label>
            <textarea name="message" id="content"></textarea>

            <label for="publish_date">Publish Date:</label>
            <input type="date" name="datess" id="publish_date">

            <input type="submit" value="Post">
        </form>
    </div>
</body>
</html>
