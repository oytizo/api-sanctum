<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    <form method="POST" action="{{ Route('logout') }}">
        @csrf
                <input type="submit" value="submit">
    </form>
    <!-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button>Logout</button>
                     </form> -->
    <h1 style="color: yellow;">hellow</h1>
    <form action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
    <input type="file" name="image">
    <input type="submit">
    </form>
    <div>
        <table style="border: 1px solid red;">
            <thead>
                <tr>
                    <th>name</th>
                    <th>image</th>
                </tr>
            </thead>
            <tbody>
            @foreach($alll as $none)
            <tr>
            <td>{{ $none->name }}</td>
            <td><img style="width: 50px;" src="{{ asset('image/'.$none->image) }}" alt=""></td>

            </tr>
              @endforeach
            </tbody>
        </table>

        
    </div>
</body>

</html>