<?php

$keyMaterials = ["fragments" => 0, "motes" => 0, "shards" => 0];
$junkMaterials = [];
$legendary = ["shards" => "Shadowmourne", "fragments" => "Valanyr", "motes" => "Dragonwrath"];

$win = false;

while ($win == false)
{
    $input = readline();

    $arr = explode(' ', $input);

    for ($i = 0; $i < count($arr); $i+=2)
    {
        $material = strtolower($arr[$i + 1]);
        if (key_exists($material, $keyMaterials))
        {
            $keyMaterials[$material] += $arr[$i];
            if ($keyMaterials[$material] >= 250)
            {
                $keyMaterials[$material] -= 250;
                $win = true;
                break;
            }
            continue;
        }
        if (!key_exists($material, $junkMaterials))
        {
            $junkMaterials[$material] = $arr[$i];
        }
        else
        {
            $junkMaterials[$material] += $arr[$i];
        }
    }
}

echo "$legendary[$material] obtained!".PHP_EOL;
arsort($keyMaterials);
foreach ($keyMaterials as $key => $value)
{
    echo "$key: $value".PHP_EOL;
}
ksort($junkMaterials);
foreach ($junkMaterials as $key => $value)
{
    echo "$key: $value" . PHP_EOL;
}