<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<body>

        <h2>Contact Form Submission</h2>
       
        <p> Name:{{ $data['name'] }}</p>
        <p> Email:{{ $data['email'] }}</p>
        <p> Phone:{{ $data['phone'] }}</p>
        <p> Interest:{{ $data['interest'] }}</p>
        <p> Country:{{ $data['country'] }}</p>
        <p> Message:{{ $data['message'] }}</p>
</body>

</html>
