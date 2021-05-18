<?php
namespace Excellence\Sms\Model\Adminhtml\System\Config\Source;
class Countrycode implements \Magento\Framework\Option\ArrayInterface 
{
    public function toOptionArray() 
    {
        $countries = array();
        $countries[1] = 'Canada (+1)';
        $countries[] = 'China (+86)';
        $countries[] = 'France (+33)';
        $countries[] = 'Germany (+49)';
        $countries[] = 'India (+91)';
        $countries[] = 'Japan (+81)';
        $countries[] = 'Pakistan (+92)';
        $countries[] = 'United Kingdom (+44)';
        $countries[] = 'United States (+1)';
        $countries[] = '--';
        $countries[] = 'Abkhazia (+7 840)';
        $countries[] = 'Abkhazia (+7 940)';
        $countries[] = 'Afghanistan (+93)';
        $countries[] = 'Albania (+355)';
        $countries[] = 'Algeria (+213)';
        $countries[] = 'American Samoa (+1 684)';
        $countries[] = 'Andorra (+376)';
        $countries[] = 'Angola (+244)';
        $countries[] = 'Anguilla (+1 264)';
        $countries[] = 'Antigua and Barbuda (+1 268)';
        $countries[] = 'Argentina (+54)';
        $countries[] = 'Armenia (+374)';
        $countries[] = 'Aruba (+297)';
        $countries[] = 'Ascension (+247)';
        $countries[] = 'Australia (+61)';
        $countries[] = 'Australian External Territories (+672)';
        $countries[] = 'Austria (+43)';
        $countries[] = 'Azerbaijan (+994)';
        $countries[] = 'Bahamas (+1 242)';
        $countries[] = 'Bahrain (+973)';
        $countries[] = 'Bangladesh (+880)';
        $countries[] = 'Barbados (+1 246)';
        $countries[] = 'Barbuda (+1 268)';
        $countries[] = 'Belarus (+375)';
        $countries[] = 'Belgium (+32)';
        $countries[] = 'Belize (+501)';
        $countries[] = 'Benin (+229)';
        $countries[] = 'Bermuda (+1 441)';
        $countries[] = 'Bhutan (+975)';
        $countries[] = 'Bolivia (+591)';
        $countries[] = 'Bosnia and Herzegovina (+387)';
        $countries[] = 'Botswana (+267)';
        $countries[] = 'Brazil (+55)';
        $countries[] = 'British Indian Ocean Territory (+246)';
        $countries[] = 'British Virgin Islands (+1 284)';
        $countries[] = 'Brunei (+673)';
        $countries[] = 'Bulgaria (+359)';
        $countries[] = 'Burkina Faso (+226)';
        $countries[] = 'Burundi (+257)';
        $countries[] = 'Cambodia (+855)';
        $countries[] = 'Cameroon (+237)';
        $countries[] = 'Canada (+1)';
        $countries[] = 'Cape Verde (+238)';
        $countries[] = 'Cayman Islands (+ 345)';
        $countries[] = 'Central African Republic (+236)';
        $countries[] = 'Chad (+235)';
        $countries[] = 'Chile (+56)';
        $countries[] = 'China (+86)';
        $countries[] = 'Christmas Island (+61)';
        $countries[] = 'Cocos-Keeling Islands (+61)';
        $countries[] = 'Colombia (+57)';
        $countries[] = 'Comoros (+269)';
        $countries[] = 'Congo (+242)';
        $countries[] = 'Congo, Dem. Rep. of (Zaire) (+243)';
        $countries[] = 'Cook Islands (+682)';
        $countries[] = 'Costa Rica (+506)';
        $countries[] = 'Ivory Coast (+225)';
        $countries[] = 'Croatia (+385)';
        $countries[] = 'Cuba (+53)';
        $countries[] = 'Curacao (+599)';
        $countries[] = 'Cyprus (+537)';
        $countries[] = 'Czech Republic (+420)';
        $countries[] = 'Denmark (+45)';
        $countries[] = 'Diego Garcia (+246)';
        $countries[] = 'Djibouti (+253)';
        $countries[] = 'Dominica (+1 767)';
        $countries[] = 'Dominican Republic (+1 809)';
        $countries[] = 'Dominican Republic (+1 829)';
        $countries[] = 'Dominican Republic (+1 849)';
        $countries[] = 'East Timor (+670)';
        $countries[] = 'Easter Island (+56)';
        $countries[] = 'Ecuador (+593)';
        $countries[] = 'Egypt (+20)';
        $countries[] = 'El Salvador (+503)';
        $countries[] = 'Equatorial Guinea (+240)';
        $countries[] = 'Eritrea (+291)';
        $countries[] = 'Estonia (+372)';
        $countries[] = 'Ethiopia (+251)';
        $countries[] = 'Falkland Islands (+500)';
        $countries[] = 'Faroe Islands (+298)';
        $countries[] = 'Fiji (+679)';
        $countries[] = 'Finland (+358)';
        $countries[] = 'France (+33)';
        $countries[] = 'French Antilles (+596)';
        $countries[] = 'French Guiana (+594)';
        $countries[] = 'French Polynesia (+689)';
        $countries[] = 'Gabon (+241)';
        $countries[] = 'Gambia (+220)';
        $countries[] = 'Georgia (+995)';
        $countries[] = 'Germany (+49)';
        $countries[] = 'Ghana (+233)';
        $countries[] = 'Gibraltar (+350)';
        $countries[] = 'Greece (+30)';
        $countries[] = 'Greenland (+299)';
        $countries[] = 'Grenada (+1 473)';
        $countries[] = 'Guadeloupe (+590)';
        $countries[] = 'Guam (+1 671)';
        $countries[] = 'Guatemala (+502)';
        $countries[] = 'Guinea (+224)';
        $countries[] = 'Guinea-Bissau (+245)';
        $countries[] = 'Guyana (+595)';
        $countries[] = 'Haiti (+509)';
        $countries[] = 'Honduras (+504)';
        $countries[] = 'Hong Kong SAR China (+852)';
        $countries[] = 'Hungary (+36)';
        $countries[] = 'Iceland (+354)';
        $countries[] = 'India (+91)';
        $countries[] = 'Indonesia (+62)';
        $countries[] = 'Iran (+98)';
        $countries[] = 'Iraq (+964)';
        $countries[] = 'Ireland (+353)';
        $countries[] = 'Israel (+972)';
        $countries[] = 'Italy (+39)';
        $countries[] = 'Jamaica (+1 876)';
        $countries[] = 'Japan (+81)';
        $countries[] = 'Jordan (+962)';
        $countries[] = 'Kazakhstan (+7 7)';
        $countries[] = 'Kenya (+254)';
        $countries[] = 'Kiribati (+686)';
        $countries[] = 'North Korea (+850)';
        $countries[] = 'South Korea (+82)';
        $countries[] = 'Kuwait (+965)';
        $countries[] = 'Kyrgyzstan (+996)';
        $countries[] = 'Laos (+856)';
        $countries[] = 'Latvia (+371)';
        $countries[] = 'Lebanon (+961)';
        $countries[] = 'Lesotho (+266)';
        $countries[] = 'Liberia (+231)';
        $countries[] = 'Libya (+218)';
        $countries[] = 'Liechtenstein (+423)';
        $countries[] = 'Lithuania (+370)';
        $countries[] = 'Luxembourg (+352)';
        $countries[] = 'Macau SAR China (+853)';
        $countries[] = 'Macedonia (+389)';
        $countries[] = 'Madagascar (+261)';
        $countries[] = 'Malawi (+265)';
        $countries[] = 'Malaysia (+60)';
        $countries[] = 'Maldives (+960)';
        $countries[] = 'Mali (+223)';
        $countries[] = 'Malta (+356)';
        $countries[] = 'Marshall Islands (+692)';
        $countries[] = 'Martinique (+596)';
        $countries[] = 'Mauritania (+222)';
        $countries[] = 'Mauritius (+230)';
        $countries[] = 'Mayotte (+262)';
        $countries[] = 'Mexico (+52)';
        $countries[] = 'Micronesia (+691)';
        $countries[] = 'Midway Island (+1 808)';
        $countries[] = 'Micronesia (+691)';
        $countries[] = 'Moldova (+373)';
        $countries[] = 'Monaco (+377)';
        $countries[] = 'Mongolia (+976)';
        $countries[] = 'Montenegro (+382)';
        $countries[] = 'Montserrat (+1664)';
        $countries[] = 'Morocco (+212)';
        $countries[] = 'Myanmar (+95)';
        $countries[] = 'Namibia (+264)';
        $countries[] = 'Nauru (+674)';
        $countries[] = 'Nepal (+977)';
        $countries[] = 'Netherlands (+31)';
        $countries[] = 'Netherlands Antilles (+599)';
        $countries[] = 'Nevis (+1 869)';
        $countries[] = 'New Caledonia (+687)';
        $countries[] = 'New Zealand (64)';
        $countries[] = 'Nicaragua (+505)';
        $countries[] = 'Niger (+227)';
        $countries[] = 'Nigeria (+234)';
        $countries[] = 'Niue (+683)';
        $countries[] = 'Norfolk Island (+672)';
        $countries[] = 'Northern Mariana Islands (+1 670)';
        $countries[] = 'Norway (+47)';
        $countries[] = 'Oman (+968)';
        $countries[] = 'Pakistan (+92)';
        $countries[] = 'Palau (+680)';
        $countries[] = 'Palestinian Territory (+970)';
        $countries[] = 'Panama (+507)';
        $countries[] = 'Papua New Guinea (+675)';
        $countries[] = 'Paraguay (+595)';
        $countries[] = 'Peru (+51)';
        $countries[] = 'Philippines (+63)';
        $countries[] = 'Poland (+48)';
        $countries[] = 'Portugal (+351)';
        $countries[] = 'Puerto Rico (+1 787)';
        $countries[] = 'Puerto Rico (+1 939)';
        $countries[] = 'Qatar (+974)';
        $countries[] = 'Reunion (+262)';
        $countries[] = 'Romania (+40)';
        $countries[] = 'Russia (+7)';
        $countries[] = 'Rwanda (+250)';
        $countries[] = 'Samoa (+685)';
        $countries[] = 'San Marino (+378)';
        $countries[] = 'Saudi Arabia (+966)';
        $countries[] = 'Senegal (+221)';
        $countries[] = 'Serbia (+381)';
        $countries[] = 'Seychelles (+248)';
        $countries[] = 'Sierra Leone (+232)';
        $countries[] = 'Singapore (+65)';
        $countries[] = 'Slovakia (+421)';
        $countries[] = 'Slovenia (+386)';
        $countries[] = 'Solomon Islands (+677)';
        $countries[] = 'South Africa (+27)';
        $countries[] = 'South Georgia and the South Sandwich Islands (+500)';
        $countries[] = 'Spain (+34)';
        $countries[] = 'Sri Lanka (+94)';
        $countries[] = 'Sudan (+249)';
        $countries[] = 'Suriname (+597)';
        $countries[] = 'Swaziland (+268)';
        $countries[] = 'Sweden (+46)';
        $countries[] = 'Switzerland (+41)';
        $countries[] = 'Syria (+963)';
        $countries[] = 'Taiwan (+886)';
        $countries[] = 'Tajikistan (+992)';
        $countries[] = 'Tanzania (+255)';
        $countries[] = 'Thailand (+66)';
        $countries[] = 'Timor Leste (+670)';
        $countries[] = 'Togo (+228)';
        $countries[] = 'Tokelau (+690)';
        $countries[] = 'Tonga (+676)';
        $countries[] = 'Trinidad and Tobago (+1 868)';
        $countries[] = 'Tunisia (+216)';
        $countries[] = 'Turkey (+90)';
        $countries[] = 'Turkmenistan (+993)';
        $countries[] = 'Turks and Caicos Islands (+1 649)';
        $countries[] = 'Tuvalu (+688)';
        $countries[] = 'Uganda (+256)';
        $countries[] = 'Ukraine (+380)';
        $countries[] = 'United Arab Emirates (+971)';
        $countries[] = 'United Kingdom (+44)';
        $countries[] = 'United States (+1)';
        $countries[] = 'Uruguay (+598)';
        $countries[] = 'U.S. Virgin Islands (+1 340)';
        $countries[] = 'Uzbekistan (+998)';
        $countries[] = 'Vanuatu (+678)';
        $countries[] = 'Venezuela (+58)';
        $countries[] = 'Vietnam (+84)';
        $countries[] = 'Wake Island (+1 808)';
        $countries[] = 'Wallis and Futuna (+681)';
        $countries[] = 'Yemen (+967)';
        $countries[] = 'Zambia (+260)';
        $countries[] = 'Zanzibar (+255)';
        $countries[] = 'Zimbabwe (+263)';
           
        
        foreach($countries as $key=>$country){
             $array[] = array('value' => $key, 'label' =>__("$country"));
        }
        
        return $array;
    }

}