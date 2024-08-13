<!DOCTYPE html>
<html>
<head>
    <title>{{ $EmailSubject ?? 'Manual Email' }}</title>
</head>
<body>
    {!! $EmailBody !!}
</body>
</html>
