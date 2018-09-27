<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StaffMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_members')->insert([
            'id' => '1',
            'first_name' => 'Matthew',
            'last_name' => 'Lane',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '1200.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'target_multiplier' => '20',
            'commission_value' => '30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '2',
            'first_name' => 'Laura',
            'last_name' => 'Hall',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Senior Stylist',
            'holiday_entitlement' => '33',
            'basic_wage' => '1400.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'target_multiplier' => '20',
            'commission_value' => '30',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '3',
            'first_name' => 'Abi',
            'last_name' => 'Clarke',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'PK',
            'position' => 'Graduate Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '900.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'target_multiplier' => '10',
            'commission_value' => '15',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '4',
            'first_name' => 'Georgia',
            'last_name' => 'Lutton',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '1200.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'target_multiplier' => '20',
            'commission_value' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '5',
            'first_name' => 'Izzy',
            'last_name' => 'Lamb',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'PK',
            'position' => 'Senior Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '1500.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'target_multiplier' => '20',
            'commission_value' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '6',
            'first_name' => 'Lucy',
            'last_name' => 'Watson',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Apprentice',
            'holiday_entitlement' => '28',
            'basic_wage' => '700.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'target_multiplier' => '0',
            'commission_value' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '7',
            'first_name' => 'Joanne',
            'last_name' => 'Mahoney',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'PK',
            'position' => 'Senior Stylist',
            'holiday_entitlement' => '17',
            'basic_wage' => '900.00',
            'hours_pd' => '8',
            'days_pw' => '3',
            'target_multiplier' => '20',
            'commission_value' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
