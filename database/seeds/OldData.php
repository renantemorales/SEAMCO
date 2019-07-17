<?php

use Illuminate\Database\Seeder;
use App\Model\CivilStatus\CivilStatus;
use App\Model\Gender\Gender;
use App\Model\MailingAddress\MailingAddress;

class OldData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $civilStatDescriptions = [
            ['CivilStatDesc' => 'Married'],
            ['CivilStatDesc' => 'Single'],
            ['CivilStatDesc' => 'Widow'],
            ['CivilStatDesc' => 'Separeted'],
            ['CivilStatDesc' => 'Divorced'],
            ['CivilStatDesc' => 'N/A'],
        ];

        foreach ($civilStatDescriptions as $civilStatDescription) {
            CivilStatus::create($civilStatDescription);
        }

        $genders = [
            ['GenderDesc' => 'Male'],
            ['GenderDesc' => 'Female'],
            ['GenderDesc' => 'N/A']
        ];
        
        foreach ($genders as $gender) {
            Gender::create($gender);
        }

        $MailingAddressDescriptions = [
            ['MailingAddressDesc' => 'Residence'],
            ['MailingAddressDesc' => 'Provincial'],
            ['MailingAddressDesc' => 'Business'],
            ['MailingAddressDesc' => 'Employment'],
            ['MailingAddressDesc' => 'Spouse'],
            ['MailingAddressDesc' => 'N/A']
        ];

        foreach ($MailingAddressDescriptions as $MailingAddressDescription) {
            MailingAddress::create($MailingAddressDescription);
        }
    }
}
