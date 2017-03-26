<?php


namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Country;

class LoadCountryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $country = new Country();

        $country->setName('Afghanistan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Albania');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Algeria');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('American Samoa');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Andorra');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Angola');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Anguilla');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Antarctica');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Antigua and Barbuda');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Argentina');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Armenia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Aruba');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Australia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Austria');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Azerbaijan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bahamas');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bahrain');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bangladesh');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Barbados');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Belarus');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Belgium');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Belize');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Benin');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bermuda');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bhutan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bolivia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bosnia and Herzegovina');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Botswana');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bouvet Island');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Brazil');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('British Indian Ocean Territory');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Brunei Darussalam');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Bulgaria');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Burkina Faso');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Burundi');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cambodia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cameroon');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Canada');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cape Verde');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cayman Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Central African Republic');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Chad');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Chile');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('China');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Christmas Island');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cocos (Keeling) Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Colombia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Comoros');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Congo');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cook Islands');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Costa Rica');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Croatia (Hrvatska)');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cuba');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Cyprus');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Czech Republic');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Denmark');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Djibouti');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Dominica');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Dominican Republic');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('East Timor');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Ecuador');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Egypt');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('El Salvador');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Equatorial Guinea');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Eritrea');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Estonia');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Ethiopia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Falkland Islands (Malvinas)');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('aroe Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Fiji');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('France');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('France, Metropolitan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('French Guiana');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('French Polynesia');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('French Southern Territories');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Gabon');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Gambia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Georgia');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Germany');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Ghana');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Gibraltar');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Guernsey');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Greece');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Greenland');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Grenada');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Guadeloupe');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Guam');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Guatemala');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Guinea');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Guinea-Bissau');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Guyana');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Haiti');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Heard and Mc Donald Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Honduras');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Hong Kong');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Hungary');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Iceland');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('India');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Isle of Man');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Indonesia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Iran (Islamic Republic of)');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Iraq');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Ireland');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Israel');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Italy');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Ivory Coast');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Jersey');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Jamaica');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Japan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Jordan');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Kazakhstan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Kenya');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Kiribati');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Korea, Democratic People\'\'s Republic of\'');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Korea, Republic of');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Kosovo');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Kuwait');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Kyrgyzstan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Lao People\'\'s Democratic Republic');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Latvia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Lebanon');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Lesotho');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Liberia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Libyan Arab Jamahiriya');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Liechtenstein');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Lithuania');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Luxembourg');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Macau');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Macedonia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Madagascar');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Malawi');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Malaysia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Maldives');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Mali');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Malta');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Marshall Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Martinique');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Mauritania');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Mauritius');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Mayotte');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Mexico');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Micronesia, Federated States of');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Moldova, Republic of');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Monaco');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Mongolia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Montenegro');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Montserrat');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Morocco');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Mozambique');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Myanmar');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Namibia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Nauru');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Nepal');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Netherlands');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Netherlands Antilles');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('New Caledonia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('New Zealand');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Nicaragua');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Niger');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Nigeria');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Niue');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Norfolk Island');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Northern Mariana Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Norway');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Oman');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Pakistan');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Palau');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Palestine');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Panama');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('apua New Guinea');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Paraguay');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Peru');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Philippines');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Pitcairn');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Poland');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Portugal');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Puerto Rico');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Qatar');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Reunion');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Romania');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Russian Federation');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Rwanda');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Saint Kitts and Nevis');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Saint Lucia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Saint Vincent and the Grenadines');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Samoa');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('San Marino');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Sao Tome and Principe');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Saudi Arabia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Senegal');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Serbia');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Seychelles');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Sierra Leone');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Singapore');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Slovakia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Slovenia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('olomon Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Somalia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('South Africa');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('South Georgia South Sandwich Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Spain');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Sri Lanka');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('St. Helena');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('St. Pierre and Miquelon');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Sudan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Suricountry (name)');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Svalbard and Jan Mayen Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Swaziland');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Sweden');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Switzerland');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Syrian Arab Republic');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Taiwan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Tajikistan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Tanzania, United Republic of');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Thailand');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Togo');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Tokelau');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Tonga');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Trinidad and Tobago');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Tunisia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Turkey');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Turkmenistan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Turks and Caicos Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Tuvalu');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Uganda');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Ukraine');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('United Arab Emirates');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('United Kingdom');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('United States');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('United States minor outlying islands');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Uruguay');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Uzbekistan');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Vanuatu');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Vatican City State');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Venezuela');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Vietnam');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Virgin Islands (British)');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Virgin Islands (U.S.)');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Wallis and Futuna Islands');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Western Sahara');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Yemen');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Zaire');
        $manager->persist($country);
        $manager->flush();


        $country = new Country();
        $country->setName('Zambia');
        $manager->persist($country);
        $manager->flush();

        $country = new Country();
        $country->setName('Zimbabwe');
        $manager->persist($country);
        $manager->flush();


    }
}

