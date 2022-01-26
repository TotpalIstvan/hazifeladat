<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beadott feladatok</title>
</head>
<body>
<div>
        <h1>Házi feladatok</h1>
        <a href=""><button>Új házi hozzáadása</button></a>
        <table>
            <thead>
                <th>Url</th>
                <th>Szöveges értékelés</th>
                <th>Jegy</th>
            </thead>
            <tbody>
                @foreach ($feladatok as $h)
                    <tr>
                        <td class="kozep">{{ link }}</td>
                        <td class="sorkizart">{{ szoveges }}</td>
                        <td class="kozep">{{ jegy }}</td>
                        <td>
                            <form method="POST" action="{{ route('feladatok.destroy') }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Törlés</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('feladatok.edit') }}">Szerkesztés</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>