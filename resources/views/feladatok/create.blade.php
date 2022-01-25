<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
          <h1>Új Beadás</h1>
          @if ($errors->any())
               @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
               @endforeach
          @endif

          <p><a href="{{ route('feladatok.index') }}">Vissza a főoldalra</a></p>
          <form method='POST' action="{{ route('feladatok.store') }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div>
                    <selection>Link:</selection><br>
                    <input type="text" name="url" value="{{ old('link') }}">
                    @error('url')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <selection>Szöveges értékelés:</selection><br>
                    <input type="text" name="szoveges" value="{{ old('szoveges') }}">
                    @error('szovegess')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
               <selection class="kitoltendo">Jegy:</selection><br>
                    <input type="number" name="jegy" value="{{ old('jegy') }}">
                    @error('jegy')
                         <p>{{ $message }}</p>
                    @enderror
               </div>
               <div>
                    <input type="submit" value="Létrehoz">
               </div>
          </form>
     </div>
</body>
</html>