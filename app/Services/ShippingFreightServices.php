<?php

namespace App\Services;

use App\Interfaces\ShippingFreightInterface;

class ShippingFreightServices implements ShippingFreightInterface
{
    public function getFreightClass(): array
    {
        return [
            [
                "code" => "CLASS_050",
                "type" => "Durable freight that fits on a standard 4' × 4' pallet",
                "weight" => "50+ lbs."
            ],
            [
                "code" => "CLASS_055",
                "type" => "Bricks, cement, hardwood flooring, construction materials",
                "weight" => "35–50 lbs."
            ],
            [
                "code" => "CLASS_060",
                "type" => "Car accessories, car parts",
                "weight" => "30–35 lbs."
            ],
            [
                "code" => "CLASS_065",
                "type" => "Car accessories and parts, boxed books, bottled drinks",
                "weight" => "22.5–30 lbs."
            ],
            [
                "code" => "CLASS_070",
                "type" => "Car accessories and parts, auto engines, food items",
                "weight" => "15–22.5 lbs."
            ],
            [
                "code" => "CLASS_077_5",
                "type" => "Tires, bathroom fixtures",
                "weight" => "13.5–15 lbs."
            ],
            [
                "code" => "CLASS_085",
                "type" => "Crated machinery, cast iron stoves",
                "weight" => "12–13.5 lbs."
            ],
            [
                "code" => "CLASS_092_5",
                "type" => "Computers, monitors, refrigerators",
                "weight" => "10.5–12 lbs."
            ],
            [
                "code" => "CLASS_100",
                "type" => "Car covers, canvas, boat covers, wine cases, caskets",
                "weight" => "9–10.5 lbs."
            ],
            [
                "code" => "CLASS_110",
                "type" => "Cabinets, framed art, table saws",
                "weight" => "8–9 lbs."
            ],
            [
                "code" => "CLASS_125",
                "type" => "Small home appliances",
                "weight" => "7–8 lbs."
            ],
            [
                "code" => "CLASS_150",
                "type" => "Auto sheet metal, bookcases",
                "weight" => "6–7 lbs."
            ],
            [
                "code" => "CLASS_175",
                "type" => "Clothing, couches, stuffed furniture",
                "weight" => "5–6 lbs."
            ],
            [
                "code" => "CLASS_200",
                "type" => "Sheet metal parts, aluminum tables, packaged mattresses, aircraft parts",
                "weight" => "4–5 lbs."
            ],
            [
                "code" => "CLASS_250",
                "type" => "Mattresses and box springs, plasma TVs, bamboo furniture",
                "weight" => "3–4 lbs."
            ],
            [
                "code" => "CLASS_300",
                "type" => "Model boats, assembled chairs, tables, wood cabinets",
                "weight" => "2–3 lbs."
            ],
            [
                "code" => "CLASS_400",
                "type" => "Deer antlers",
                "weight" => "1–2 lbs."
            ],
            [
                "code" => "CLASS_500",
                "type" => "Gold dust, ping pong balls",
                "weight" => "<1 lb."
            ]
        ];
    }

