<?php

use yii\db\Migration;

/**
 * Class m191104_164706_fill_countries
 */
class m191104_164706_fill_countries extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('dictionary_countries');
        $this->insert('dictionary_countries', ['name' => 'Afghanistan']);
        $this->insert('dictionary_countries', ['name' => 'ALA Aland Islands']);
        $this->insert('dictionary_countries', ['name' => 'Albania']);
        $this->insert('dictionary_countries', ['name' => 'Algeria']);
        $this->insert('dictionary_countries', ['name' => 'American Samoa']);
        $this->insert('dictionary_countries', ['name' => 'Andorra']);
        $this->insert('dictionary_countries', ['name' => 'Angola']);
        $this->insert('dictionary_countries', ['name' => 'Anguilla']);
        $this->insert('dictionary_countries', ['name' => 'Antarctica']);
        $this->insert('dictionary_countries', ['name' => 'Antigua and Barbuda']);
        $this->insert('dictionary_countries', ['name' => 'Argentina']);
        $this->insert('dictionary_countries', ['name' => 'Armenia']);
        $this->insert('dictionary_countries', ['name' => 'Aruba']);
        $this->insert('dictionary_countries', ['name' => 'Australia']);
        $this->insert('dictionary_countries', ['name' => 'Austria']);
        $this->insert('dictionary_countries', ['name' => 'Azerbaijan']);
        $this->insert('dictionary_countries', ['name' => 'Bahamas']);
        $this->insert('dictionary_countries', ['name' => 'Bahrain']);
        $this->insert('dictionary_countries', ['name' => 'Bangladesh']);
        $this->insert('dictionary_countries', ['name' => 'Barbados']);
        $this->insert('dictionary_countries', ['name' => 'Belarus']);
        $this->insert('dictionary_countries', ['name' => 'Belgium']);
        $this->insert('dictionary_countries', ['name' => 'Belize']);
        $this->insert('dictionary_countries', ['name' => 'Benin']);
        $this->insert('dictionary_countries', ['name' => 'Bermuda']);
        $this->insert('dictionary_countries', ['name' => 'Bhutan']);
        $this->insert('dictionary_countries', ['name' => 'Bolivia']);
        $this->insert('dictionary_countries', ['name' => 'Bosnia and Herzegovina']);
        $this->insert('dictionary_countries', ['name' => 'Botswana']);
        $this->insert('dictionary_countries', ['name' => 'Bouvet Island']);
        $this->insert('dictionary_countries', ['name' => 'Brazil']);
        $this->insert('dictionary_countries', ['name' => 'British Virgin Islands']);
        $this->insert('dictionary_countries', ['name' => 'British Indian Ocean Territory']);
        $this->insert('dictionary_countries', ['name' => 'Brunei Darussalam']);
        $this->insert('dictionary_countries', ['name' => 'Bulgaria']);
        $this->insert('dictionary_countries', ['name' => 'Burkina Faso']);
        $this->insert('dictionary_countries', ['name' => 'Burundi']);
        $this->insert('dictionary_countries', ['name' => 'Cambodia']);
        $this->insert('dictionary_countries', ['name' => 'Cameroon']);
        $this->insert('dictionary_countries', ['name' => 'Canada']);
        $this->insert('dictionary_countries', ['name' => 'Cape Verde']);
        $this->insert('dictionary_countries', ['name' => 'Cayman Islands']);
        $this->insert('dictionary_countries', ['name' => 'Central African Republic']);
        $this->insert('dictionary_countries', ['name' => 'Chad']);
        $this->insert('dictionary_countries', ['name' => 'Chile']);
        $this->insert('dictionary_countries', ['name' => 'China']);
        $this->insert('dictionary_countries', ['name' => 'Hong Kong']);
        $this->insert('dictionary_countries', ['name' => 'Macao']);
        $this->insert('dictionary_countries', ['name' => 'Christmas Island']);
        $this->insert('dictionary_countries', ['name' => 'Cocos (Keeling) Islands']);
        $this->insert('dictionary_countries', ['name' => 'Colombia']);
        $this->insert('dictionary_countries', ['name' => 'Comoros']);
        $this->insert('dictionary_countries', ['name' => 'Congo (Brazzaville)']);
        $this->insert('dictionary_countries', ['name' => 'Congo, (Kinshasa)']);
        $this->insert('dictionary_countries', ['name' => 'Cook Islands']);
        $this->insert('dictionary_countries', ['name' => 'Costa Rica']);
        $this->insert('dictionary_countries', ['name' => 'Côte d\'Ivoire']);
        $this->insert('dictionary_countries', ['name' => 'Croatia']);
        $this->insert('dictionary_countries', ['name' => 'Cuba']);
        $this->insert('dictionary_countries', ['name' => 'Cyprus']);
        $this->insert('dictionary_countries', ['name' => 'Czech Republic']);
        $this->insert('dictionary_countries', ['name' => 'Denmark']);
        $this->insert('dictionary_countries', ['name' => 'Djibouti']);
        $this->insert('dictionary_countries', ['name' => 'Dominica']);
        $this->insert('dictionary_countries', ['name' => 'Dominican']);
        $this->insert('dictionary_countries', ['name' => 'Ecuador']);
        $this->insert('dictionary_countries', ['name' => 'Egypt']);
        $this->insert('dictionary_countries', ['name' => 'El Salvador']);
        $this->insert('dictionary_countries', ['name' => 'Equatorial Guinea']);
        $this->insert('dictionary_countries', ['name' => 'Eritrea']);
        $this->insert('dictionary_countries', ['name' => 'Estonia']);
        $this->insert('dictionary_countries', ['name' => 'Ethiopia']);
        $this->insert('dictionary_countries', ['name' => 'Falkland Islands (Malvinas)']);
        $this->insert('dictionary_countries', ['name' => 'Faroe Islands']);
        $this->insert('dictionary_countries', ['name' => 'Fiji']);
        $this->insert('dictionary_countries', ['name' => 'Finland']);
        $this->insert('dictionary_countries', ['name' => 'France']);
        $this->insert('dictionary_countries', ['name' => 'French Guiana']);
        $this->insert('dictionary_countries', ['name' => 'French Polynesia']);
        $this->insert('dictionary_countries', ['name' => 'French Southern Territories']);
        $this->insert('dictionary_countries', ['name' => 'Gabon']);
        $this->insert('dictionary_countries', ['name' => 'Gambia']);
        $this->insert('dictionary_countries', ['name' => 'Georgia']);
        $this->insert('dictionary_countries', ['name' => 'Germany']);
        $this->insert('dictionary_countries', ['name' => 'Ghana']);
        $this->insert('dictionary_countries', ['name' => 'Gibraltar']);
        $this->insert('dictionary_countries', ['name' => 'Greece']);
        $this->insert('dictionary_countries', ['name' => 'Greenland']);
        $this->insert('dictionary_countries', ['name' => 'Grenada']);
        $this->insert('dictionary_countries', ['name' => 'Guadeloupe']);
        $this->insert('dictionary_countries', ['name' => 'Guam']);
        $this->insert('dictionary_countries', ['name' => 'Guatemala']);
        $this->insert('dictionary_countries', ['name' => 'Guernsey']);
        $this->insert('dictionary_countries', ['name' => 'Guinea']);
        $this->insert('dictionary_countries', ['name' => 'Guinea-Bissau']);
        $this->insert('dictionary_countries', ['name' => 'Guyana']);
        $this->insert('dictionary_countries', ['name' => 'Haiti']);
        $this->insert('dictionary_countries', ['name' => 'Heard and Mcdonald Islands']);
        $this->insert('dictionary_countries', ['name' => 'Holy See (Vatican City State)']);
        $this->insert('dictionary_countries', ['name' => 'Honduras']);
        $this->insert('dictionary_countries', ['name' => 'Hungary']);
        $this->insert('dictionary_countries', ['name' => 'Iceland']);
        $this->insert('dictionary_countries', ['name' => 'India']);
        $this->insert('dictionary_countries', ['name' => 'Indonesia']);
        $this->insert('dictionary_countries', ['name' => 'Iran']);
        $this->insert('dictionary_countries', ['name' => 'Iraq']);
        $this->insert('dictionary_countries', ['name' => 'Ireland']);
        $this->insert('dictionary_countries', ['name' => 'Isle of Man']);
        $this->insert('dictionary_countries', ['name' => 'Israel']);
        $this->insert('dictionary_countries', ['name' => 'Italy']);
        $this->insert('dictionary_countries', ['name' => 'Jamaica']);
        $this->insert('dictionary_countries', ['name' => 'Japan']);
        $this->insert('dictionary_countries', ['name' => 'Jersey']);
        $this->insert('dictionary_countries', ['name' => 'Jordan']);
        $this->insert('dictionary_countries', ['name' => 'Kazakhstan']);
        $this->insert('dictionary_countries', ['name' => 'Kenya']);
        $this->insert('dictionary_countries', ['name' => 'Kiribati']);
        $this->insert('dictionary_countries', ['name' => 'Korea (North)']);
        $this->insert('dictionary_countries', ['name' => 'Korea (South)']);
        $this->insert('dictionary_countries', ['name' => 'Kuwait']);
        $this->insert('dictionary_countries', ['name' => 'Kyrgyzstan']);
        $this->insert('dictionary_countries', ['name' => 'Lao']);
        $this->insert('dictionary_countries', ['name' => 'Latvia']);
        $this->insert('dictionary_countries', ['name' => 'Lebanon']);
        $this->insert('dictionary_countries', ['name' => 'Lesotho']);
        $this->insert('dictionary_countries', ['name' => 'Liberia']);
        $this->insert('dictionary_countries', ['name' => 'Libya']);
        $this->insert('dictionary_countries', ['name' => 'Liechtenstein']);
        $this->insert('dictionary_countries', ['name' => 'Lithuania']);
        $this->insert('dictionary_countries', ['name' => 'Luxembourg']);
        $this->insert('dictionary_countries', ['name' => 'Macedonia']);
        $this->insert('dictionary_countries', ['name' => 'Madagascar']);
        $this->insert('dictionary_countries', ['name' => 'Malawi']);
        $this->insert('dictionary_countries', ['name' => 'Malaysia']);
        $this->insert('dictionary_countries', ['name' => 'Maldives']);
        $this->insert('dictionary_countries', ['name' => 'Mali']);
        $this->insert('dictionary_countries', ['name' => 'Malta']);
        $this->insert('dictionary_countries', ['name' => 'Marshall Islands']);
        $this->insert('dictionary_countries', ['name' => 'Martinique']);
        $this->insert('dictionary_countries', ['name' => 'Mauritania']);
        $this->insert('dictionary_countries', ['name' => 'Mauritius']);
        $this->insert('dictionary_countries', ['name' => 'Mayotte']);
        $this->insert('dictionary_countries', ['name' => 'Mexico']);
        $this->insert('dictionary_countries', ['name' => 'Micronesia']);
        $this->insert('dictionary_countries', ['name' => 'Moldova']);
        $this->insert('dictionary_countries', ['name' => 'Monaco']);
        $this->insert('dictionary_countries', ['name' => 'Mongolia']);
        $this->insert('dictionary_countries', ['name' => 'Montenegro']);
        $this->insert('dictionary_countries', ['name' => 'Montserrat']);
        $this->insert('dictionary_countries', ['name' => 'Morocco']);
        $this->insert('dictionary_countries', ['name' => 'Mozambique']);
        $this->insert('dictionary_countries', ['name' => 'Myanmar']);
        $this->insert('dictionary_countries', ['name' => 'Namibia']);
        $this->insert('dictionary_countries', ['name' => 'Nauru']);
        $this->insert('dictionary_countries', ['name' => 'Nepal']);
        $this->insert('dictionary_countries', ['name' => 'Netherlands']);
        $this->insert('dictionary_countries', ['name' => 'Netherlands Antilles']);
        $this->insert('dictionary_countries', ['name' => 'New Caledonia']);
        $this->insert('dictionary_countries', ['name' => 'New Zealand']);
        $this->insert('dictionary_countries', ['name' => 'Nicaragua']);
        $this->insert('dictionary_countries', ['name' => 'Niger']);
        $this->insert('dictionary_countries', ['name' => 'Nigeria']);
        $this->insert('dictionary_countries', ['name' => 'Niue']);
        $this->insert('dictionary_countries', ['name' => 'Norfolk Island']);
        $this->insert('dictionary_countries', ['name' => 'Northern Mariana Islands']);
        $this->insert('dictionary_countries', ['name' => 'Norway']);
        $this->insert('dictionary_countries', ['name' => 'Oman']);
        $this->insert('dictionary_countries', ['name' => 'Pakistan']);
        $this->insert('dictionary_countries', ['name' => 'Palau']);
        $this->insert('dictionary_countries', ['name' => 'Palestinian Territory']);
        $this->insert('dictionary_countries', ['name' => 'Panama']);
        $this->insert('dictionary_countries', ['name' => 'Papua New Guinea']);
        $this->insert('dictionary_countries', ['name' => 'Paraguay']);
        $this->insert('dictionary_countries', ['name' => 'Peru']);
        $this->insert('dictionary_countries', ['name' => 'Philippines']);
        $this->insert('dictionary_countries', ['name' => 'Pitcairn']);
        $this->insert('dictionary_countries', ['name' => 'Poland']);
        $this->insert('dictionary_countries', ['name' => 'Portugal']);
        $this->insert('dictionary_countries', ['name' => 'Puerto Rico']);
        $this->insert('dictionary_countries', ['name' => 'Qatar']);
        $this->insert('dictionary_countries', ['name' => 'Réunion']);
        $this->insert('dictionary_countries', ['name' => 'Romania']);
        $this->insert('dictionary_countries', ['name' => 'Russian Federation']);
        $this->insert('dictionary_countries', ['name' => 'Rwanda']);
        $this->insert('dictionary_countries', ['name' => 'Saint-Barthélemy']);
        $this->insert('dictionary_countries', ['name' => 'Saint Helena']);
        $this->insert('dictionary_countries', ['name' => 'Saint Kitts and Nevis']);
        $this->insert('dictionary_countries', ['name' => 'Saint Lucia']);
        $this->insert('dictionary_countries', ['name' => 'Saint-Martin']);
        $this->insert('dictionary_countries', ['name' => 'Saint Pierre and Miquelon']);
        $this->insert('dictionary_countries', ['name' => 'Saint Vincent and Grenadines']);
        $this->insert('dictionary_countries', ['name' => 'Samoa']);
        $this->insert('dictionary_countries', ['name' => 'San Marino']);
        $this->insert('dictionary_countries', ['name' => 'Sao Tome and Principe']);
        $this->insert('dictionary_countries', ['name' => 'Saudi Arabia']);
        $this->insert('dictionary_countries', ['name' => 'Senegal']);
        $this->insert('dictionary_countries', ['name' => 'Serbia']);
        $this->insert('dictionary_countries', ['name' => 'Seychelles']);
        $this->insert('dictionary_countries', ['name' => 'Sierra Leone']);
        $this->insert('dictionary_countries', ['name' => 'Singapore']);
        $this->insert('dictionary_countries', ['name' => 'Slovakia']);
        $this->insert('dictionary_countries', ['name' => 'Slovenia']);
        $this->insert('dictionary_countries', ['name' => 'Solomon Islands']);
        $this->insert('dictionary_countries', ['name' => 'Somalia']);
        $this->insert('dictionary_countries', ['name' => 'South Africa']);
        $this->insert('dictionary_countries', ['name' => 'South Georgia and the South Sandwich Islands']);
        $this->insert('dictionary_countries', ['name' => 'South Sudan']);
        $this->insert('dictionary_countries', ['name' => 'Spain']);
        $this->insert('dictionary_countries', ['name' => 'Sri Lanka']);
        $this->insert('dictionary_countries', ['name' => 'Sudan']);
        $this->insert('dictionary_countries', ['name' => 'Suriname']);
        $this->insert('dictionary_countries', ['name' => 'Svalbard and Jan Mayen Islands']);
        $this->insert('dictionary_countries', ['name' => 'Swaziland']);
        $this->insert('dictionary_countries', ['name' => 'Sweden']);
        $this->insert('dictionary_countries', ['name' => 'Switzerland']);
        $this->insert('dictionary_countries', ['name' => 'Syrian Arab Republic']);
        $this->insert('dictionary_countries', ['name' => 'Taiwan']);
        $this->insert('dictionary_countries', ['name' => 'Tajikistan']);
        $this->insert('dictionary_countries', ['name' => 'Tanzania']);
        $this->insert('dictionary_countries', ['name' => 'Thailand']);
        $this->insert('dictionary_countries', ['name' => 'Timor-Leste']);
        $this->insert('dictionary_countries', ['name' => 'Togo']);
        $this->insert('dictionary_countries', ['name' => 'Tokelau']);
        $this->insert('dictionary_countries', ['name' => 'Tonga']);
        $this->insert('dictionary_countries', ['name' => 'Trinidad and Tobago']);
        $this->insert('dictionary_countries', ['name' => 'Tunisia']);
        $this->insert('dictionary_countries', ['name' => 'Turkey']);
        $this->insert('dictionary_countries', ['name' => 'Turkmenistan']);
        $this->insert('dictionary_countries', ['name' => 'Turks and Caicos Islands']);
        $this->insert('dictionary_countries', ['name' => 'Tuvalu']);
        $this->insert('dictionary_countries', ['name' => 'Uganda']);
        $this->insert('dictionary_countries', ['name' => 'Ukraine']);
        $this->insert('dictionary_countries', ['name' => 'United Arab Emirates']);
        $this->insert('dictionary_countries', ['name' => 'United Kingdom']);
        $this->insert('dictionary_countries', ['name' => 'United States of America']);
        $this->insert('dictionary_countries', ['name' => 'US Minor Outlying Islands']);
        $this->insert('dictionary_countries', ['name' => 'Uruguay UY']);
        $this->insert('dictionary_countries', ['name' => 'Uzbekistan']);
        $this->insert('dictionary_countries', ['name' => 'Vanuatu']);
        $this->insert('dictionary_countries', ['name' => 'Venezuela']);
        $this->insert('dictionary_countries', ['name' => 'Viet Nam']);
        $this->insert('dictionary_countries', ['name' => 'Virgin Island']);
        $this->insert('dictionary_countries', ['name' => 'Wallis and Futuna Islands']);
        $this->insert('dictionary_countries', ['name' => 'Western Sahara']);
        $this->insert('dictionary_countries', ['name' => 'Yemen']);
        $this->insert('dictionary_countries', ['name' => 'Zambia']);
        $this->insert('dictionary_countries', ['name' => 'Zimbabwe']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191104_164706_fill_countries cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_164706_fill_countries cannot be reverted.\n";

        return false;
    }
    */
}