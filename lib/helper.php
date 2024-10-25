<?php

// if (!function_exists('base_url')) {
    function base_url() {
        return "http://localhost/BukuTamuDinasPerhubungan/";
    }
// }

// if (!function_exists('flash')) {
    function flash($tipe, $pesan = '') {
        if (empty($pesan)) {
            $pesan = @$_SESSION[$tipe];
            unset($_SESSION[$tipe]);
            return $pesan;
        } else {
            $_SESSION[$tipe] = $pesan;
        }
    }
// }

// if (!function_exists('cekLogin')) {
    function cekLogin() {
        $username = @$_SESSION['username'];
        $level = @$_SESSION['level'];

        if (empty($username) AND empty($level)) {
            header("location:login.php");
        }
    }
// }

// if (!function_exists('sudahLogin')) {
    function sudahLogin() {
        $username = @$_SESSION["username"];
        $level = @$_SESSION["level"];

        if (!empty($username) AND !empty($level)) {
            header("location:daftar.php");
        }
    }
// }

?>
