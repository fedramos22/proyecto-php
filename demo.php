
<?php
//Variables
$name = "Federico";
$isDev = true;
$age = 71;

$isOld = $age > 20;

define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

$output = "Hola  \"$name\", con una edad de  $age ";
$outputAge = match (true) {
    $age < 2    => "Eres un bebé, $name",
    $age < 10   => "Eres un niño, $name",
    $age < 18   => "Eres un adolescente, $name",
    $age == 18  => "Eres mayor de edad, $name",
    $age < 40   => "Eres un adulto joven, $name",
    $age < 60   => "Eres un adulto viejo, $name",
    default     => "Hueles más a madera que a fruta, $name",
};

$bestLanguages = ["PHP", "Javascript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
    "name" => "Felipe",
    "age" => 20,
    "languages" => $bestLanguages
]

?>

<ul>
    <?php foreach ($bestLanguages as $key => $lenguage): ?>
        <li><?= $key . " " . $lenguage ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>

<img src="<?= LOGO_URL ?>" alt="logo" width="200">
<h1>
    <?= $output ?>
</h1>

<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>