<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Property Enquiry</title>
</head>

<body>
    <h2>New Property Enquiry Received</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['number'] }}</p>
    <p><strong>Property Code:</strong> {{ $data['property_code'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>

    <hr>
    <p><small>Submitted on {{ now()->format('d M Y, h:i A') }}</small></p>
</body>

</html>
