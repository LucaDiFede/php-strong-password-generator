<?php
    var_dump($_GET);

    if (isset($_GET['length'])) {
    $passLength = intval($_GET['length']);

    var_dump($passLength);

    if ($passLength >= 3 && $passLength <= 5) {

        $validCharacthers = '1234567890';
        $min = 0;
        $max = strlen($validCharacthers) - 1;

        $password = '';
        for ($i = 0; $i < $passLength; $i++) {
            $randomCharacters = $validCharacthers[mt_rand($min, $max)];
            var_dump($randomCharacters);

            $password .= $randomCharacters;
        }

        var_dump($passLength);
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        PHP strong password
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
          <div class="row">
            <div class="col">
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="length" class="visually-hidden">Lunghezza Password</label>
                        <input type="number" class="form-control" required min="3" max="5" name="length" id="length" placeholder="Inserisci lunghezza della password...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary mb-3">
                            Confirm identity
                        </button>
                    </div>
                </form>
            </div>
          </div>

          <div class="row">
            <div class="col">
                <h1>
                    Password:
                    <?php
                        echo $password;
                    ?>
                </h1>
            </div>
          </div>
        </div>
    </main>

</body>
</html>