<!DOCTYPE html>
<html lang="hu">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Feladat hozzáadása</title>

</head>
<body>
     <div>
          <h1>Új feladat</h1>
          <p><a href="{{ route('feladatok.index') }}">Vissza a főoldalra</a></p>
          <form method='POST' action="{{ route('feladatok.store') }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div>
                    <selection>Link:</selection><br>
                    <input type="text" name="link" value="{{ old('link') }}">
                    @error('link')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection>Szöveges:</selection><br>
                    <input type="text" name="szoveges" value="{{ old('szoveges') }}">
                    @error('szoveges')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
               <selection>Jegy:</selection><br>
                    <input type="number" name="pontszam_ertekeles" value="{{ old('jegy') }}">
                    @error('jegy')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <input type="submit" value="Create">
               </div>
          </form>
     </div>
</body>
</html>