    public function getCountryCode(): array
    {
        return [
            [
                'name' => 'Afghanistan',
                'code' => 'AF'
            ],
            [
                'name' => 'Aland Islands',
                'code' => 'AX'
            ],
            [
                'name' => 'Albania',
                'code' => 'AL'
            ],
            [
                'name' => 'Algeria',
                'code' => 'DZ'
            ],
            [
                'name' => 'AmericanSamoa',

                'code' => 'AS'
            ],
            [
                'name' => 'Andorra',
                'code' => 'AD'
            ],
            [
                'name' => 'Angola',
                'code' => 'AO'
            ],
            [
                'name' => 'Anguilla',

                'code' => 'AI'
            ],
            [
                'name' => 'Antarctica',
                'code' => 'AQ'
            ],
            [
                'name' => 'Antigua and Barbuda',

                'code' => 'AG'
            ],
            [
                'name' => 'Argentina',
                'code' => 'AR'
            ],
            [
                'name' => 'Armenia',
                'code' => 'AM'
            ],
            [
                'name' => 'Aruba',
                'code' => 'AW'
            ],
            [
                'name' => 'Australia',
                'code' => 'AU'
            ],
            [
                'name' => 'Austria',
                'code' => 'AT'
            ],
            [
                'name' => 'Azerbaijan',
                'code' => 'AZ'
            ],
            [
                'name' => 'Bahamas',

                'code' => 'BS'
            ],
            [
                'name' => 'Bahrain',
                'code' => 'BH'
            ],
            [
                'name' => 'Bangladesh',
                'code' => 'BD'
            ],
            [
                'name' => 'Barbados',

                'code' => 'BB'
            ],
            [
                'name' => 'Belarus',
                'code' => 'BY'
            ],
            [
                'name' => 'Belgium',
                'code' => 'BE'
            ],
            [
                'name' => 'Belize',
                'code' => 'BZ'
            ],
            [
                'name' => 'Benin',
                'code' => 'BJ'
            ],
            [
                'name' => 'Bermuda',

                'code' => 'BM'
            ],
            [
                'name' => 'Bhutan',
                'code' => 'BT'
            ],
            [
                'name' => 'Bolivia, Plurinational State of',
                'code' => 'BO'
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA'
            ],
            [
                'name' => 'Botswana',
                'code' => 'BW'
            ],
            [
                'name' => 'Brazil',
                'code' => 'BR'
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO'
            ],
            [
                'name' => 'Brunei Darussalam',
                'code' => 'BN'
            ],
            [
                'name' => 'Bulgaria',
                'code' => 'BG'
            ],
            [
                'name' => 'Burkina Faso',
                'code' => 'BF'
            ],
            [
                'name' => 'Burundi',
                'code' => 'BI'
            ],
            [
                'name' => 'Cambodia',
                'code' => 'KH'
            ],
            [
                'name' => 'Cameroon',
                'code' => 'CM'
            ],
            [
                'name' => 'Canada',
                'code' => 'CA'
            ],
            [
                'name' => 'Cape Verde',
                'code' => 'CV'
            ],
            [
                'name' => 'Cayman Islands',

                'code' => 'KY'
            ],
            [
                'name' => 'Central African Republic',
                'code' => 'CF'
            ],
            [
                'name' => 'Chad',
                'code' => 'TD'
            ],
            [
                'name' => 'Chile',
                'code' => 'CL'
            ],
            [
                'name' => 'China',
                'code' => 'CN'
            ],
            [
                'name' => 'Christmas Island',
                'code' => 'CX'
            ],
            [
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC'
            ],
            [
                'name' => 'Colombia',
                'code' => 'CO'
            ],
            [
                'name' => 'Comoros',
                'code' => 'KM'
            ],
            [
                'name' => 'Congo',
                'code' => 'CG'
            ],
            [
                'name' => 'Congo, The Democratic Republic of the Congo',
                'code' => 'CD'
            ],
            [
                'name' => 'Cook Islands',
                'code' => 'CK'
            ],
            [
                'name' => 'Costa Rica',
                'code' => 'CR'
            ],
            [
                'name' => "Cote d'Ivoire",
                'code' => 'CI'
            ],
            [
                'name' => 'Croatia',
                'code' => 'HR'
            ],
            [
                'name' => 'Cuba',
                'code' => 'CU'
            ],
            [
                'name' => 'Cyprus',
                'code' => 'CY'
            ],
            [
                'name' => 'Czech Republic',
                'code' => 'CZ'
            ],
            [
                'name' => 'Denmark',
                'code' => 'DK'
            ],
            [
                'name' => 'Djibouti',
                'code' => 'DJ'
            ],
            [
                'name' => 'Dominica',

                'code' => 'DM'
            ],
            [
                'name' => 'Dominican Republic',

                'code' => 'DO'
            ],
            [
                'name' => 'Ecuador',
                'code' => 'EC'
            ],
            [
                'name' => 'Egypt',
                'code' => 'EG'
            ],
            [
                'name' => 'El Salvador',
                'code' => 'SV'
            ],
            [
                'name' => 'Equatorial Guinea',
                'code' => 'GQ'
            ],
            [
                'name' => 'Eritrea',
                'code' => 'ER'
            ],
            [
                'name' => 'Estonia',
                'code' => 'EE'
            ],
            [
                'name' => 'Ethiopia',
                'code' => 'ET'
            ],
            [
                'name' => 'Falkland Islands(Malvinas)',
                'code' => 'FK'
            ],
            [
                'name' => 'Faroe Islands',
                'code' => 'FO'
            ],
            [
                'name' => 'Fiji',
                'code' => 'FJ'
            ],
            [
                'name' => 'Finland',
                'code' => 'FI'
            ],
            [
                'name' => 'France',
                'code' => 'FR'
            ],
            [
                'name' => 'French Guiana',
                'code' => 'GF'
            ],
            [
                'name' => 'French Polynesia',
                'code' => 'PF'
            ],
            [
                'name' => 'Gabon',
                'code' => 'GA'
            ],
            [
                'name' => 'Gambia',
                'code' => 'GM'
            ],
            [
                'name' => 'Georgia',
                'code' => 'GE'
            ],
            [
                'name' => 'Germany',
                'code' => 'DE'
            ],
            [
                'name' => 'Ghana',
                'code' => 'GH'
            ],
            [
                'name' => 'Gibraltar',
                'code' => 'GI'
            ],
            [
                'name' => 'Greece',
                'code' => 'GR'
            ],
            [
                'name' => 'Greenland',
                'code' => 'GL'
            ],
            [
                'name' => 'Grenada',

                'code' => 'GD'
            ],
            [
                'name' => 'Guadeloupe',
                'code' => 'GP'
            ],
            [
                'name' => 'Guam',

                'code' => 'GU'
            ],
            [
                'name' => 'Guatemala',
                'code' => 'GT'
            ],
            [
                'name' => 'Guernsey',
                'code' => 'GG'
            ],
            [
                'name' => 'Guinea',
                'code' => 'GN'
            ],
            [
                'name' => 'Guinea - Bissau',
                'code' => 'GW'
            ],
            [
                'name' => 'Guyana',
                'code' => 'GY'
            ],
            [
                'name' => 'Haiti',
                'code' => 'HT'
            ],
            [
                'name' => 'Holy See(Vatican City State)',
                'code' => 'VA'
            ],
            [
                'name' => 'Honduras',
                'code' => 'HN'
            ],
            [
                'name' => 'Hong Kong',
                'code' => 'HK'
            ],
            [
                'name' => 'Hungary',
                'code' => 'HU'
            ],
            [
                'name' => 'Iceland',
                'code' => 'IS'
            ],
            [
                'name' => 'India',
                'code' => 'IN'
            ],
            [
                'name' => 'Indonesia',
                'code' => 'ID'
            ],
            [
                'name' => 'Iran, Islamic Republic of Persian Gulf',
                'code' => 'IR'
            ],
            [
                'name' => 'Iraq',
                'code' => 'IQ'
            ],
            [
                'name' => 'Ireland',
                'code' => 'IE'
            ],
            [
                'name' => 'Isle of Man',
                'code' => 'IM'
            ],
            [
                'name' => 'Israel',
                'code' => 'IL'
            ],
            [
                'name' => 'Italy',
                'code' => 'IT'
            ],
            [
                'name' => 'Jamaica',

                'code' => 'JM'
            ],
            [
                'name' => 'Japan',
                'code' => 'JP'
            ],
            [
                'name' => 'Jersey',
                'code' => 'JE'
            ],
            [
                'name' => 'Jordan',
                'code' => 'JO'
            ],
            [
                'name' => 'Kazakhstan',
                'code' => 'KZ'
            ],
            [
                'name' => 'Kenya',
                'code' => 'KE'
            ],
            [
                'name' => 'Kiribati',
                'code' => 'KI'
            ],
            [
                'name' => "Korea, Democratic People's Republic of Korea",
                'code' => 'KP'
            ],
            [
                'name' => 'Korea, Republic of South Korea',
                'code' => 'KR'
            ],
            [
                'name' => 'Kuwait',
                'code' => 'KW'
            ],
            [
                'name' => 'Kyrgyzstan',
                'code' => 'KG'
            ],
            [
                'name' => 'Laos',
                'code' => 'LA'
            ],
            [
                'name' => 'Latvia',
                'code' => 'LV'
            ],
            [
                'name' => 'Lebanon',
                'code' => 'LB'
            ],
            [
                'name' => 'Lesotho',
                'code' => 'LS'
            ],
            [
                'name' => 'Liberia',
                'code' => 'LR'
            ],
            [
                'name' => 'Libyan Arab Jamahiriya',
                'code' => 'LY'
            ],
            [
                'name' => 'Liechtenstein',
                'code' => 'LI'
            ],
            [
                'name' => 'Lithuania',
                'code' => 'LT'
            ],
            [
                'name' => 'Luxembourg',
                'code' => 'LU'
            ],
            [
                'name' => 'Macao',
                'code' => 'MO'
            ],
            [
                'name' => 'Macedonia',
                'code' => 'MK'
            ],
            [
                'name' => 'Madagascar',
                'code' => 'MG'
            ],
            [
                'name' => 'Malawi',
                'code' => 'MW'
            ],
            [
                'name' => 'Malaysia',
                'code' => 'MY'
            ],
            [
                'name' => 'Maldives',
                'code' => 'MV'
            ],
            [
                'name' => 'Mali',
                'code' => 'ML'
            ],
            [
                'name' => 'Malta',
                'code' => 'MT'
            ],
            [
                'name' => 'Marshall Islands',
                'code' => 'MH'
            ],
            [
                'name' => 'Martinique',
                'code' => 'MQ'
            ],
            [
                'name' => 'Mauritania',
                'code' => 'MR'
            ],
            [
                'name' => 'Mauritius',
                'code' => 'MU'
            ],
            [
                'name' => 'Mayotte',
                'code' => 'YT'
            ],
            [
                'name' => 'Mexico',
                'code' => 'MX'
            ],
            [
                'name' => 'Micronesia, Federated States of Micronesia',
                'code' => 'FM'
            ],
            [
                'name' => 'Moldova',
                'code' => 'MD'
            ],
            [
                'name' => 'Monaco',
                'code' => 'MC'
            ],
            [
                'name' => 'Mongolia',
                'code' => 'MN'
            ],
            [
                'name' => 'Montenegro',
                'code' => 'ME'
            ],
            [
                'name' => 'Montserrat',

                'code' => 'MS'
            ],
            [
                'name' => 'Morocco',
                'code' => 'MA'
            ],
            [
                'name' => 'Mozambique',
                'code' => 'MZ'
            ],
            [
                'name' => 'Myanmar',
                'code' => 'MM'
            ],
            [
                'name' => 'Namibia',
                'code' => 'NA'
            ],
            [
                'name' => 'Nauru',
                'code' => 'NR'
            ],
            [
                'name' => 'Nepal',
                'code' => 'NP'
            ],
            [
                'name' => 'Netherlands',
                'code' => 'NL'
            ],
            [
                'name' => 'Netherlands Antilles',
                'code' => 'AN'
            ],
            [
                'name' => 'new Caledonia',
                'code' => 'NC'
            ],
            [
                'name' => 'new Zealand',
                'code' => 'NZ'
            ],
            [
                'name' => 'Nicaragua',
                'code' => 'NI'
            ],
            [
                'name' => 'Niger',
                'code' => 'NE'
            ],
            [
                'name' => 'Nigeria',
                'code' => 'NG'
            ],
            [
                'name' => 'Niue',
                'code' => 'NU'
            ],
            [
                'name' => 'Norfolk Island',
                'code' => 'NF'
            ],
            [
                'name' => 'Northern Mariana Islands',

                'code' => 'MP'
            ],
            [
                'name' => 'Norway',
                'code' => 'NO'
            ],
            [
                'name' => 'Oman',
                'code' => 'OM'
            ],
            [
                'name' => 'Pakistan',
                'code' => 'PK'
            ],
            [
                'name' => 'Palau',
                'code' => 'PW'
            ],
            [
                'name' => 'Palestinian Territory, Occupied',
                'code' => 'PS'
            ],
            [
                'name' => 'Panama',
                'code' => 'PA'
            ],
            [
                'name' => 'Papua New Guinea',
                'code' => 'PG'
            ],
            [
                'name' => 'Paraguay',
                'code' => 'PY'
            ],
            [
                'name' => 'Peru',
                'code' => 'PE'
            ],
            [
                'name' => 'Philippines',
                'code' => 'PH'
            ],
            [
                'name' => 'Pitcairn',
                'code' => 'PN'
            ],
            [
                'name' => 'Poland',
                'code' => 'PL'
            ],
            [
                'name' => 'Portugal',
                'code' => 'PT'
            ],
            [
                'name' => 'Puerto Rico',

                'code' => 'PR'
            ],
            [
                'name' => 'Qatar',
                'code' => 'QA'
            ],
            [
                'name' => 'Romania',
                'code' => 'RO'
            ],
            [
                'name' => 'Russia',
                'code' => 'RU'
            ],
            [
                'name' => 'Rwanda',
                'code' => 'RW'
            ],
            [
                'name' => 'Reunion',
                'code' => 'RE'
            ],
            [
                'name' => 'Saint Barthelemy',
                'code' => 'BL'
            ],
            [
                'name' => 'Saint Helena, Ascension and Tristan Da Cunha',
                'code' => 'SH'
            ],
            [
                'name' => 'Saint Kitts and Nevis',

                'code' => 'KN'
            ],
            [
                'name' => 'Saint Lucia',

                'code' => 'LC'
            ],
            [
                'name' => 'Saint Martin',
                'code' => 'MF'
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'PM'
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',

                'code' => 'VC'
            ],
            [
                'name' => 'Samoa',
                'code' => 'WS'
            ],
            [
                'name' => 'San Marino',
                'code' => 'SM'
            ],
            [
                'name' => 'Sao Tome and Principe',
                'code' => 'ST'
            ],
            [
                'name' => 'Saudi Arabia',
                'code' => 'SA'
            ],
            [
                'name' => 'Senegal',
                'code' => 'SN'
            ],
            [
                'name' => 'Serbia',
                'code' => 'RS'
            ],
            [
                'name' => 'Seychelles',
                'code' => 'SC'
            ],
            [
                'name' => 'Sierra Leone',
                'code' => 'SL'
            ],
            [
                'name' => 'Singapore',
                'code' => 'SG'
            ],
            [
                'name' => 'Slovakia',
                'code' => 'SK'
            ],
            [
                'name' => 'Slovenia',
                'code' => 'SI'
            ],
            [
                'name' => 'Solomon Islands',
                'code' => 'SB'
            ],
            [
                'name' => 'Somalia',
                'code' => 'SO'
            ],
            [
                'name' => 'South Africa',
                'code' => 'ZA'
            ],
            [
                'name' => 'South Sudan',
                'code' => 'SS'
            ],
            [
                'name' => 'South Georgia and the South Sandwich Islands',
                'code' => 'GS'
            ],
            [
                'name' => 'Spain',
                'code' => 'ES'
            ],
            [
                'name' => 'Sri Lanka',
                'code' => 'LK'
            ],
            [
                'name' => 'Sudan',
                'code' => 'SD'
            ],
            [
                'name' => 'Suriname',
                'code' => 'SR'
            ],
            [
                'name' => 'Svalbard and Jan Mayen',
                'code' => 'SJ'
            ],
            [
                'name' => 'Swaziland',
                'code' => 'SZ'
            ],
            [
                'name' => 'Sweden',
                'code' => 'SE'
            ],
            [
                'name' => 'Switzerland',
                'code' => 'CH'
            ],
            [
                'name' => 'Syrian Arab Republic',
                'code' => 'SY'
            ],
            [
                'name' => 'Taiwan',
                'code' => 'TW'
            ],
            [
                'name' => 'Tajikistan',
                'code' => 'TJ'
            ],
            [
                'name' => 'Tanzania, United Republic of Tanzania',
                'code' => 'TZ'
            ],
            [
                'name' => 'Thailand',
                'code' => 'TH'
            ],
            [
                'name' => 'Timor-Leste',
                'code' => 'TL'
            ],
            [
                'name' => 'Togo',
                'code' => 'TG'
            ],
            [
                'name' => 'Tokelau',
                'code' => 'TK'
            ],
            [
                'name' => 'Tonga',
                'code' => 'TO'
            ],
            [
                'name' => 'Trinidad and Tobago',

                'code' => 'TT'
            ],
            [
                'name' => 'Tunisia',
                'code' => 'TN'
            ],
            [
                'name' => 'Turkey',
                'code' => 'TR'
            ],
            [
                'name' => 'Turkmenistan',
                'code' => 'TM'
            ],
            [
                'name' => 'Turks and Caicos Islands',

                'code' => 'TC'
            ],
            [
                'name' => 'Tuvalu',
                'code' => 'TV'
            ],
            [
                'name' => 'Uganda',
                'code' => 'UG'
            ],
            [
                'name' => 'Ukraine',
                'code' => 'UA'
            ],
            [
                'name' => 'United Arab Emirates',
                'code' => 'AE'
            ],
            [
                'name' => 'United Kingdom',
                'code' => 'GB'
            ],
            [
                'name' => 'United States',
                'code' => 'US'
            ],
            [
                'name' => 'Uruguay',
                'code' => 'UY'
            ],
            [
                'name' => 'Uzbekistan',
                'code' => 'UZ'
            ],
            [
                'name' => 'Vanuatu',
                'code' => 'VU'
            ],
            [
                'name' => 'Venezuela, Bolivarian Republic of Venezuela',
                'code' => 'VE'
            ],
            [
                'name' => 'Vietnam',
                'code' => 'VN'
            ],
            [
                'name' => 'Virgin Islands, British',
                'code' => 'VG'
            ],
            [
                'name' => 'Virgin Islands, U.S.',
                'code' => 'VI'
            ],
            [
                'name' => 'Wallis and Futuna',
                'code' => 'WF'
            ],
            [
                'name' => 'Yemen',
                'code' => 'YE'
            ],
            [
                'name' => 'Zambia',
                'code' => 'ZM'
            ],
            [
                'name' => 'Zimbabwe',
                'code' => 'ZW'
            ]
        ];
    }

