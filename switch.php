<?php 
    $nilai_php = 80;

    switch ($nilai_php){
        case ($nilai_php>=90 && $nilai_php<=100);
        echo "Nilai PHP : A";
        break;

        case ($nilai_php>=80 && $nilai_php<90);
        echo "Nilai PHP: B";
        break;

        case ($nilai_php>=70 && $nilai_php<80);
        echo "Nilai PHP: C";
        break;
        
        default;
        echo "Nilai PHP: D";
    }
?>
<script>
    var nilai_js = 0;

switch (nilai_js){
    case 90:
    console.log ("Nilai PHP : A");
    break;

    case 80:
    console.log ("Nilai PHP : B");
    break;

    case 70:
    console.log ("Nilai PHP : C");
    break;
    
    default:
    console.log ("Nilai PHP: D");
}
</script>
