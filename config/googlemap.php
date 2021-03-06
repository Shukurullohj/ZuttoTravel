<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Api key
    |--------------------------------------------------------------------------
    |
    | set google api key
    |
    */

    'google_api_key' => env('GOOGLE_APIKEY'),

    /*
    |--------------------------------------------------------------------------
    | URL path
    |--------------------------------------------------------------------------
    | set URL path for the map
    |
    */

    'path' => 'map',

    /*
    |--------------------------------------------------------------------------
    | middleware
    |--------------------------------------------------------------------------
    | set middleware for GoogleMapController,
    | default guest,
    | or - auth, auth:admin
    |
    */

    'middleware_for_view' => 'auth',

    /*
    |--------------------------------------------------------------------------
    | validation regx
    |--------------------------------------------------------------------------
    |
    | This file is for storing the validation regx for custom rule,
    |
    |
    */

    'countries' =>[
        (object)array("name"=>"Select Your country","dial_code"=>null,"code"=>"SELECT","postal_format"=>array()),
        (object)array("name"=>"Afghanistan","dial_code"=>"+93","code"=>"AF","postal_format"=>array("####")),
        (object)array("name"=>"Åland Islands","dial_code"=>"","code"=>"AX","postal_format"=>array("#####", "AX-#####")),
        (object)array("name"=>"Albania","dial_code"=>"+355","code"=>"AL","postal_format"=>array("####")),
        (object)array("name"=>"Algeria","dial_code"=>"+213","code"=>"DZ","postal_format"=>array("#####")),
        (object)array("name"=>"AmericanSamoa","dial_code"=>"+1 684","code"=>"AS","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Andorra","dial_code"=>"+376","code"=>"AD","postal_format"=>array("AD###", "#####")),
        (object)array("name"=>"Angola","dial_code"=>"+244","code"=>"AO","postal_format"=>array()),
        (object)array("name"=>"Anguilla","dial_code"=>"+1 264","code"=>"AI","postal_format"=>array("AI-2640")),
        (object)array("name"=>"Antarctica","dial_code"=>null,"code"=>"AQ","postal_format"=>array("BIQQ 1ZZ")),
        (object)array("name"=>"Antigua and Barbuda","dial_code"=>"+1268","code"=>"AG","postal_format"=>array()),
        (object)array("name"=>"Argentina","dial_code"=>"+54","code"=>"AR","postal_format"=>array("####", "@####@@@")),
        (object)array("name"=>"Armenia","dial_code"=>"+374","code"=>"AM","postal_format"=>array("####")),
        (object)array("name"=>"Aruba","dial_code"=>"+297","code"=>"AW","postal_format"=>array()),
        (object)array("name"=>"Australia","dial_code"=>"+61","code"=>"AU","postal_format"=>array("####")),
        (object)array("name"=>"Austria","dial_code"=>"+43","code"=>"AT","postal_format"=>array("####")),
        (object)array("name"=>"Azerbaijan","dial_code"=>"+994","code"=>"AZ","postal_format"=>array("AZ ####")),
        (object)array("name"=>"Bahamas","dial_code"=>"+1 242","code"=>"BS","postal_format"=>array()),
        (object)array("name"=>"Bahrain","dial_code"=>"+973","code"=>"BH","postal_format"=>array("###", "####")),
        (object)array("name"=>"Bangladesh","dial_code"=>"+880","code"=>"BD","postal_format"=>array("####")),
        (object)array("name"=>"Barbados","dial_code"=>"+1 246","code"=>"BB","postal_format"=>array("BB#####")),
        (object)array("name"=>"Belarus","dial_code"=>"+375","code"=>"BY","postal_format"=>array("######")),
        (object)array("name"=>"Belgium","dial_code"=>"+32","code"=>"BE","postal_format"=>array("####")),
        (object)array("name"=>"Belize","dial_code"=>"+501","code"=>"BZ","postal_format"=>array()),
        (object)array("name"=>"Benin","dial_code"=>"+229","code"=>"BJ","postal_format"=>array()),
        (object)array("name"=>"Bermuda","dial_code"=>"+1 441","code"=>"BM","postal_format"=>array("@@ ##", "@@ @@")),
        (object)array("name"=>"Bhutan","dial_code"=>"+975","code"=>"BT","postal_format"=>array("#####")),
        (object)array("name"=>"Bolivia, Plurinational State of","dial_code"=>"+591","code"=>"BO","postal_format"=>array()),
        (object)array("name"=>"Bosnia and Herzegovina","dial_code"=>"+387","code"=>"BA","postal_format"=>array("#####")),
        (object)array("name"=>"Botswana","dial_code"=>"+267","code"=>"BW","postal_format"=>array()),
        (object)array("name"=>"Brazil","dial_code"=>"+55","code"=>"BR","postal_format"=>array("#####-###", "#####")),
        (object)array("name"=>"British Indian Ocean Territory","dial_code"=>"+246","code"=>"IO","postal_format"=>array("BBND 1ZZ")),
        (object)array("name"=>"Brunei Darussalam","dial_code"=>"+673","code"=>"BN","postal_format"=>array("@@####")),
        (object)array("name"=>"Bulgaria","dial_code"=>"+359","code"=>"BG","postal_format"=>array("####")),
        (object)array("name"=>"Burkina Faso","dial_code"=>"+226","code"=>"BF","postal_format"=>array()),
        (object)array("name"=>"Burundi","dial_code"=>"+257","code"=>"BI","postal_format"=>array()),
        (object)array("name"=>"Cambodia","dial_code"=>"+855","code"=>"KH","postal_format"=>array("#####")),
        (object)array("name"=>"Cameroon","dial_code"=>"+237","code"=>"CM","postal_format"=>array()),
        (object)array("name"=>"Canada","dial_code"=>"+1","code"=>"CA","postal_format"=>array("@#@ #@#")),
        (object)array("name"=>"Cape Verde","dial_code"=>"+238","code"=>"CV","postal_format"=>array("####")),
        (object)array("name"=>"Cayman Islands","dial_code"=>"+ 345","code"=>"KY","postal_format"=>array("KY#-####")),
        (object)array("name"=>"Central African Republic","dial_code"=>"+236","code"=>"CF","postal_format"=>array()),
        (object)array("name"=>"Chad","dial_code"=>"+235","code"=>"TD","postal_format"=>array()),
        (object)array("name"=>"Chile","dial_code"=>"+56","code"=>"CL","postal_format"=>array("#######", "###-####")),
        (object)array("name"=>"China","dial_code"=>"+86","code"=>"CN","postal_format"=>array("######")),
        (object)array("name"=>"Christmas Island","dial_code"=>"+61","code"=>"CX","postal_format"=>array("####")),
        (object)array("name"=>"Cocos (Keeling] Islands","dial_code"=>"+61","code"=>"CC","postal_format"=>array("####")),
        (object)array("name"=>"Colombia","dial_code"=>"+57","code"=>"CO","postal_format"=>array("######")),
        (object)array("name"=>"Comoros","dial_code"=>"+269","code"=>"KM","postal_format"=>array()),
        (object)array("name"=>"Congo","dial_code"=>"+242","code"=>"CG","postal_format"=>array()),
        (object)array("name"=>"Congo, The Democratic Republic of the","dial_code"=>"+243","code"=>"CD","postal_format"=>array()),
        (object)array("name"=>"Cook Islands","dial_code"=>"+682","code"=>"CK","postal_format"=>array()),
        (object)array("name"=>"Costa Rica","dial_code"=>"+506","code"=>"CR","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Cote d'Ivoire","dial_code"=>"+225","code"=>"CI","postal_format"=>array()),
        (object)array("name"=>"Croatia","dial_code"=>"+385","code"=>"HR","postal_format"=>array("#####")),
        (object)array("name"=>"Cuba","dial_code"=>"+53","code"=>"CU","postal_format"=>array("#####")),
        (object)array("name"=>"Cyprus","dial_code"=>"+537","code"=>"CY","postal_format"=>array("####")),
        (object)array("name"=>"Czech Republic","dial_code"=>"+420","code"=>"CZ","postal_format"=>array("### ##")),
        (object)array("name"=>"Denmark","dial_code"=>"+45","code"=>"DK","postal_format"=>array("####")),
        (object)array("name"=>"Djibouti","dial_code"=>"+253","code"=>"DJ","postal_format"=>array()),
        (object)array("name"=>"Dominica","dial_code"=>"+1 767","code"=>"DM","postal_format"=>array()),
        (object)array("name"=>"Dominican Republic","dial_code"=>"+1 849","code"=>"DO","postal_format"=>array("#####")),
        (object)array("name"=>"Ecuador","dial_code"=>"+593","code"=>"EC","postal_format"=>array("######")),
        (object)array("name"=>"Egypt","dial_code"=>"+20","code"=>"EG","postal_format"=>array("#####")),
        (object)array("name"=>"El Salvador","dial_code"=>"+503","code"=>"SV","postal_format"=>array("####")),
        (object)array("name"=>"Equatorial Guinea","dial_code"=>"+240","code"=>"GQ","postal_format"=>array()),
        (object)array("name"=>"Eritrea","dial_code"=>"+291","code"=>"ER","postal_format"=>array()),
        (object)array("name"=>"Estonia","dial_code"=>"+372","code"=>"EE","postal_format"=>array("#####")),
        (object)array("name"=>"Ethiopia","dial_code"=>"+251","code"=>"ET","postal_format"=>array("####")),
        (object)array("name"=>"Falkland Islands (Malvinas]","dial_code"=>"+500","code"=>"FK","postal_format"=>array("FIQQ 1ZZ")),
        (object)array("name"=>"Faroe Islands","dial_code"=>"+298","code"=>"FO","postal_format"=>array("###")),
        (object)array("name"=>"Fiji","dial_code"=>"+679","code"=>"FJ","postal_format"=>array()),
        (object)array("name"=>"Finland","dial_code"=>"+358","code"=>"FI","postal_format"=>array("#####")),
        (object)array("name"=>"France","dial_code"=>"+33","code"=>"FR","postal_format"=>array("#####")),
        (object)array("name"=>"French Guiana","dial_code"=>"+594","code"=>"GF","postal_format"=>array("973##")),
        (object)array("name"=>"French Polynesia","dial_code"=>"+689","code"=>"PF","postal_format"=>array("987##")),
        (object)array("name"=>"Gabon","dial_code"=>"+241","code"=>"GA","postal_format"=>array()),
        (object)array("name"=>"Gambia","dial_code"=>"+220","code"=>"GM","postal_format"=>array()),
        (object)array("name"=>"Georgia","dial_code"=>"+995","code"=>"GE","postal_format"=>array("####")),
        (object)array("name"=>"Germany","dial_code"=>"+49","code"=>"DE","postal_format"=>array("#####")),
        (object)array("name"=>"Ghana","dial_code"=>"+233","code"=>"GH","postal_format"=>array()),
        (object)array("name"=>"Gibraltar","dial_code"=>"+350","code"=>"GI","postal_format"=>array("GX11 1AA")),
        (object)array("name"=>"Greece","dial_code"=>"+30","code"=>"GR","postal_format"=>array("### ##")),
        (object)array("name"=>"Greenland","dial_code"=>"+299","code"=>"GL","postal_format"=>array("####")),
        (object)array("name"=>"Grenada","dial_code"=>"+1 473","code"=>"GD","postal_format"=>array()),
        (object)array("name"=>"Guadeloupe","dial_code"=>"+590","code"=>"GP","postal_format"=>array("971##")),
        (object)array("name"=>"Guam","dial_code"=>"+1 671","code"=>"GU","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Guatemala","dial_code"=>"+502","code"=>"GT","postal_format"=>array("#####")),
        (object)array("name"=>"Guernsey","dial_code"=>"+44","code"=>"GG","postal_format"=>array("GY# #@@", "GY## #@@")),
        (object)array("name"=>"Guinea","dial_code"=>"+224","code"=>"GN","postal_format"=>array("###")),
        (object)array("name"=>"Guinea-Bissau","dial_code"=>"+245","code"=>"GW","postal_format"=>array("####")),
        (object)array("name"=>"Guyana","dial_code"=>"+595","code"=>"GY","postal_format"=>array()),
        (object)array("name"=>"Haiti","dial_code"=>"+509","code"=>"HT","postal_format"=>array("####")),
        (object)array("name"=>"Holy See (Vatican City State]","dial_code"=>"+379","code"=>"VA","postal_format"=>array("00120")),
        (object)array("name"=>"Honduras","dial_code"=>"+504","code"=>"HN","postal_format"=>array("@@####", "#####")),
        (object)array("name"=>"Hong Kong","dial_code"=>"+852","code"=>"HK","postal_format"=>array()),
        (object)array("name"=>"Hungary","dial_code"=>"+36","code"=>"HU","postal_format"=>array("####")),
        (object)array("name"=>"Iceland","dial_code"=>"+354","code"=>"IS","postal_format"=>array("###")),
        (object)array("name"=>"India","dial_code"=>"+91","code"=>"IN","postal_format"=>array("######", "### ###")),
        (object)array("name"=>"Indonesia","dial_code"=>"+62","code"=>"ID","postal_format"=>array("#####")),
        (object)array("name"=>"Iran, Islamic Republic of","dial_code"=>"+98","code"=>"IR","postal_format"=>array("##########", "#####-#####")),
        (object)array("name"=>"Iraq","dial_code"=>"+964","code"=>"IQ","postal_format"=>array("#####")),
        (object)array("name"=>"Ireland","dial_code"=>"+353","code"=>"IE","postal_format"=>array("@** ****")),
        (object)array("name"=>"Isle of Man","dial_code"=>"+44","code"=>"IM","postal_format"=>array("IM# #@@", "IM## #@@")),
        (object)array("name"=>"Israel","dial_code"=>"+972","code"=>"IL","postal_format"=>array("#######")),
        (object)array("name"=>"Italy","dial_code"=>"+39","code"=>"IT","postal_format"=>array("#####")),
        (object)array("name"=>"Jamaica","dial_code"=>"+1 876","code"=>"JM","postal_format"=>array("##")),
        (object)array("name"=>"Japan","dial_code"=>"+81","code"=>"JP","postal_format"=>array("###-####", "###")),
        (object)array("name"=>"Jersey","dial_code"=>"+44","code"=>"JE","postal_format"=>array("JE# #@@", "JE## #@@")),
        (object)array("name"=>"Jordan","dial_code"=>"+962","code"=>"JO","postal_format"=>array("#####")),
        (object)array("name"=>"Kazakhstan","dial_code"=>"+7 7","code"=>"KZ","postal_format"=>array("######")),
        (object)array("name"=>"Kenya","dial_code"=>"+254","code"=>"KE","postal_format"=>array("#####")),
        (object)array("name"=>"Kiribati","dial_code"=>"+686","code"=>"KI","postal_format"=>array()),
        (object)array("name"=>"Korea, Democratic People's Republic of","dial_code"=>"+850","code"=>"KP","postal_format"=>array()),
        (object)array("name"=>"Korea, Republic of","dial_code"=>"+82","code"=>"KR","postal_format"=>array("###-###", "#####")),
        (object)array("name"=>"Kuwait","dial_code"=>"+965","code"=>"KW","postal_format"=>array("#####")),
        (object)array("name"=>"Kyrgyzstan","dial_code"=>"+996","code"=>"KG","postal_format"=>array("######")),
        (object)array("name"=>"Lao People's Democratic Republic","dial_code"=>"+856","code"=>"LA","postal_format"=>array("#####")),
        (object)array("name"=>"Latvia","dial_code"=>"+371","code"=>"LV","postal_format"=>array("LV-####")),
        (object)array("name"=>"Lebanon","dial_code"=>"+961","code"=>"LB","postal_format"=>array("#####", "#### ####")),
        (object)array("name"=>"Lesotho","dial_code"=>"+266","code"=>"LS","postal_format"=>array("###")),
        (object)array("name"=>"Liberia","dial_code"=>"+231","code"=>"LR","postal_format"=>array("####")),
        (object)array("name"=>"Libyan Arab Jamahiriya","dial_code"=>"+218","code"=>"LY","postal_format"=>array()),
        (object)array("name"=>"Liechtenstein","dial_code"=>"+423","code"=>"LI","postal_format"=>array("####")),
        (object)array("name"=>"Lithuania","dial_code"=>"+370","code"=>"LT","postal_format"=>array("LT-#####", "#####")),
        (object)array("name"=>"Luxembourg","dial_code"=>"+352","code"=>"LU","postal_format"=>array("####")),
        (object)array("name"=>"Macao","dial_code"=>"+853","code"=>"MO","postal_format"=>array()),
        (object)array("name"=>"Macedonia, The Former Yugoslav Republic of","dial_code"=>"+389","code"=>"MK","postal_format"=>array("####")),
        (object)array("name"=>"Madagascar","dial_code"=>"+261","code"=>"MG","postal_format"=>array("###")),
        (object)array("name"=>"Malawi","dial_code"=>"+265","code"=>"MW","postal_format"=>array()),
        (object)array("name"=>"Malaysia","dial_code"=>"+60","code"=>"MY","postal_format"=>array("#####")),
        (object)array("name"=>"Maldives","dial_code"=>"+960","code"=>"MV","postal_format"=>array("#####")),
        (object)array("name"=>"Mali","dial_code"=>"+223","code"=>"ML","postal_format"=>array()),
        (object)array("name"=>"Malta","dial_code"=>"+356","code"=>"MT","postal_format"=>array("@@@ ####")),
        (object)array("name"=>"Marshall Islands","dial_code"=>"+692","code"=>"MH","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Martinique","dial_code"=>"+596","code"=>"MQ","postal_format"=>array("972##")),
        (object)array("name"=>"Mauritania","dial_code"=>"+222","code"=>"MR","postal_format"=>array()),
        (object)array("name"=>"Mauritius","dial_code"=>"+230","code"=>"MU","postal_format"=>array("#####")),
        (object)array("name"=>"Mayotte","dial_code"=>"+262","code"=>"YT","postal_format"=>array("976##")),
        (object)array("name"=>"Mexico","dial_code"=>"+52","code"=>"MX","postal_format"=>array("#####")),
        (object)array("name"=>"Micronesia, Federated States of","dial_code"=>"+691","code"=>"FM","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Moldova, Republic of","dial_code"=>"+373","code"=>"MD","postal_format"=>array("MD####", "MD-####")),
        (object)array("name"=>"Monaco","dial_code"=>"+377","code"=>"MC","postal_format"=>array("980##")),
        (object)array("name"=>"Mongolia","dial_code"=>"+976","code"=>"MN","postal_format"=>array("#####")),
        (object)array("name"=>"Montenegro","dial_code"=>"+382","code"=>"ME","postal_format"=>array("#####")),
        (object)array("name"=>"Montserrat","dial_code"=>"+1664","code"=>"MS","postal_format"=>array()),
        (object)array("name"=>"Morocco","dial_code"=>"+212","code"=>"MA","postal_format"=>array("#####")),
        (object)array("name"=>"Mozambique","dial_code"=>"+258","code"=>"MZ","postal_format"=>array("####")),
        (object)array("name"=>"Myanmar","dial_code"=>"+95","code"=>"MM","postal_format"=>array("#####")),
        (object)array("name"=>"Namibia","dial_code"=>"+264","code"=>"NA","postal_format"=>array()),
        (object)array("name"=>"Nauru","dial_code"=>"+674","code"=>"NR","postal_format"=>array()),
        (object)array("name"=>"Nepal","dial_code"=>"+977","code"=>"NP","postal_format"=>array("#####")),
        (object)array("name"=>"Netherlands","dial_code"=>"+31","code"=>"NL","postal_format"=>array("####@@", "#### @@")),
        (object)array("name"=>"Netherlands Antilles","dial_code"=>"+599","code"=>"AN","postal_format"=>array()),
        (object)array("name"=>"New Caledonia","dial_code"=>"+687","code"=>"NC","postal_format"=>array("988##")),
        (object)array("name"=>"New Zealand","dial_code"=>"+64","code"=>"NZ","postal_format"=>array("####")),
        (object)array("name"=>"Nicaragua","dial_code"=>"+505","code"=>"NI","postal_format"=>array("#####")),
        (object)array("name"=>"Niger","dial_code"=>"+227","code"=>"NE","postal_format"=>array("####")),
        (object)array("name"=>"Nigeria","dial_code"=>"+234","code"=>"NG","postal_format"=>array("######")),
        (object)array("name"=>"Niue","dial_code"=>"+683","code"=>"NU","postal_format"=>array()),
        (object)array("name"=>"Norfolk Island","dial_code"=>"+672","code"=>"NF","postal_format"=>array("####")),
        (object)array("name"=>"Northern Mariana Islands","dial_code"=>"+1 670","code"=>"MP","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Norway","dial_code"=>"+47","code"=>"NO","postal_format"=>array("####")),
        (object)array("name"=>"Oman","dial_code"=>"+968","code"=>"OM","postal_format"=>array("####")),
        (object)array("name"=>"Pakistan","dial_code"=>"+92","code"=>"PK","postal_format"=>array("#####")),
        (object)array("name"=>"Palau","dial_code"=>"+680","code"=>"PW","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Palestinian Territory, Occupied","dial_code"=>"+970","code"=>"PS","postal_format"=>array("###")),
        (object)array("name"=>"Panama","dial_code"=>"+507","code"=>"PA","postal_format"=>array("####")),
        (object)array("name"=>"Papua New Guinea","dial_code"=>"+675","code"=>"PG","postal_format"=>array("###")),
        (object)array("name"=>"Paraguay","dial_code"=>"+595","code"=>"PY","postal_format"=>array("###")),
        (object)array("name"=>"Peru","dial_code"=>"+51","code"=>"PE","postal_format"=>array("#####", "PE #####")),
        (object)array("name"=>"Philippines","dial_code"=>"+63","code"=>"PH","postal_format"=>array("####")),
        (object)array("name"=>"Pitcairn","dial_code"=>"+872","code"=>"PN","postal_format"=>array("PCRN 1ZZ")),
        (object)array("name"=>"Poland","dial_code"=>"+48","code"=>"PL","postal_format"=>array("##-###")),
        (object)array("name"=>"Portugal","dial_code"=>"+351","code"=>"PT","postal_format"=>array("####-###")),
        (object)array("name"=>"Puerto Rico","dial_code"=>"+1 939","code"=>"PR","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Qatar","dial_code"=>"+974","code"=>"QA","postal_format"=>array()),
        (object)array("name"=>"Romania","dial_code"=>"+40","code"=>"RO","postal_format"=>array("######")),
        (object)array("name"=>"Réunion","dial_code"=>"+262","code"=>"RE","postal_format"=>array("974##")),
        (object)array("name"=>"Russia","dial_code"=>"+7","code"=>"RU","postal_format"=>array("######")),
        (object)array("name"=>"Rwanda","dial_code"=>"+250","code"=>"RW","postal_format"=>array()),
        (object)array("name"=>"Saint Barthélemy","dial_code"=>"+590","code"=>"BL","postal_format"=>array("#####")),
        (object)array("name"=>"Saint Helena, Ascension and Tristan Da Cunha","dial_code"=>"+290","code"=>"SH","postal_format"=>array("@@@@ 1ZZ")),
        (object)array("name"=>"Saint Kitts and Nevis","dial_code"=>"+1 869","code"=>"KN","postal_format"=>array()),
        (object)array("name"=>"Saint Lucia","dial_code"=>"+1 758","code"=>"LC","postal_format"=>array("LC## ###")),
        (object)array("name"=>"Saint Martin","dial_code"=>"+590","code"=>"MF","postal_format"=>array("97150")),
        (object)array("name"=>"Saint Pierre and Miquelon","dial_code"=>"+508","code"=>"PM","postal_format"=>array("97500")),
        (object)array("name"=>"Saint Vincent and the Grenadines","dial_code"=>"+1 784","code"=>"VC","postal_format"=>array("VC####")),
        (object)array("name"=>"Samoa","dial_code"=>"+685","code"=>"WS","postal_format"=>array("WS####")),
        (object)array("name"=>"San Marino","dial_code"=>"+378","code"=>"SM","postal_format"=>array("4789#")),
        (object)array("name"=>"Sao Tome and Principe","dial_code"=>"+239","code"=>"ST","postal_format"=>array()),
        (object)array("name"=>"Saudi Arabia","dial_code"=>"+966","code"=>"SA","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Senegal","dial_code"=>"+221","code"=>"SN","postal_format"=>array("#####")),
        (object)array("name"=>"Serbia","dial_code"=>"+381","code"=>"RS","postal_format"=>array("#####")),
        (object)array("name"=>"Seychelles","dial_code"=>"+248","code"=>"SC","postal_format"=>array()),
        (object)array("name"=>"Sierra Leone","dial_code"=>"+232","code"=>"SL","postal_format"=>array()),
        (object)array("name"=>"Singapore","dial_code"=>"+65","code"=>"SG","postal_format"=>array("######")),
        (object)array("name"=>"Slovakia","dial_code"=>"+421","code"=>"SK","postal_format"=>array("### ##")),
        (object)array("name"=>"Slovenia","dial_code"=>"+386","code"=>"SI","postal_format"=>array("####", "SI-####")),
        (object)array("name"=>"Solomon Islands","dial_code"=>"+677","code"=>"SB","postal_format"=>array()),
        (object)array("name"=>"Somalia","dial_code"=>"+252","code"=>"SO","postal_format"=>array("@@ #####")),
        (object)array("name"=>"South Africa","dial_code"=>"+27","code"=>"ZA","postal_format"=>array("####")),
        (object)array("name"=>"South Georgia and the South Sandwich Islands","dial_code"=>"+500","code"=>"GS","postal_format"=>array("SIQQ 1ZZ")),
        (object)array("name"=>"Spain","dial_code"=>"+34","code"=>"ES","postal_format"=>array("#####")),
        (object)array("name"=>"Sri Lanka","dial_code"=>"+94","code"=>"LK","postal_format"=>array("#####")),
        (object)array("name"=>"Sudan","dial_code"=>"+249","code"=>"SD","postal_format"=>array("#####")),
        (object)array("name"=>"Suriname","dial_code"=>"+597","code"=>"SR","postal_format"=>array()),
        (object)array("name"=>"Svalbard and Jan Mayen","dial_code"=>"+47","code"=>"SJ","postal_format"=>array("####")),
        (object)array("name"=>"Swaziland","dial_code"=>"+268","code"=>"SZ","postal_format"=>array("@###")),
        (object)array("name"=>"Sweden","dial_code"=>"+46","code"=>"SE","postal_format"=>array("### ##")),
        (object)array("name"=>"Switzerland","dial_code"=>"+41","code"=>"CH","postal_format"=>array("####")),
        (object)array("name"=>"Syrian Arab Republic","dial_code"=>"+963","code"=>"SY","postal_format"=>array()),
        (object)array("name"=>"Taiwan, Province of China","dial_code"=>"+886","code"=>"TW","postal_format"=>array("###", "###-##")),
        (object)array("name"=>"Tanzania, United Republic of","dial_code"=>"+255","code"=>"TZ","postal_format"=>array("#####")),
        (object)array("name"=>"Tajikistan","dial_code"=>"+992","code"=>"TJ","postal_format"=>array("######")),
        (object)array("name"=>"Thailand","dial_code"=>"+66","code"=>"TH","postal_format"=>array("#####")),
        (object)array("name"=>"Timor-Leste","dial_code"=>"+670","code"=>"TL","postal_format"=>array()),
        (object)array("name"=>"Togo","dial_code"=>"+228","code"=>"TG","postal_format"=>array()),
        (object)array("name"=>"Tokelau","dial_code"=>"+690","code"=>"TK","postal_format"=>array()),
        (object)array("name"=>"Tonga","dial_code"=>"+676","code"=>"TO","postal_format"=>array()),
        (object)array("name"=>"Trinidad and Tobago","dial_code"=>"+1 868","code"=>"TT","postal_format"=>array("######")),
        (object)array("name"=>"Tunisia","dial_code"=>"+216","code"=>"TN","postal_format"=>array("####")),
        (object)array("name"=>"Turkey","dial_code"=>"+90","code"=>"TR","postal_format"=>array("#####")),
        (object)array("name"=>"Turkmenistan","dial_code"=>"+993","code"=>"TM","postal_format"=>array("######")),
        (object)array("name"=>"Turks and Caicos Islands","dial_code"=>"+1 649","code"=>"TC","postal_format"=>array("TKCA 1ZZ")),
        (object)array("name"=>"Tuvalu","dial_code"=>"+688","code"=>"TV","postal_format"=>array()),
        (object)array("name"=>"Uganda","dial_code"=>"+256","code"=>"UG","postal_format"=>array()),
        (object)array("name"=>"Ukraine","dial_code"=>"+380","code"=>"UA","postal_format"=>array("#####")),
        (object)array("name"=>"United Arab Emirates","dial_code"=>"+971","code"=>"AE","postal_format"=>array()),
        (object)array("name"=>"United Kingdom","dial_code"=>"+44","code"=>"GB","postal_format"=>array("@@## #@@", "@#@ #@@", "@@# #@@", "@@#@ #@@", "@## #@@", "@# #@@")),
        (object)array("name"=>"United States","dial_code"=>"+1","code"=>"US","postal_format"=>array("#####-####", "#####")),
        (object)array("name"=>"Uruguay","dial_code"=>"+598","code"=>"UY","postal_format"=>array("#####")),
        (object)array("name"=>"Uzbekistan","dial_code"=>"+998","code"=>"UZ","postal_format"=>array("######")),
        (object)array("name"=>"Vanuatu","dial_code"=>"+678","code"=>"VU","postal_format"=>array()),
        (object)array("name"=>"Venezuela, Bolivarian Republic of","dial_code"=>"+58","code"=>"VE","postal_format"=>array("####", "####-@")),
        (object)array("name"=>"Viet Nam","dial_code"=>"+84","code"=>"VN","postal_format"=>array("######")),
        (object)array("name"=>"Virgin Islands, British","dial_code"=>"+1 284","code"=>"VG","postal_format"=>array("VG####")),
        (object)array("name"=>"Virgin Islands, U.S.","dial_code"=>"+1 340","code"=>"VI","postal_format"=>array("#####", "#####-####")),
        (object)array("name"=>"Wallis and Futuna","dial_code"=>"+681","code"=>"WF","postal_format"=>array("986##")),
        (object)array("name"=>"Yemen","dial_code"=>"+967","code"=>"YE","postal_format"=>array()),
        (object)array("name"=>"Zambia","dial_code"=>"+260","code"=>"ZM","postal_format"=>array("#####")),
        (object)array("name"=>"Zimbabwe","dial_code"=>"+263","code"=>"ZW","postal_format"=>array()),
    ],

];
