<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <h1>Travels</h1>

    @dump($travels)

    @foreach ($travels as $travel)
        <div class="card" style="border: 1px solid black">
            <h6>
                Name: {{$travel['name']}}
            </h6>
            <h6>
                Price: {{$travel['price']}}
            </h6>
            <h6>
                description: {{$travel['description']}}
            </h6>
            <h6>
                Destination: {{$travel['destination']}}
            </h6>
            <h6>
                Votes: {{$travel['votes']}}
            </h6>
        </div>
    @endforeach
</body>
</html>