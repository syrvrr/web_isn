<?php
function tanggal($tanggal)
{
    $get_date=explode("-",$tanggal);
    $tanggal="$get_date[2]";
    $bulan="$get_date[1]";
    $tahun="$get_date[0]";

    if($bulan=="01"){
        $bulan="Januari";
    }elseif($bulan=="02"){
        $bulan="Februari";
    }elseif($bulan=="03"){
        $bulan="Maret";
    }elseif($bulan=="04"){
        $bulan="April";
    }elseif($bulan=="05"){
        $bulan="Mei";
    }elseif($bulan=="06"){
        $bulan="Juni";
    }elseif($bulan=="07"){
        $bulan="Juli";
    }elseif($bulan=="08"){
        $bulan="Agustus";
    }elseif($bulan=="09"){
        $bulan="September";
    }elseif($bulan=="10"){
        $bulan="Oktober";
    }elseif($bulan=="11"){
        $bulan="November";
    }elseif($bulan=="12"){
        $bulan="Desember";
    }   
    return "$tanggal $bulan $tahun";
}

function FormatCurrency($money)
{
    if($money){
    //return number_format($money,0,',','.');
    return number_format($money, 2);
    }else{
    $money="0";
    return $money; 
    }
}



function terbilang ($angka) {
        
    $angka = (float)$angka;
    $bilangan = array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan','Sepuluh','Sebelas');

    if ($angka < 12) {
        return $bilangan[$angka];
    } else if ($angka < 20) {
        return $bilangan[$angka - 10] . ' Belas';
    } else if ($angka < 100) {
        $hasil_bagi = (int)($angka / 10);
        $hasil_mod = $angka % 10;
        return trim(sprintf('%s Puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
    } else if ($angka < 200) {
        return sprintf('Seratus %s', terbilang($angka - 100));
    } else if ($angka < 1000) {
        $hasil_bagi = (int)($angka / 100);
        $hasil_mod = $angka % 100;
        return trim(sprintf('%s Ratus %s', $bilangan[$hasil_bagi], terbilang($hasil_mod)));
    } else if ($angka < 2000) {
        return trim(sprintf('Seribu %s', terbilang($angka - 1000)));
    } else if ($angka < 1000000) {
        $hasil_bagi = (int)($angka / 1000); 
        $hasil_mod = $angka % 1000;
        return sprintf('%s Ribu %s', terbilang($hasil_bagi), terbilang($hasil_mod));
    } else if ($angka < 1000000000) {
        $hasil_bagi = (int)($angka / 1000000);
        $hasil_mod = $angka % 1000000;
        return trim(sprintf('%s Juta %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
    } else if ($angka < 1000000000000) {
        $hasil_bagi = (int)($angka / 1000000000);
        $hasil_mod = fmod($angka, 1000000000);
        return trim(sprintf('%s Milyar %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
    } else if ($angka < 1000000000000000) {
        $hasil_bagi = $angka / 1000000000000;
        $hasil_mod = fmod($angka, 1000000000000);
        return trim(sprintf('%s Triliun %s', terbilang($hasil_bagi), terbilang($hasil_mod)));
    } else {
        return 'Data Salah';
    }
}



     function Formatrp_php($xnilai=NULL){
        if ($xnilai!=NULL){    
            if (is_numeric($xnilai)){
                $tempdt1 = number_format($xnilai, 4,'.', ',');
                $tempdt2 = $tempdt1;
                if (substr($tempdt2,-1)==0){
                    $tempdt2=substr($tempdt1, 0,-1);
                }
                $tempdt3 = $tempdt2;
                if (substr($tempdt2,-1)==0){
                    $tempdt3=substr($tempdt2, 0,-1);
                }
                return $tempdt3;
            }else{
                return "0.00";
            }    
        }else{
            return "0.00";   
        }
        // $tgl=date_create($arrdata[$i][10]); echo date_format($tgl,"d-M-y");
    }
    function Formatrp_tampil($xnilai=NULL){
        if ($xnilai!=NULL){    
            if (is_numeric($xnilai)){
                $tempdt3 = number_format($xnilai, 2,'.', ',');

                return $tempdt3;
            }else{
                return "0.00";
            }    
        }else{
            return "0.00";   
        }
        // $tgl=date_create($arrdata[$i][10]); echo date_format($tgl,"d-M-y");
    }    
    function vnChar($nilteks=NULL){
        if($nilteks==NULL || empty($nilteks || trim($nilteks)=='' )){
            $hasil='';
        }else{
            $hasil=str_replace("'", "", $nilteks);
            $hasil=str_replace('"', '', $hasil);
            $hasil=str_replace('/', '', $hasil);            
            $hasil=trim($hasil);
        }
        return $hasil;
    }
    function vnAngka($nilteks=NULL){
        if($nilteks==NULL || empty($nilteks)){
            $hasil=0;
        }else{
            $hasil=str_replace(",", "", $nilteks);
            $hasil=trim($hasil);
        }
        return $hasil;
    }    
    function vTgl($niltgl=NULL){
        $hasil='';
        if($niltgl!=NULL){
            if(strtotime($niltgl) == true && $niltgl != '1970-01-01' && $niltgl != '0000-00-00')  {       
                $hasil=date('d-m-Y', strtotime($niltgl));
            }
        }
        return $hasil;
    }   
    function vTgl2($niltgl=NULL){
        $hasil='';
        if($niltgl!=NULL){
            if(strtotime($niltgl) == true && $niltgl != '1970-01-01' && $niltgl != '0000-00-00')  {       
                $hasil=date('d/M/Y', strtotime($niltgl));
            }
        }
        return $hasil;
    } 
    function vTgl3($niltgl=NULL){
        $hasil='';
        if($niltgl!=NULL){
            if(strtotime($niltgl) == true && $niltgl != '1970-01-01' && $niltgl != '0000-00-00')  {       
                $hasil=date('d-m-Y', strtotime($niltgl));
            }
        }else{
            $hasil=date('d-m-Y');
        }
        return $hasil;
    }
    function vTgl_jam($niltgl=NULL){
        $hasil='';
        if($niltgl!=NULL){
            if(strtotime($niltgl) == true && $niltgl != '1970-01-01' && $niltgl != '0000-00-00')  {       
                $hasil=date('d/M/Y H:s', strtotime($niltgl));
            }
        }else{
            $hasil='';
        }
        return $hasil;
    }   
    function vTgl_save($niltgl=NULL){
        $hasil='';
        if($niltgl!=NULL){
            if(strtotime($niltgl) == true && $niltgl != '1970-01-01' && $niltgl != '0000-00-00')  {       
                $hasil=date('Y-m-d', strtotime($niltgl));
            }
        }else{
            $hasil='';
        }
        return $hasil;
    }       

    function vTgl_awalthn($niltgl=NULL){
        $hasil='';
        if($niltgl!=NULL){
            if(strtotime($niltgl) == true && $niltgl != '1970-01-01' && $niltgl != '0000-00-00')  {
                $thn=date('Y', strtotime($niltgl));
                $hasil=$thn.'-01-01';
            }
        }else{
            $thn=date('Y');
            $hasil=$thn.'-01-01';
        }
        return $hasil;
    }        