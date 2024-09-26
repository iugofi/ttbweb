<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Salary Calculator</title>
</head>
<body>

    <h2>Calculate Prorated Salary</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('salary.calculate') }}">
        @csrf

        <label for="monthlySalary">Monthly Salary:</label>
        <input type="number" name="monthlySalary" id="monthlySalary" value="{{ old('monthlySalary') }}" required><br><br>

        <label for="daysWorked">Days Worked:</label>
        <input type="number" name="daysWorked" id="daysWorked" value="{{ old('daysWorked') }}" required><br><br>

        <label for="totalDaysInMonth">Total Days in Month:</label>
        <input type="number" name="totalDaysInMonth" id="totalDaysInMonth" value="{{ old('totalDaysInMonth') }}" required><br><br>

        <button type="submit">Calculate Salary</button>
    </form>

    @if (isset($calculatedSalary))
        <h3>Calculated Salary: {{ $calculatedSalary }}</h3>
    @endif

</body>
</html>
