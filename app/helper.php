<?php

function getVoucherType($voucherType) {
    $voucherTypes = [
        1 => 'İlk Üyelik İnidrim Kuponu',
        2 => 'Üyelik Bazlı İndirim Kuponu',
        3 => 'Ürün Bazlı İndirim Kuponu',
        4 => 'Genel İndirim Kuponu'
    ];

    if (!array_key_exists($voucherType, $voucherTypes)) {
        return "İndirim Kuponu";
    }


    return $voucherTypes[$voucherType];
}

/*
 * Front-end tarafında 28/02/2022 diye date alıyoruz db yazdırırken 2022-02-28 diye çevirmek lazım
 */
function frontDateToDbDate($date)
{
    return \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d 00:00:00');;
}

/*
 * Db tarafında tutulan date'i düzgün şekilde front end tarafında göstermek için
 */
function dbDateToFrontDate($date)
{
    return date('d/m/Y', strtotime($date));
}

function generateVoucherCode()
{
    return strtoupper(uniqid('coupon', false));
}
