<?php
function kelulusan($total_nilai) {
    if ($total_nilai > 55) {
        return "lulus";
    } else {
        return "tidak lulus";
    }
}

function grade($total_nilai) {
    if ($total_nilai <= 100 && $total_nilai >= 85) {
        return "A";
    } elseif ($total_nilai <= 84 && $total_nilai >= 65) {
        return "B";
    } elseif ($total_nilai <= 69 && $total_nilai >= 50) {
        return "C";
    } elseif ($total_nilai <= 54 && $total_nilai >= 35) {
        return "D";
    } elseif ($total_nilai <= 34 && $total_nilai >= 0) {
        return "E";
    } else {
        return "I";
    }
}
?>