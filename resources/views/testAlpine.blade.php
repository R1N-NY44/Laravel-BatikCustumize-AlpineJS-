<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- <div x-data="{ count: 0 }">
        <form action="" method="POST">
            <a x-on:click="count++" href="#">Increment</a>
            <input x-model="count" type="number" name="Angka">
            <a x-on:click="count--" href="#">Decrement</a>

            <input type="submit" value="Submit">
        </form>
    </div> --}}

    <div x-data="{
        motif: 1, // Set the default value for 'motif' to 1
        desain: 'BESAR', // Set the default value for 'desain' to 'BESAR'
    }">

        <form>
            <h1>Form Input</h1>

            <div class="motif">
                <label for="motif">Pilih motif</label>
                <input type="radio" value="1" x-model="motif"> 1
                <input type="radio" value="2" x-model="motif"> 2
                <input type="radio" value="3" x-model="motif"> 3

                </div>

            <div class="desain">
                <label for="desain">Pilih desain</label>
                <input type="radio" value="BESAR" x-model="desain"> Besar
                <input type="radio" value="KECIL" x-model="desain"> Kecil
            </div>

            <button type="submit">Submit</button>
        </form>

        <div class="hasil">
            <input class="w-full" :value="'ASSET/Frame ' + motif + ' ' + desain + '.png'" type="text" name="foto">
            {{-- <p>motif: <span x-text="motif"></span></p>
            <p>desain: <span x-text="desain"></span> </p> --}}
            <img class="h-20" :src="'ASSET/Frame ' + motif + ' ' + desain + '.png'" :alt="'ASSET/Frame ' + motif + ' ' + desain + '.png'">
        </div>

    </div>




</body>
</html>
