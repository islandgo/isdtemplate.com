<?php

if (! function_exists('constant_country_code')) {
  /**
   * List of Country by Code
   *
   * @return array
   */
  function constant_country_code() {
    return [
      '1'      => 'UNITED STATES',
      '376'   => 'ANDORRA',
      '971'   => 'UNITED ARAB EMIRATES',
      '93'    => 'AFGHANISTAN',
      '1268'  => 'ANTIGUA AND BARBUDA',
      '1264'  => 'ANGUILLA',
      '355'   => 'ALBANIA',
      '374'   => 'ARMENIA',
      '599'   => 'NETHERLANDS ANTILLES',
      '244'   => 'ANGOLA',
      '672'   => 'ANTARCTICA',
      '54'    => 'ARGENTINA',
      '1684'  => 'AMERICAN SAMOA',
      '43'    => 'AUSTRIA',
      '61'    => 'AUSTRALIA',
      '297'   => 'ARUBA',
      '994'   => 'AZERBAIJAN',
      '387'   => 'BOSNIA AND HERZEGOVINA',
      '1246'  => 'BARBADOS',
      '880'   => 'BANGLADESH',
      '32'    => 'BELGIUM',
      '226'   => 'BURKINA FASO',
      '359'   => 'BULGARIA',
      '973'   => 'BAHRAIN',
      '257'   => 'BURUNDI',
      '229'   => 'BENIN',
      '590'   => 'SAINT BARTHELEMY',
      '1441'  => 'BERMUDA',
      '673'   => 'BRUNEI DARUSSALAM',
      '591'   => 'BOLIVIA',
      '55'    => 'BRAZIL',
      '1242'  => 'BAHAMAS',
      '975'   => 'BHUTAN',
      '267'   => 'BOTSWANA',
      '375'   => 'BELARUS',
      '501'   => 'BELIZE',
      '243'   => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
      '236'   => 'CENTRAL AFRICAN REPUBLIC',
      '242'   => 'CONGO',
      '41'    => 'SWITZERLAND',
      '225'   => 'COTE D IVOIRE',
      '682'   => 'COOK ISLANDS',
      '56'    => 'CHILE',
      '237'   => 'CAMEROON',
      '86'    => 'CHINA',
      '57'    => 'COLOMBIA',
      '506'   => 'COSTA RICA',
      '53'    => 'CUBA',
      '238'   => 'CAPE VERDE',
      '357'   => 'CYPRUS',
      '420'   => 'CZECH REPUBLIC',
      '49'    => 'GERMANY',
      '253'   => 'DJIBOUTI',
      '45'    => 'DENMARK',
      '1767'  => 'DOMINICA',
      '1809'  => 'DOMINICAN REPUBLIC',
      '213'   => 'ALGERIA',
      '593'   => 'ECUADOR',
      '372'   => 'ESTONIA',
      '20'    => 'EGYPT',
      '291'   => 'ERITREA',
      '34'    => 'SPAIN',
      '251'   => 'ETHIOPIA',
      '358'   => 'FINLAND',
      '679'   => 'FIJI',
      '500'   => 'FALKLAND ISLANDS (MALVINAS)',
      '691'   => 'MICRONESIA, FEDERATED STATES OF',
      '298'   => 'FAROE ISLANDS',
      '33'    => 'FRANCE',
      '241'   => 'GABON',
      '44'    => 'UNITED KINGDOM',
      '1473'  => 'GRENADA',
      '995'   => 'GEORGIA',
      '233'   => 'GHANA',
      '350'   => 'GIBRALTAR',
      '299'   => 'GREENLAND',
      '220'   => 'GAMBIA',
      '224'   => 'GUINEA',
      '240'   => 'EQUATORIAL GUINEA',
      '30'    => 'GREECE',
      '502'   => 'GUATEMALA',
      '1671'  => 'GUAM',
      '245'   => 'GUINEA-BISSAU',
      '592'   => 'GUYANA',
      '852'   => 'HONG KONG',
      '504'   => 'HONDURAS',
      '385'   => 'CROATIA',
      '509'   => 'HAITI',
      '36'    => 'HUNGARY',
      '62'    => 'INDONESIA',
      '353'   => 'IRELAND',
      '972'   => 'ISRAEL',
      '91'    => 'INDIA',
      '964'   => 'IRAQ',
      '98'    => 'IRAN, ISLAMIC REPUBLIC OF',
      '354'   => 'ICELAND',
      '39'    => 'ITALY',
      '1876'  => 'JAMAICA',
      '962'   => 'JORDAN',
      '81'    => 'JAPAN',
      '254'   => 'KENYA',
      '996'   => 'KYRGYZSTAN',
      '855'   => 'CAMBODIA',
      '686'   => 'KIRIBATI',
      '269'   => 'COMOROS',
      '1869'  => 'SAINT KITTS AND NEVIS',
      '850'   => 'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
      '82'    => 'KOREA REPUBLIC OF',
      '965'   => 'KUWAIT',
      '1345'  => 'CAYMAN ISLANDS',
      '7'     => 'KAZAKSTAN',
      '856'   => 'LAO PEOPLES DEMOCRATIC REPUBLIC',
      '961'   => 'LEBANON',
      '1758'  => 'SAINT LUCIA',
      '423'   => 'LIECHTENSTEIN',
      '94'    => 'SRI LANKA',
      '231'   => 'LIBERIA',
      '266'   => 'LESOTHO',
      '370'   => 'LITHUANIA',
      '352'   => 'LUXEMBOURG',
      '371'   => 'LATVIA',
      '218'   => 'LIBYAN ARAB JAMAHIRIYA',
      '212'   => 'MOROCCO',
      '377'   => 'MONACO',
      '373'   => 'MOLDOVA, REPUBLIC OF',
      '382'   => 'MONTENEGRO',
      '1599'  => 'SAINT MARTIN',
      '261'   => 'MADAGASCAR',
      '692'   => 'MARSHALL ISLANDS',
      '389'   => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
      '223'   => 'MALI',
      '95'    => 'MYANMAR',
      '976'   => 'MONGOLIA',
      '853'   => 'MACAU',
      '1670'  => 'NORTHERN MARIANA ISLANDS',
      '222'   => 'MAURITANIA',
      '1664'  => 'MONTSERRAT',
      '356'   => 'MALTA',
      '230'   => 'MAURITIUS',
      '960'   => 'MALDIVES',
      '265'   => 'MALAWI',
      '52'    => 'MEXICO',
      '60'    => 'MALAYSIA',
      '258'   => 'MOZAMBIQUE',
      '264'   => 'NAMIBIA',
      '687'   => 'NEW CALEDONIA',
      '227'   => 'NIGER',
      '234'   => 'NIGERIA',
      '505'   => 'NICARAGUA',
      '31'    => 'NETHERLANDS',
      '47'    => 'NORWAY',
      '977'   => 'NEPAL',
      '674'   => 'NAURU',
      '683'   => 'NIUE',
      '64'    => 'NEW ZEALAND',
      '968'   => 'OMAN',
      '507'   => 'PANAMA',
      '51'    => 'PERU',
      '689'   => 'FRENCH POLYNESIA',
      '675'   => 'PAPUA NEW GUINEA',
      '63'    => 'PHILIPPINES',
      '92'    => 'PAKISTAN',
      '48'    => 'POLAND',
      '508'   => 'SAINT PIERRE AND MIQUELON',
      '870'   => 'PITCAIRN',
      '351'   => 'PORTUGAL',
      '680'   => 'PALAU',
      '595'   => 'PARAGUAY',
      '974'   => 'QATAR',
      '40'    => 'ROMANIA',
      '381'   => 'SERBIA',
      '250'   => 'RWANDA',
      '966'   => 'SAUDI ARABIA',
      '677'   => 'SOLOMON ISLANDS',
      '248'   => 'SEYCHELLES',
      '249'   => 'SUDAN',
      '46'    => 'SWEDEN',
      '65'    => 'SINGAPORE',
      '290'   => 'SAINT HELENA',
      '386'   => 'SLOVENIA',
      '421'   => 'SLOVAKIA',
      '232'   => 'SIERRA LEONE',
      '378'   => 'SAN MARINO',
      '221'   => 'SENEGAL',
      '252'   => 'SOMALIA',
      '597'   => 'SURINAME',
      '239'   => 'SAO TOME AND PRINCIPE',
      '503'   => 'EL SALVADOR',
      '963'   => 'SYRIAN ARAB REPUBLIC',
      '268'   => 'SWAZILAND',
      '1649'  => 'TURKS AND CAICOS ISLANDS',
      '235'   => 'CHAD',
      '228'   => 'TOGO',
      '66'    => 'THAILAND',
      '992'   => 'TAJIKISTAN',
      '690'   => 'TOKELAU',
      '670'   => 'TIMOR-LESTE',
      '993'   => 'TURKMENISTAN',
      '216'   => 'TUNISIA',
      '676'   => 'TONGA',
      '90'    => 'TURKEY',
      '1868'  => 'TRINIDAD AND TOBAGO',
      '688'   => 'TUVALU',
      '886'   => 'TAIWAN, PROVINCE OF CHINA',
      '255'   => 'TANZANIA, UNITED REPUBLIC OF',
      '380'   => 'UKRAINE',
      '256'   => 'UGANDA',
      '598'   => 'URUGUAY',
      '998'   => 'UZBEKISTAN',
      '1784'  => 'SAINT VINCENT AND THE GRENADINES',
      '58'    => 'VENEZUELA',
      '1284'  => 'VIRGIN ISLANDS, BRITISH',
      '1340'  => 'VIRGIN ISLANDS, U.S.',
      '84'    => 'VIET NAM',
      '678'   => 'VANUATU',
      '681'   => 'WALLIS AND FUTUNA',
      '685'   => 'SAMOA',
      '967'   => 'YEMEN',
      '262'   => 'MAYOTTE',
      '27'    => 'SOUTH AFRICA',
      '260'   => 'ZAMBIA',
      '263'   => 'ZIMBABWE',
    ];
  }
}

if (! function_exists('constant_select_element')) {
  /**
   * Create select element with country codes
   *
   * @param $name
   * @param $id
   * @param $value
   * @return string
   */
  function constant_select_element($name, $id, $value)
  {
    $html = '<select name="' . $name . '" id="' . $id . '" class="wpuikit-country-code">';
      foreach (constant_country_code() as $k => $v) {
        $html .= '<option value="' . $k . '" ' . selected($k, $value, false) . '>' . ucwords(strtolower($v)) . ' (+' . (empty($k) ? '1' : $k) . ')</option>';
      }
    $html .= '</select>';

    return $html;
  }
}