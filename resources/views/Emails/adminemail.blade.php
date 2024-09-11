<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">

    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 0 auto;">
        <div style="text-align: center; padding-bottom: 20px; border-bottom: 1px solid #dddddd;">
            <h1 style="color: #333333; font-size: 24px; margin: 0;">New Form Submission</h1>
        </div>

        <div style="padding: 20px 0;">
            <p style="font-size: 16px; color: #555555; line-height: 1.6; margin: 12px 0;">
                <strong style="color: #333333;">Name:</strong> {{ $data['name'] }}
            </p>
            <p style="font-size: 16px; color: #555555; line-height: 1.6; margin: 12px 0;">
                <strong style="color: #333333;">Email:</strong> {{ $data['email'] }}
            </p>
            <p style="font-size: 16px; color: #555555; line-height: 1.6; margin: 12px 0;">
                <strong style="color: #333333;">Phone:</strong> {{ $data['phone'] }}
            </p>
            <p style="font-size: 16px; color: #555555; line-height: 1.6; margin: 12px 0;">
                <strong style="color: #333333;">Message:</strong><br>{{ $data['message'] }}
            </p>
        </div>
    </div>

</body>
</html>
