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
            'basic_wage' => '5.77',
            'hours_pd' => '8',
            'days_pw' => '5',
            'percentage_return' => '25',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '1'
        ]);

        DB::table('staff_members')->insert([
            'id' => '2',
            'first_name' => 'Laura',
            'last_name' => 'Hall',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Senior Stylist',
            'holiday_entitlement' => '33',
            'basic_wage' => '6.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'percentage_return' => '15',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '1'
        ]);

        DB::table('staff_members')->insert([
            'id' => '3',
            'first_name' => 'Abi',
            'last_name' => 'Clarke',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'PK',
            'position' => 'Graduate Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '4.50',
            'hours_pd' => '8',
            'days_pw' => '5',
            'percentage_return' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '1'
        ]);

        DB::table('staff_members')->insert([
            'id' => '4',
            'first_name' => 'Georgia',
            'last_name' => 'Lutton',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '7.20',
            'hours_pd' => '8',
            'days_pw' => '5',
            'percentage_return' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '1'
        ]);

        DB::table('staff_members')->insert([
            'id' => '5',
            'first_name' => 'Izzy',
            'last_name' => 'Lamb',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'PK',
            'position' => 'Senior Stylist',
            'holiday_entitlement' => '28',
            'basic_wage' => '3.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'percentage_return' => '20',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '1'
        ]);

        DB::table('staff_members')->insert([
            'id' => '6',
            'first_name' => 'Lucy',
            'last_name' => 'Watson',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'Jakata',
            'position' => 'Apprentice',
            'holiday_entitlement' => '28',
            'basic_wage' => '5.00',
            'hours_pd' => '8',
            'days_pw' => '5',
            'percentage_return' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '1'
        ]);

        DB::table('staff_members')->insert([
            'id' => '7',
            'first_name' => 'Joanne',
            'last_name' => 'Mahoney',
            'birth_date' => Carbon::now()->format('Y-m-d'),
            'salon' => 'PK',
            'position' => 'Senior Stylist',
            'holiday_entitlement' => '17',
            'basic_wage' => '6.00',
            'hours_pd' => '8',
            'days_pw' => '3',
            'percentage_return' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'active' => '0'
        ]);
    }
}
