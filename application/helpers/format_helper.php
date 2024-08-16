<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('bulan'))
{
    function month($mnth)
    {
        switch ($mnth)
        {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
            	return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }

    function abbreviatedmonth($am)
    {
        switch ($am)
        {
            case 1:
                return "Jan";
                break;
            case 2:
                return "Feb";
                break;
            case 3:
                return "Mar";
                break;
            case 4:
            	return "Apr";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Jun";
                break;
            case 7:
                return "Jul";
                break;
            case 8:
                return "Ags";
                break;
            case 9:
                return "Sep";
                break;
            case 10:
                return "Okt";
                break;
            case 11:
                return "Nov";
                break;
            case 12:
                return "Des";
                break;
        }
    }

    function time_now($date){
        $waktuawal  = date_create($date); //waktu di setting
        $waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang
        $diff  = date_diff($waktuawal, $waktuakhir);
        if ($diff->y  > 0) {
            $tex=$diff->y.' year';
        }elseif ($diff->m >0 ) {
            $tex=$diff->m.' month';
        }elseif ($diff->d >7) {
            
            $tex=$diff->d.' minggu';
        }elseif ($diff->d < 7 && $diff->d > 2 ) {
            $tex=$diff->d.' hari';
        }elseif ($diff->h < 60 && $diff->h > 1 ) {
            $tex=$diff->h.' jam';
        }elseif ($diff->i < 60 && $diff->i > 1 ) {
            $tex=$diff->i.' menit';
        }else{
            $tex=$diff->s.' detik ';
        }
         $tex;
      return $tex;
    }
}
?>