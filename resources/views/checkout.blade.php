<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>
<body>

    <h1>Stripe Example</h1>

    <form action="/session" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <p>Something</p>
        <p><strong>US$6.66</strong></p>
        <button type="submit" id="checkout-live-button">Pay</button>
    </form>

</body>
</html>