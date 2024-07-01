<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence Generator</title>
</head>
<body>
    <h1>Fibonacci Sequence Generator</h1>

    <!-- Fibonacci sequence input form -->
    <form action="/" method="POST">
        @csrf
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="0" required>
        <button type="submit">Generate</button>
    </form>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Display Fibonacci sequence result -->
    @if (!is_null($sequence))
        <h2>Fibonacci Sequence Result</h2>
        <p>The Fibonacci sequence is:</p>
        <p>
            {{ implode(', ', $sequence) }}
        </p>
    @endif
</body>
</html>
