<?php
function diff($old, $new)
{
    $matrix = array();
    $maxlen = 0;
    foreach ($old as $oindex => $ovalue) {
        $nkeys = array_keys($new, $ovalue);
        foreach ($nkeys as $nindex) {
            $matrix[$oindex][$nindex] = isset($matrix[$oindex - 1][$nindex - 1]) ?
                $matrix[$oindex - 1][$nindex - 1] + 1 : 1;
            if ($matrix[$oindex][$nindex] > $maxlen) {
                $maxlen = $matrix[$oindex][$nindex];
                $omax   = $oindex + 1 - $maxlen;
                $nmax   = $nindex + 1 - $maxlen;
            }
        }
    }
    if ($maxlen == 0) return array(array('d' => $old, 'i' => $new));
    return array_merge(
        diff(array_slice($old, 0, $omax), array_slice($new, 0, $nmax)),
        array_slice($new, $nmax, $maxlen),
        diff(array_slice($old, $omax + $maxlen), array_slice($new, $nmax + $maxlen)));
}

function htmlDiff($old, $new, $byChar = true)
{
    $ret  = '';
    $diff = diff(preg_split("/[\s]+/", $old), preg_split("/[\s]+/", $new));
    foreach ($diff as $k) {
        if (is_array($k))
            if ($byChar) {
                $diffW = diff(str_split($k['d'][0]), str_split($k['i'][0]));
                foreach ($diffW as $kW) {
                    if (is_array($kW)) {
                        $ret .= (!empty($kW['d']) ? "<span style='background-color: red'>" . implode(' ', $kW['d']) . "</span>" : '') .
                            (!empty($kW['i']) ? "<span style='background-color:greenyellow;'>" . implode(' ', $kW['i']) . "</span>" : '');
                    } else $ret .= $kW;
                }
                $ret .= ' ';
            } else {
                $ret .= (!empty($k['d']) ? "<span style='background-color: red'>" . implode(' ', $k['d']) . "</span> " : '') .
                    (!empty($k['i']) ? "<span style='background-color:greenyellow;'>" . implode(' ', $k['i']) . "</span> " : '');
            }
        else $ret .= $k . ' ';
    }
    return $ret;
}

?>
    <form action="cmpText.php" method="post">
        <p>для сравнения по словам $byChar = false</p>
        <input type="submit">
        <br>
        <textarea name="text1" id="text1" cols="110" rows="10"><?= $_POST['text1'] ?? '' ?></textarea>
        <textarea name="text2" id="text2" cols="110" rows="10"><?= $_POST['text2'] ?? '' ?></textarea>
    </form>
<?php
if (!empty($_POST)) echo htmlDiff($_POST['text1'], $_POST['text2']);


$content = '<span>RomanoffAK440944</span>#####span style=background-color:red!!!!!RomanoffAK440944#####/span!!!!!';
$content = htmlspecialchars($content);
$content = str_replace(['#####', '!!!!!'], ['<', '>'], $content);
?>
<?= $content ?>