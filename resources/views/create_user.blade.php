<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('user.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="npm">NPM:</label></td>
                <td><input type="text" id="npm" name="npm"></td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas:</label></td>
                <td><input type="text" id="kelas" name="kelas"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>