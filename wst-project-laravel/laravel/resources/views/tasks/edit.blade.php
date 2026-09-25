<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f1ef;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fffdf7;
            padding: 25px;
            border-radius: 8px;
        }

        h1 {
            color: #123c42;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 9px;
            border: 1px solid #b8d4ce;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        button {
            margin-top: 20px;
            background: #167d78;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .back {
            margin-left: 10px;
            color: #167d78;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Task</h1>

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Task Name:</label>
        <input type="text" name="task_name"
               value="{{ $task->task_name }}" required>

        <label>Description:</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <label>Status:</label>
        <select name="status">
            <option value="Pending"
                {{ $task->status == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="Completed"
                {{ $task->status == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>
        </select>

        <label>Due Date:</label>
        <input type="date" name="due_date"
               value="{{ $task->due_date }}">

        <button type="submit">Update Task</button>

        <a href="/" class="back">Cancel</a>
    </form>

</div>

</body>
</html>