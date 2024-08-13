<?php
$nilai_php = 90;

if (($nilai_php >= 90)&&($nilai_php <= 100)){
    echo "Nilai PHP: A";
} elseif (($nilai_php >= 80)&&($nilai_php <= 90)){
    echo "Nilai PHP: B";
} elseif (($nilai_php >= 70)&&($nilai_php <= 80)){
    echo "Nilai PHP: C";
} elseif (($nilai_php >= 0)&&($nilai_php <= 70)){
    echo "Nilai PHP: D";
}else{
    echo "Nilai tidak Valid";
}
?>
<script>
    var nilai_js = 90;
        if ((nilai_js >= 90)&&(nilai_js <= 100)){
        console.log("Nilai PHP: A");
    } else if ((nilai_js >= 80)&&(nilai_js <= 90)){
        console.log("Nilai PHP: B");
    } else if ((nilai_js >= 70)&&(nilai_js <= 80)){
        console.log("Nilai PHP: C");
    } else if ((nilai_js >= 0)&&(nilai_js <= 70)){
        console.log("Nilai PHP: D");
    }else{
        console.log("Nilai tidak Valid")
    }
</script>