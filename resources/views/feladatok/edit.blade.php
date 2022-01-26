<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerkesztés</title>
</head>
<body>
<div>
          <p><a href="{{ route('feladatok.index') }}">Vissza a főoldalra</a></p>
          <form method='POST' action="{{ route('feladatok.update', $feladat->id) }}">
               @method('PATCH')
               @csrf
               <div>
                    <selection>Link:</selection><br>
                    <input type="text" name="link" value="{{ $feladat->link }}">
                    @error('link')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection>Szöveges:</selection><br>
                    <input type="text" name="szoveges" value="{{ $feladat->szoveges }}">
                    @error('szoveges')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection class="kitoltendo">Jegy:</selection><br>
                    <input type="number" name="jegy" value="{{ $feladat->jegy }}">
                    @error('jegy')
                         <p>{{ $message }}</p>
                    @enderror
                </div>
               <div>
                    <input type="submit" value="Edit">
               </div>
          </form>
     </div>
</body>
</html>