    public function getPackageType(): array
    {
        return [
            ['code' => 'BAG'],
            ['code' => 'BARREL'],
            ['code' => 'BASKET'],
            ['code' => 'BOX'],
            ['code' => 'BUCKET'],
            ['code' => 'BUNDLE'],
            ['code' => 'CAGE'],
            ['code' => 'CARTON'],
            ['code' => 'CASE'],
            ['code' => 'CHEST'],
            ['code' => 'CONTAINER'],
            ['code' => 'CRATE'],
            ['code' => 'CYLINDER'],
            ['code' => 'DRUM'],
            ['code' => 'ENVELOPE'],
            ['code' => 'HAMPER'],
            ['code' => 'OTHER'],
            ['code' => 'PACKAGE'],
            ['code' => 'PAIL'],
            ['code' => 'PALLET'],
            ['code' => 'PARCEL'],
            ['code' => 'PIECE'],
            ['code' => 'REEL'],
            ['code' => 'ROLL'],
            ['code' => 'SACK'],
            ['code' => 'SHRINKWRAPPED'],
            ['code' => 'SKID'],
            ['code' => 'TANK'],
            ['code' => 'TOTEBIN'],
            ['code' => 'TUBE'],
            ['code' => 'UNIT'],
        ];
    }

    public function getCurrencyCode(): array
    {
        return [
            [
                'name' => 'US Dollar',
                'code' => 'USD'
            ],
            [
                'name' => 'Canadian Dollar',
                'code' => 'CAD'
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR'
            ],
            [
                'name' => 'United Arab Emirates Dirham',
                'code' => 'AED'
            ],
            [
                'name' => 'Afghan Afghani',
                'code' => 'AFN'
            ],
            [
                'name' => 'Albanian Lek',
                'code' => 'ALL'
            ],
            [
                'name' => 'Armenian Dram',
                'code' => 'AMD'
            ],
            [
                'name' => 'Argentine Peso',
                'code' => 'ARS'
            ],
            [
                'name' => 'Australian Dollar',
                'code' => 'AUD'
            ],
            [
                'name' => 'Azerbaijani Manat',
                'code' => 'AZN'
            ],
            [
                'name' => 'Bosnia-Herzegovina Convertible Mark',
                'code' => 'BAM'
            ],
            [
                'name' => 'Bangladeshi Taka',
                'code' => 'BDT'
            ],
            [
                'name' => 'Bulgarian Lev',
                'code' => 'BGN'
            ],
            [
                'name' => 'Bahraini Dinar',
                'code' => 'BHD'
            ],
            [
                'name' => 'Burundian Franc',
                'code' => 'BIF'
            ],
            [
                'name' => 'Brunei Dollar',
                'code' => 'BND'
            ],
            [
                'name' => 'Bolivian Boliviano',
                'code' => 'BOB'
            ],
            [
                'name' => 'Brazilian Real',
                'code' => 'BRL',
            ],
            [
                'name' => 'Botswanan Pula',
                'code' => 'BWP'
            ],
            [
                'name' => 'Belarusian Ruble',
                'code' => 'BYN'
            ],
            [
                'name' => 'Belize Dollar',
                'code' => 'BZD'
            ],
            [
                'name' => 'Congolese Franc',
                'code' => 'CDF'
            ],
            [
                'name' => 'Swiss Franc',
                'code' => 'CHF'
            ],
            [
                'name' => 'Chilean Peso',
                'code' => 'CLP'
            ],
            [
                'name' => 'Chinese Yuan',
                'code' => 'CNY'
            ],
            [
                'name' => 'Colombian Peso',
                'code' => 'COP'
            ],
            [
                'name' => 'Costa Rican Colón',
                'code' => 'CRC'
            ],
            [
                'name' => 'Cape Verdean Escudo',
                'code' => 'CVE'
            ],
            [
                'name' => 'Czech Republic Koruna',
                'code' => 'CZK'
            ],
            [
                'name' => 'Djiboutian Franc',
                'code' => 'DJF'
            ],
            [
                'name' => 'Danish Krone',
                'code' => 'DKK'
            ],
            [
                'name' => 'Dominican Peso',
                'code' => 'DOP'
            ],
            [
                'name' => 'Algerian Dinar',
                'code' => 'DZD'
            ],
            [
                'name' => 'Estonian Kroon',
                'code' => 'EEK'
            ],
            [
                'name' => 'Egyptian Pound',
                'code' => 'EGP'
            ],
            [
                'name' => 'Eritrean Nakfa',
                'code' => 'ERN'
            ],
            [
                'name' => 'Ethiopian Birr',
                'code' => 'ETB'
            ],
            [
                'name' => 'British Pound Sterling',
                'code' => 'GBP'
            ],
            [
                'name' => 'Georgian Lari',
                'code' => 'GEL'
            ],
            [
                'name' => 'Ghanaian Cedi',
                'code' => 'GHS'
            ],
            [
                'name' => 'Guinean Franc',
                'code' => 'GNF'
            ],
            [
                'name' => 'Guatemalan Quetzal',
                'code' => 'GTQ'
            ],
            [
                'name' => 'Hong Kong Dollar',
                'code' => 'HKD'
            ],
            [
                'name' => 'Honduran Lempira',
                'code' => 'HNL'
            ],
            [
                'name' => 'Croatian Kuna',
                'code' => 'HRK'
            ],
            [
                'name' => 'Hungarian Forint',
                'code' => 'HUF'
            ],
            [
                'name' => 'Indonesian Rupiah',
                'code' => 'IDR'
            ],
            [
                'name' => 'Israeli New Sheqel',
                'code' => 'ILS'
            ],
            [
                'name' => 'Indian Rupee',
                'code' => 'INR'
            ],
            [
                'name' => 'Iraqi Dinar',
                'code' => 'IQD'
            ],
            [
                'name' => 'Iranian Rial',
                'code' => 'IRR'
            ],
            [
                'name' => 'Icelandic Króna',
                'code' => 'ISK'
            ],
            [
                'name' => 'Jamaican Dollar',
                'code' => 'JMD'
            ],
            [
                'name' => 'Jordanian Dinar',
                'code' => 'JOD'
            ],
            [
                'name' => 'Japanese Yen',
                'code' => 'JPY'
            ],
            [
                'name' => 'Kenyan Shilling',
                'code' => 'KES'
            ],
            [
                'name' => 'Cambodian Riel',
                'code' => 'KHR'
            ],
            [
                'name' => 'Comorian Franc',
                'code' => 'KMF'
            ],
            [
                'name' => 'South Korean Won',
                'code' => 'KRW'
            ],
            [
                'name' => 'Kuwaiti Dinar',
                'code' => 'KWD'
            ],
            [
                'name' => 'Kazakhstani Tenge',
                'code' => 'KZT'
            ],
            [
                'name' => 'Lebanese Pound',
                'code' => 'LBP'
            ],
            [
                'name' => 'Sri Lankan Rupee',
                'code' => 'LKR'
            ],
            [
                'name' => 'Lithuanian Litas',
                'code' => 'LTL'
            ],
            [
                'name' => 'Latvian Lats',
                'code' => 'LVL'
            ],
            [
                'name' => 'Libyan Dinar',
                'code' => 'LYD'
            ],
            [
                'name' => 'Moroccan Dirham',
                'code' => 'MAD'
            ],
            [
                'name' => 'Moldovan Leu',
                'code' => 'MDL'
            ],
            [
                'name' => 'Malagasy Ariary',
                'code' => 'MGA'
            ],
            [
                'name' => 'Macedonian Denar',
                'code' => 'MKD'
            ],
            [
                'name' => 'Myanma Kyat',
                'code' => 'MMK'
            ],
            [
                'name' => 'Macanese Pataca',
                'code' => 'MOP'
            ],
            [
                'name' => 'Mauritian Rupee',
                'code' => 'MUR'
            ],
            [
                'name' => 'Mexican Peso',
                'code' => 'MXN'
            ],
            [
                'name' => 'Malaysian Ringgit',
                'code' => 'MYR'
            ],
            [
                'name' => 'Mozambican Metical',
                'code' => 'MZN'
            ],
            [
                'name' => 'Namibian Dollar',
                'code' => 'NAD'
            ],
            [
                'name' => 'Nigerian Naira',
                'code' => 'NGN'
            ],
            [
                'name' => 'Nicaraguan Córdoba',
                'code' => 'NIO'
            ],
            [
                'name' => 'Norwegian Krone',
                'code' => 'NOK'
            ],
            [
                'name' => 'Nepalese Rupee',
                'code' => 'NPR'
            ],
            [
                'name' => 'New Zealand Dollar',
                'code' => 'NZD'
            ],
            [
                'name' => 'Omani Rial',
                'code' => 'OMR'
            ],
            [
                'name' => 'Panamanian Balboa',
                'code' => 'PAB'
            ],
            [
                'name' => 'Peruvian Nuevo Sol',
                'code' => 'PEN'
            ],
            [
                'name' => 'Philippine Peso',
                'code' => 'PHP'
            ],
            [
                'name' => 'Pakistani Rupee',
                'code' => 'PKR'
            ],
            [
                'name' => 'Polish Zloty',
                'code' => 'PLN'
            ],
            [
                'name' => 'Paraguayan Guarani',
                'code' => 'PYG'
            ],
            [
                'name' => 'Qatari Rial',
                'code' => 'QAR'
            ],
            [
                'name' => 'Romanian Leu',
                'code' => 'RON'
            ],
            [
                'name' => 'Serbian Dinar',
                'code' => 'RSD'
            ],
            [
                'name' => 'Russian Ruble',
                'code' => 'RUB'
            ],
            [
                'name' => 'Rwandan Franc',
                'code' => 'RWF'
            ],
            [
                'name' => 'Saudi Riyal',
                'code' => 'SAR'
            ],
            [
                'name' => 'Sudanese Pound',
                'code' => 'SDG'
            ],
            [
                'name' => 'Swedish Krona',
                'code' => 'SEK'
            ],
            [
                'name' => 'Singapore Dollar',
                'code' => 'SGD'
            ],
            [
                'name' => 'Somali Shilling',
                'code' => 'SOS'
            ],
            [
                'name' => 'Syrian Pound',
                'code' => 'SYP'
            ],
            [
                'name' => 'Thai Baht',
                'code' => 'THB'
            ],
            [
                'name' => 'Tunisian Dinar',
                'code' => 'TND'
            ],
            [
                'name' => 'Tongan Paʻanga',
                'code' => 'TOP'
            ],
            [
                'name' => 'Turkish Lira',
                'code' => 'TRY'
            ],
            [
                'name' => 'Trinidad and Tobago Dollar',
                'code' => 'TTD'
            ],
            [
                'name' => 'New Taiwan Dollar',
                'code' => 'TWD'
            ],
            [
                'name' => 'Tanzanian Shilling',
                'code' => 'TZS'
            ],
            [
                'name' => 'Ukrainian Hryvnia',
                'code' => 'UAH'
            ],
            [
                'name' => 'Ugandan Shilling',
                'code' => 'UGX'
            ],
            [
                'name' => 'Uruguayan Peso',
                'code' => 'UYU'
            ],
            [
                'name' => 'Uzbekistan Som',
                'code' => 'UZS'
            ],
            [
                'name' => 'Venezuelan Bolívar',
                'code' => 'VEF'
            ],
            [
                'name' => 'Vietnamese Dong',
                'code' => 'VND'
            ],
            [
                'name' => 'CFA Franc BEAC',
                'code' => 'XAF'
            ],
            [
                'name' => 'CFA Franc BCEAO',
                'code' => 'XOF'
            ],
            [
                'name' => 'Yemeni Rial',
                'code' => 'YER'
            ],
            [
                'name' => 'South African Rand',
                'code' => 'ZAR'
            ],
            [
                'name' => 'Zambian Kwacha',
                'code' => 'ZMK'
            ],
            [
                'name' => 'Zimbabwean Dollar',
                'code' => 'ZWL'
            ]
        ];
    }
}
